<?php
namespace Utils\Uzivatel\PravnickaOsoba;


enum ZamestnanciPocetRozpeti :int
{
//     case _0_9 = 1;
//     case _10_49 = 2;
    case _50_99 = 3;
    case _100_199 = 4;
    case _200_249 = 5;
    case _250_499 = 6;
    case _500_999 = 7;
    case _1000_1499 = 8;
    case _1500_1999 = 9;
    case _2000_2499 = 10;
    case _2500_2999 = 11;
    case _3000_3999 = 12;
    case _4000_4999 = 13;
    case _5000_9999 = 14;
    case _10000_A_VICE = 15;
        
    static function fromString ($string) : ?self
    {
        switch ($string)
        {
//             case '0 - 9 zaměstnanců':
//                 return ZamestnanciPocetRozpeti::_0_9;
//                 break;
//             case '10 - 49 zaměstnanců':
//                 return ZamestnanciPocetRozpeti::_10_49;
//                 break;
            case '50 - 99 zaměstnanců':
                return ZamestnanciPocetRozpeti::_50_99;
                break;
            case '100 - 199 zaměstnanců':
                return ZamestnanciPocetRozpeti::_100_199;
                break;
            case '200 - 249 zaměstnanců':
                return ZamestnanciPocetRozpeti::_200_249;
                break;
            case '250 - 499 zaměstnanců':
                return ZamestnanciPocetRozpeti::_250_499;
                break;
            case '500 - 999 zaměstnanců':
                return ZamestnanciPocetRozpeti::_500_999;
                break;
            case '1000 - 1499 zaměstnanců':
                return ZamestnanciPocetRozpeti::_1000_1499;
                break;
            case '1500 - 1999 zaměstnanců':
                return ZamestnanciPocetRozpeti::_1500_1999;
                break;
            case '2000 - 2499 zaměstnanců':
                return ZamestnanciPocetRozpeti::_2000_2499;
                break;
            case '2500 - 2999 zaměstnanců':
                return ZamestnanciPocetRozpeti::_2500_2999;
                break;
            case '3000 - 3999 zaměstnanců':
                return ZamestnanciPocetRozpeti::_3000_3999;
                break;
            case '4000 - 4999 zaměstnanců':
                return ZamestnanciPocetRozpeti::_4000_4999;
                break;
            case '5000 - 9999 zaměstnanců':
                return ZamestnanciPocetRozpeti::_5000_9999;
                break;
            case '10 000 a více zam.':
                return ZamestnanciPocetRozpeti::_10000_A_VICE;
                break;
                
            default:
                return null;
        }
    }
    
    static function toString ($value) : string
    {
        if ( !($value instanceof \UnitEnum) ) {$value = ZamestnanciPocetRozpeti::from($value);}
        
        return match ($value)
        {
//             self::_0_9 => '0 - 9 zaměstnanců',
//             self::_10_49 => '10 - 49 zaměstnanců',
            self::_50_99 => '50 - 99 zaměstnanců',
            self::_100_199 => '100 - 199 zaměstnanců',
            self::_200_249 => '200 - 249 zaměstnanců',
            self::_250_499 => '250 - 499 zaměstnanců',
            self::_500_999 => '500 - 999 zaměstnanců',
            self::_1000_1499 => '1000 - 1499 zaměstnanců',
            self::_1500_1999 => '1500 - 1999 zaměstnanců',
            self::_2000_2499 => '2000 - 2499 zaměstnanců',
            self::_2500_2999 => '2500 - 2999 zaměstnanců',
            self::_3000_3999 => '3000 - 3999 zaměstnanců',
            self::_4000_4999 => '4000 - 4999 zaměstnanců',
            self::_5000_9999 => '5000 - 9999 zaměstnanců',
            self::_10000_A_VICE => '10 000 a více zaměstnanců',
        };
    }
    
}
?>