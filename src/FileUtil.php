<?php 
namespace Utils;

use Psr\Log\LoggerInterface;


class FileUtil
{    
    function __construct
    (
        private $projectDir,
        private LoggerInterface $vLogger,
    )
    {}
    
    public function getDataURI($absPath)
    {
        if (!file_exists($absPath)) {return '';}
        
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $type = $finfo->file($absPath);
        return 'data:' . $type . ';base64,' . base64_encode(file_get_contents($absPath));
    }
    
    public function pathRemoveExtension ($path)
    {
        $pozicePripony = strlen($path) - strrpos($path, '.');   //echo '<br>$pozicePripony: '.$pozicePripony;
        
        return substr($path, 0, -$pozicePripony);
    }
    
    public function createThumbnail ($soubor, $adresar)
    {
        if ($soubor['mimeType'] !== 'application/pdf' && $soubor['mimeType'] !== 'image/jpeg' && $soubor['mimeType'] !== 'image/png') {return;}
        
        $souborCesta = $this->projectDir.$adresar.$soubor['nameFileSystem'];
        
        try
        {
            $imagick = new \Imagick();
            $imagick->setResolution( 150, 150 );
            $imagick->readImage( $souborCesta );
            
            $imagick->setImageFormat('jpeg');
            $imagick->setImageCompression(\Imagick::COMPRESSION_JPEG);
            $imagick->setImageCompressionQuality(82);
            
            if ($soubor['mimeType'] === 'image/png')
            {
                $imagick = $imagick->mergeImageLayers(\Imagick::LAYERMETHOD_FLATTEN );
            }
            
            $filenameNoExt = $this->pathRemoveExtension($souborCesta);
            
            $imagick->writeImage($filenameNoExt.'_nahled.jpg');
        }
        catch (\Exception $e)
        {
            $this->vLogger->error("Výjimka Imagick při vytváření náhledu (u souboru $souborCesta)", [$exception->getMessage()]);
        }
        
        //         return $blob;
    }
}

?>