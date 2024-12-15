<?php
namespace Psys\Utils\Territory\CzechRepublic;


enum Kraj :int
{
    case HLAVNI_MESTO_PRAHA = 1;
    case STREDOCESKY = 2;
    case JIHOCESKY = 3;
    case PLZENSKY = 4;
    case KARLOVARSKY = 5;
    case USTECKY = 6;
    case LIBERECKY = 7;
    case KRALOVEHRADECKY = 8;
    case PARDUBICKY = 9;
    case VYSOCINA = 10;
    case JIHOMORAVSKY = 11;
    case OLOMOUCKY = 12;
    case MORAVSKOSLEZSKY = 13;
    case ZLINSKY = 14;
        
    static function toString ($value) : string
    {
        if ( !($value instanceof \UnitEnum) ) {$value = Kraj::from($value);}
        
        return match ($value)
        {
            self::HLAVNI_MESTO_PRAHA => 'Hlavní město Praha',
            self::STREDOCESKY => 'Středočeský kraj',
            self::JIHOCESKY => 'Jihočeský kraj',
            self::PLZENSKY => 'Plzeňský kraj',
            self::KARLOVARSKY => 'Karlovarský kraj',
            self::USTECKY => 'Ústecký kraj',
            self::LIBERECKY => 'Liberecký kraj',
            self::KRALOVEHRADECKY => 'Královéhradecký kraj',
            self::PARDUBICKY => 'Pardubický kraj',
            self::VYSOCINA => 'Kraj Vysočina',
            self::JIHOMORAVSKY => 'Jihomoravský kraj',
            self::OLOMOUCKY => 'Olomoucký kraj',
            self::MORAVSKOSLEZSKY => 'Moravskoslezský kraj',
            self::ZLINSKY => 'Zlínský kraj',
        };
    }
    
    static function fromString ($string) : ?self
    {
        switch ($string) 
        {
            case 'Hlavní město Praha':
                return Kraj::HLAVNI_MESTO_PRAHA;
                break;
            case 'Středočeský kraj':
                return Kraj::STREDOCESKY;
                break;
            case 'Jihočeský kraj':
                return Kraj::JIHOCESKY;
                break;
            case 'Plzeňský kraj':
                return Kraj::PLZENSKY;
                break;
            case 'Karlovarský kraj':
                return Kraj::KARLOVARSKY;
                break;
            case 'Ústecký kraj':
                return Kraj::USTECKY;
                break;
            case 'Liberecký kraj':
                return Kraj::LIBERECKY;
                break;
            case 'Královéhradecký kraj':
                return Kraj::KRALOVEHRADECKY;
                break;
            case 'Pardubický kraj':
                return Kraj::PARDUBICKY;
                break;
            case 'Kraj Vysočina':
                return Kraj::VYSOCINA;
                break;
            case 'Jihomoravský kraj':
                return Kraj::JIHOMORAVSKY;
                break;
            case 'Olomoucký kraj':
                return Kraj::OLOMOUCKY;
                break;
            case 'Moravskoslezský kraj':
                return Kraj::MORAVSKOSLEZSKY;
                break;
            case 'Zlínský kraj':
                return Kraj::ZLINSKY;
                break;
                
            default:
                return null;
        }
    }
}
?>