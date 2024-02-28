<?php
namespace Utils\Uzivatel\FyzickaOsoba;


enum Pohlavi :int
{
    case MUZ = 1;
    case ZENA = 2;
        
    static function fromString ($string) : ?self
    {
        switch ($string)
        {
            case 'muž':
                return Pohlavi::MUZ;
                break;
            case 'žena':
                return Pohlavi::ZENA;
                break;
                
            default:
                return null;
        }
    }
}
?>