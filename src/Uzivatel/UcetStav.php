<?php
namespace Lib\Uzivatel;


enum UcetStav :int
{
    case REGISTRACE_NEDOKONCENA = 1;
    case AKTIVNI = 2;
    case DEAKTIVOVAN = 3;
        
//     static function toString ($value) : string
//     {
//         if ( !($value instanceof \UnitEnum) ) {$value = SouborUzivatelKategorie::from($value);}
        
//         return match ($value)
//         {
//             self::KE_STAZENI => 'Ke stažení',
//         };
//     }
}
?>