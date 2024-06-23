<?php 
namespace Psys\Utils;


class Math
{    
    function addPercentage ($number, $percentage)
    {
        return ($number * (100 + $percentage)) / 100;
    }

    function subtractPercentage ($number, $percentage)
    {
        return $number / ('1.'.$percentage);
    }
}

?>