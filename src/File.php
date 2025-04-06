<?php 
namespace Psys\Utils;


class File
{
    public function getDataURI($absPath)
    {
        if (!file_exists($absPath)) {return '';}
        
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $type = $finfo->file($absPath);
        return 'data:' . $type . ';base64,' . base64_encode(file_get_contents($absPath));
    }
    
    public function pathRemoveExtension (string $path) : string
    {
        $pozicePripony = strlen($path) - strrpos($path, '.');   //echo '<br>$pozicePripony: '.$pozicePripony;
        
        return substr($path, 0, -$pozicePripony);
    }

    public function pathGetExtension (string $path) : string
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }
    
    /**
     * Creates a JPEG thumbnail from PDF, PNG or JPG
     * 
     * @param string $inputFilePath - absolute path to the input file
     * @param string $thumbPath - absolute path where the thumbnail will be saved
     */
    public function createThumbnail (string $inputFilePath, string $thumbPath, int $resolution = 150, int $quality = 82) : void
    {
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $inputFileMimeType = $finfo->file($inputFilePath);

        if (!in_array($inputFileMimeType, $allowedMimeTypes))
        {
            throw new \Exception('Invalid mime type');
        }
     
        $imagick = new \Imagick();
        $imagick->setResolution( $resolution, $resolution );
        $imagick->readImage( $inputFilePath );
        
        $imagick->setImageFormat('jpeg');
        $imagick->setImageCompression(\Imagick::COMPRESSION_JPEG);
        $imagick->setImageCompressionQuality($quality);
        
        if ($inputFileMimeType === 'image/png')
        {
            $imagick = $imagick->mergeImageLayers(\Imagick::LAYERMETHOD_FLATTEN );
        }
        
        $imagick->writeImage($thumbPath);
    }

    /**
     *  Strip metadata from JPEG, PNG, PDF, MP3 or MP4 files
     * 
     *  @param string $filePath - absolute path of the file
     */
    public function stripMetadata (string $filePath) : void
    {
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->file($filePath);

        if ($mimeType === 'image/jpeg' || $mimeType === 'image/png') 
        {
            $imagick = new \Imagick();
            $imagick->readImage( $filePath );
            
            // Keep color profile
            $profiles = $imagick->getImageProfiles("icc", true);
            $imagick->stripImage();
            if ( !empty($profiles) ) {$imagick->profileImage("icc", $profiles['icc']);}
            
            $imagick->writeImage($filePath);
        }
        
        else if ($mimeType === 'application/pdf')
        {
            $imagick = new \Imagick();
            $imagick->setResolution(250, 250);
            $imagick->readImage( $filePath );                
//          $pages = (int)$imagick->getNumberImages(); 
            
            // Save all pages as temporary JPGs
            $absPathsTemp = [];
            foreach ($imagick as $i => $im) 
            {
                $im->setImageFormat('jpeg');
                $im->setImageCompression(\Imagick::COMPRESSION_JPEG);
                $im->setImageCompressionQuality(80);

                $absPath = $this->filesystem->tempnam(sys_get_temp_dir(), '', '.jpg');
                
                $im->writeImage($absPath);
                $absPathsTemp[] = $absPath;
            }                

            $imagick->clear();
            
            // New PDF from temporary JPGs
            $imagick = new \Imagick($absPathsTemp);
            $imagick->setImageFormat('pdf');
            $imagick->writeImages($filePath, true); 
            $imagick->clear();
            
            // Remove temporary JPGs
            $this->filesystem->remove($absPathsTemp);
        }
        
        else if ($mimeType === 'video/mp4' || $mimeType === 'audio/mpeg')
        {
            $extension = $mimeType === 'video/mp4' ? 'mp4' : 'mp3';

            $process = new Process( //TODO remove Process dependency
                [
                    "/usr/bin/ffmpeg",
                    '-i', 
                    $filePath, 
                    '-map_metadata', 
                    '-1', 
                    '-c:v', 
                    'copy',
                    '-c:a',
                    'copy',
                    $filePath.'_ffmpeg_output.'.$extension
                ]);
            $process->run();
            
            // executes after the command finishes
            if (!$process->isSuccessful()) 
            {
                throw new ProcessFailedException($process);
            }
            else
            {
                $this->filesystem->rename($filePath.'_ffmpeg_output.'.$extension, $filePath, true);
            }
        }
    }
}

?>