<?php 
namespace Psys\Utils;


class Misc
{    
    public function formatBytes($bytes, $precision = 2) 
    { 
        $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
       
        $bytes = max($bytes, 0); 
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
        $pow = min($pow, count($units) - 1); 
       
        // Uncomment one of the following alternatives
        $bytes /= pow(1024, $pow);
        // $bytes /= (1 << (10 * $pow)); 
       
        return round($bytes, $precision) . $units[$pow]; 
    } 

    public function arrayToBytes($arr) 
    {        
        return mb_strlen(serialize((array)$arr), '8bit') ; 
    } 
}

?>