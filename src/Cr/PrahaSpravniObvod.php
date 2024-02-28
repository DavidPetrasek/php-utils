<?php
namespace Utils\Cr;


enum PrahaSpravniObvod :int
{
    case PRAHA_1 = 1101;
    case PRAHA_2 = 1102;
    case PRAHA_3 = 1103;
    case PRAHA_4 = 1104;
    case PRAHA_5 = 1105;
    case PRAHA_6 = 1106;
    case PRAHA_7 = 1107;
    case PRAHA_8 = 1108;
    case PRAHA_9 = 1109;
    case PRAHA_10 = 1110;
    case PRAHA_11 = 1111;
    case PRAHA_12 = 1112;
    case PRAHA_13 = 1113;
    case PRAHA_14 = 1114;
    case PRAHA_15 = 1115;
    case PRAHA_16 = 1116;
    case PRAHA_17 = 1117;
    case PRAHA_18 = 1118;
    case PRAHA_19 = 1119;
    case PRAHA_20 = 1120;
    case PRAHA_21 = 1121;
    case PRAHA_22 = 1122;
    
    
        
    static function toString ($value) : string
    {
        if ( !($value instanceof \UnitEnum) ) {$value = PrahaSpravniObvod::from($value);}
        
        return match ($value)
        {
            self::PRAHA_1 => 'Praha 1',
            self::PRAHA_2 => 'Praha 2',
            self::PRAHA_3 => 'Praha 3',
            self::PRAHA_4 => 'Praha 4',
            self::PRAHA_5 => 'Praha 5',
            self::PRAHA_6 => 'Praha 6',
            self::PRAHA_7 => 'Praha 7',
            self::PRAHA_8 => 'Praha 8',
            self::PRAHA_9 => 'Praha 9',
            self::PRAHA_10 => 'Praha 10',
            self::PRAHA_11 => 'Praha 11',
            self::PRAHA_12 => 'Praha 12',
            self::PRAHA_13 => 'Praha 13',
            self::PRAHA_14 => 'Praha 14',
            self::PRAHA_15 => 'Praha 15',
            self::PRAHA_16 => 'Praha 16',
            self::PRAHA_17 => 'Praha 17',
            self::PRAHA_18 => 'Praha 18',
            self::PRAHA_19 => 'Praha 19',
            self::PRAHA_20 => 'Praha 20',
            self::PRAHA_21 => 'Praha 21',
            self::PRAHA_22 => 'Praha 22',
        };
    }
    
    static function fromString ($string) : self
    {
        switch ($string)
        {
            case 'Praha 1':
                return PrahaSpravniObvod::PRAHA_1;
                break;
            case 'Praha 2':
                return PrahaSpravniObvod::PRAHA_2;
                break;
            case 'Praha 3':
                return PrahaSpravniObvod::PRAHA_3;
                break;
            case 'Praha 4':
                return PrahaSpravniObvod::PRAHA_4;
                break;
            case 'Praha 5':
                return PrahaSpravniObvod::PRAHA_5;
                break;
            case 'Praha 6':
                return PrahaSpravniObvod::PRAHA_6;
                break;
            case 'Praha 7':
                return PrahaSpravniObvod::PRAHA_7;
                break;
            case 'Praha 8':
                return PrahaSpravniObvod::PRAHA_8;
                break;
            case 'Praha 9':
                return PrahaSpravniObvod::PRAHA_9;
                break;
            case 'Praha 10':
                return PrahaSpravniObvod::PRAHA_10;
                break;
            case 'Praha 11':
                return PrahaSpravniObvod::PRAHA_11;
                break;
            case 'Praha 12':
                return PrahaSpravniObvod::PRAHA_12;
                break;
            case 'Praha 13':
                return PrahaSpravniObvod::PRAHA_13;
                break;
            case 'Praha 14':
                return PrahaSpravniObvod::PRAHA_14;
                break;
            case 'Praha 15':
                return PrahaSpravniObvod::PRAHA_15;
                break;
            case 'Praha 16':
                return PrahaSpravniObvod::PRAHA_16;
                break;
            case 'Praha 17':
                return PrahaSpravniObvod::PRAHA_17;
                break;
            case 'Praha 18':
                return PrahaSpravniObvod::PRAHA_18;
                break;
            case 'Praha 19':
                return PrahaSpravniObvod::PRAHA_19;
                break;
            case 'Praha 20':
                return PrahaSpravniObvod::PRAHA_20;
                break;
            case 'Praha 21':
                return PrahaSpravniObvod::PRAHA_21;
                break;
            case 'Praha 22':
                return PrahaSpravniObvod::PRAHA_22;
                break;
        }
    }
}
?>