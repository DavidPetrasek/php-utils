<?php
namespace Utils\Cr;


enum Okres :string
{
    case PRAHA = 'CZ0100';
    case PRAHA_VYCHOD = 'CZ0209';
    case PRAHA_ZAPAD = 'CZ020A';
    case BENESOV = 'CZ0201';
    case BEROUN = 'CZ0202';
    case KLADNO = 'CZ0203';
    case KOLIN = 'CZ0204';
    case KUTNA_HORA = 'CZ0205';
    case MELNIK = 'CZ0206';
    case MLADA_BOLESLAV = 'CZ0207';
    case NYMBURK = 'CZ0208';
    case PRIBRAM = 'CZ020B';
    case RAKOVNIK = 'CZ020C';
    case CESKE_BUDEJOVICE = 'CZ0311';
    case CESKY_KRUMLOV = 'CZ0312';
    case JINDRICHUV_HRADEC = 'CZ0313';
    case PISEK = 'CZ0314';
    case PRACHATICE = 'CZ0315';
    case STRAKONICE = 'CZ0316';
    case TABOR = 'CZ0317';    
    case DOMAZLICE = 'CZ0321';
    case KLATOVY = 'CZ0322';
    case PLZEN_MESTO = 'CZ0323';
    case PLZEN_JIH = 'CZ0324';    
    case PLZEN_SEVER = 'CZ0325';
    case ROKYCANY = 'CZ0326';
    case TACHOV = 'CZ0327';
    case CHEB = 'CZ0411';
    case KARLOVY_VARY = 'CZ0412';
    case SOKOLOV = 'CZ0413';
    case DECIN = 'CZ0421';
    case CHOMUTOV = 'CZ0422';
    case LITOMERICE = 'CZ0423';
    case LOUNY = 'CZ0424';    
    case MOST = 'CZ0425';
    case TEPLICE = 'CZ0426';
    case USTI_NAD_LABEM = 'CZ0427';
    case CESKA_LIPA = 'CZ0511';
    case JABLONEC_NAD_NISOU = 'CZ0512';
    case LIBEREC = 'CZ0513';
    case SEMILY = 'CZ0514';
    case HRADEC_KRALOVE = 'CZ0521';
    case JICIN = 'CZ0522';
    case NACHOD = 'CZ0523';    
    case RYCHNOV_NAD_KNEZNOU = 'CZ0524';
    case TRUTNOV = 'CZ0525';
    case CHRUDIM = 'CZ0531';
    case PARDUBICE = 'CZ0532';
    case SVITAVY = 'CZ0533';
    case USTI_NAD_ORLICI = 'CZ0534';
    case HAVLICKUV_BROD = 'CZ0631';
    case JIHLAVA = 'CZ0632';
    case PELHRIMOV = 'CZ0633';
    case TREBIC = 'CZ0634';    
    case ZDAR_NAD_SAZAVOU = 'CZ0635';
    case BLANSKO = 'CZ0641';
    case BRNO_MESTO = 'CZ0642';
    case BRNO_VENKOV = 'CZ0643';
    case BRECLAV = 'CZ0644';
    case HODONIN = 'CZ0645';
    case VYSKOV = 'CZ0646';
    case ZNOJMO = 'CZ0647';
    case JESENIK = 'CZ0711';
    case OLOMOUC = 'CZ0712';    
    case PROSTEJOV = 'CZ0713';
    case PREROV = 'CZ0714';
    case SUMPERK = 'CZ0715';
    case KROMERIZ = 'CZ0721';
    case UHERSKE_HRADISTE = 'CZ0722';
    case VSETIN = 'CZ0723';
    case ZLIN = 'CZ0724';
    case BRUNTAL = 'CZ0801';
    case FRYDEK_MISTEK = 'CZ0802';
    case KARVINA = 'CZ0803';    
    case NOVY_JICIN = 'CZ0804';
    case OPAVA = 'CZ0805';
    case OSTRAVA_MESTO = 'CZ0806';
    case EXTRA_REGIO = 'CZZZZZ';
    
        
    static function toString ($value) : string
    {
        if ( !($value instanceof \UnitEnum) ) {$value = Okres::from($value);}
        
        return match ($value)
        {
            self::PRAHA => 'Praha',
            self::PRAHA_VYCHOD => 'Praha-východ',
            self::PRAHA_ZAPAD => 'Praha-západ',
            self::BENESOV => 'Benešov',
            self::BEROUN => 'Beroun',
            self::KLADNO => 'Kladno',
            self::KOLIN => 'Kolín',
            self::KUTNA_HORA => 'Kutná Hora',
            self::MELNIK => 'Mělník',
            self::MLADA_BOLESLAV => 'Mladá Boleslav',
            self::NYMBURK => 'Nymburk',
            self::PRIBRAM => 'Příbram',
            self::RAKOVNIK => 'Rakovník',
            self::CESKE_BUDEJOVICE => 'České Budějovice',
            self::CESKY_KRUMLOV => 'Český Krumlov',
            self::JINDRICHUV_HRADEC => 'Jindřichův Hradec',
            self::PISEK => 'Písek',
            self::PRACHATICE => 'Prachatice',
            self::STRAKONICE => 'Strakonice',
            self::TABOR => 'Tábor',
            self::DOMAZLICE => 'Domažlice',
            self::KLATOVY => 'Klatovy',
            self::PLZEN_MESTO => 'Plzeň-město',
            self::PLZEN_JIH => 'Plzeň-jih',
            self::PLZEN_SEVER => 'Plzeň-sever',
            self::ROKYCANY => 'Rokycany',
            self::TACHOV => 'Tachov',
            self::CHEB => 'Cheb',
            self::KARLOVY_VARY => 'Karlovy Vary',
            self::SOKOLOV => 'Sokolov',
            self::DECIN => 'Děčín',
            self::CHOMUTOV => 'Chomutov',
            self::LITOMERICE => 'Litoměřice',
            self::LOUNY => 'Louny',
            self::MOST => 'Most',
            self::TEPLICE => 'Teplice',
            self::USTI_NAD_LABEM => 'Ústí nad Labem',
            self::CESKA_LIPA => 'Česká Lípa',
            self::JABLONEC_NAD_NISOU => 'Jablonec nad Nisou',
            self::LIBEREC => 'Liberec',
            self::SEMILY => 'Semily',
            self::HRADEC_KRALOVE => 'Hradec Králové',
            self::JICIN => 'Jičín',
            self::NACHOD => 'Náchod',
            self::RYCHNOV_NAD_KNEZNOU => 'Rychnov nad Kněžnou',
            self::TRUTNOV => 'Trutnov',
            self::CHRUDIM => 'Chrudim',
            self::PARDUBICE => 'Pardubice',
            self::SVITAVY => 'Svitavy',
            self::USTI_NAD_ORLICI => 'Ústí nad Orlicí',
            self::HAVLICKUV_BROD => 'Havlíčkův Brod',
            self::JIHLAVA => 'Jihlava',
            self::PELHRIMOV => 'Pelhřimov',
            self::TREBIC => 'Třebíč',
            self::ZDAR_NAD_SAZAVOU => 'Žďár nad Sázavou',
            self::BLANSKO => 'Blansko',
            self::BRNO_MESTO => 'Brno-město',
            self::BRNO_VENKOV => 'Brno-venkov',
            self::BRECLAV => 'Břeclav',
            self::HODONIN => 'Hodonín',
            self::VYSKOV => 'Vyškov',
            self::ZNOJMO => 'Znojmo',
            self::JESENIK => 'Jeseník',
            self::OLOMOUC => 'Olomouc',
            self::PROSTEJOV => 'Prostějov',
            self::PREROV => 'Přerov',
            self::SUMPERK => 'Šumperk',
            self::KROMERIZ => 'Kroměříž',
            self::UHERSKE_HRADISTE => 'Uherské Hradiště',
            self::VSETIN => 'Vsetín',
            self::ZLIN => 'Zlín',
            self::BRUNTAL => 'Bruntál',
            self::FRYDEK_MISTEK => 'Frýdek-Místek',
            self::KARVINA => 'Karviná',
            self::NOVY_JICIN => 'Nový Jičín',
            self::OPAVA => 'Opava',
            self::OSTRAVA_MESTO => 'Ostrava-město',
            self::EXTRA_REGIO => 'Extra-Regio',
        };
    }
    
    static function fromString ($string) : ?self
    {
        switch ($string)
        {
            case 'Praha':
                return Okres::PRAHA;
                break;
            case 'Praha-východ':
                return Okres::PRAHA_VYCHOD;
                break;
            case 'Praha-západ':
                return Okres::PRAHA_ZAPAD;
                break;
            case 'Benešov':
                return Okres::BENESOV;
                break;
            case 'Beroun':
                return Okres::BEROUN;
                break;
            case 'Kladno':
                return Okres::KLADNO;
                break;
            case 'Kolín':
                return Okres::KOLIN;
                break;
            case 'Kutná Hora':
                return Okres::KUTNA_HORA;
                break;
            case 'Mělník':
                return Okres::MELNIK;
                break;
            case 'Mladá Boleslav':
                return Okres::MLADA_BOLESLAV;
                break;
            case 'Nymburk':
                return Okres::NYMBURK;
                break;
            case 'Příbram':
                return Okres::PRIBRAM;
                break;
            case 'Rakovník':
                return Okres::RAKOVNIK;
                break;
            case 'České Budějovice':
                return Okres::CESKE_BUDEJOVICE;
                break;
            case 'Český Krumlov':
                return Okres::CESKY_KRUMLOV;
                break;
            case 'Jindřichův Hradec':
                return Okres::JINDRICHUV_HRADEC;
                break;
            case 'Písek':
                return Okres::PISEK;
                break;
            case 'Prachatice':
                return Okres::PRACHATICE;
                break;
            case 'Strakonice':
                return Okres::STRAKONICE;
                break;
            case 'Tábor':
                return Okres::TABOR;
                break;
            case 'Domažlice':
                return Okres::DOMAZLICE;
                break;
            case 'Klatovy':
                return Okres::KLATOVY;
                break;
            case 'Plzeň-město':
                return Okres::PLZEN_MESTO;
                break;
            case 'Plzeň-jih':
                return Okres::PLZEN_JIH;
                break;
            case 'Plzeň-sever':
                return Okres::PLZEN_SEVER;
                break;
            case 'Rokycany':
                return Okres::ROKYCANY;
                break;
            case 'Tachov':
                return Okres::TACHOV;
                break;
            case 'Cheb':
                return Okres::CHEB;
                break;
            case 'Karlovy Vary':
                return Okres::KARLOVY_VARY;
                break;
            case 'Sokolov':
                return Okres::SOKOLOV;
                break;
            case 'Děčín':
                return Okres::DECIN;
                break;
            case 'Chomutov':
                return Okres::CHOMUTOV;
                break;
            case 'Litoměřice':
                return Okres::LITOMERICE;
                break;
            case 'Louny':
                return Okres::LOUNY;
                break;
            case 'Most':
                return Okres::MOST;
                break;
            case 'Teplice':
                return Okres::TEPLICE;
                break;
            case 'Ústí nad Labem':
                return Okres::USTI_NAD_LABEM;
                break;
            case 'Česká Lípa':
                return Okres::CESKA_LIPA;
                break;
            case 'Jablonec nad Nisou':
                return Okres::JABLONEC_NAD_NISOU;
                break;
            case 'Liberec':
                return Okres::LIBEREC;
                break;
            case 'Semily':
                return Okres::SEMILY;
                break;
            case 'Hradec Králové':
                return Okres::HRADEC_KRALOVE;
                break;
            case 'Jičín':
                return Okres::JICIN;
                break;
            case 'Náchod':
                return Okres::NACHOD;
                break;
            case 'Rychnov nad Kněžnou':
                return Okres::RYCHNOV_NAD_KNEZNOU;
                break;
            case 'Trutnov':
                return Okres::TRUTNOV;
                break;
            case 'Chrudim':
                return Okres::CHRUDIM;
                break;
            case 'Pardubice':
                return Okres::PARDUBICE;
                break;
            case 'Svitavy':
                return Okres::SVITAVY;
                break;
            case 'Ústí nad Orlicí':
                return Okres::USTI_NAD_ORLICI;
                break;
            case 'Havlíčkův Brod':
                return Okres::HAVLICKUV_BROD;
                break;
            case 'Jihlava':
                return Okres::JIHLAVA;
                break;
            case 'Pelhřimov':
                return Okres::PELHRIMOV;
                break;
            case 'Třebíč':
                return Okres::TREBIC;
                break;
            case 'Žďár nad Sázavou':
                return Okres::ZDAR_NAD_SAZAVOU;
                break;
            case 'Blansko':
                return Okres::BLANSKO;
                break;
            case 'Brno-město':
                return Okres::BRNO_MESTO;
                break;
            case 'Brno-venkov':
                return Okres::BRNO_VENKOV;
                break;
            case 'Břeclav':
                return Okres::BRECLAV;
                break;
            case 'Hodonín':
                return Okres::HODONIN;
                break;
            case 'Vyškov':
                return Okres::VYSKOV;
                break;
            case 'Znojmo':
                return Okres::ZNOJMO;
                break;
            case 'Jeseník':
                return Okres::JESENIK;
                break;
            case 'Olomouc':
                return Okres::OLOMOUC;
                break;
            case 'Prostějov':
                return Okres::PROSTEJOV;
                break;
            case 'Přerov':
                return Okres::PREROV;
                break;
            case 'Šumperk':
                return Okres::SUMPERK;
                break;
            case 'Kroměříž':
                return Okres::KROMERIZ;
                break;
            case 'Uherské Hradiště':
                return Okres::UHERSKE_HRADISTE;
                break;
            case 'Vsetín':
                return Okres::VSETIN;
                break;
            case 'Zlín':
                return Okres::ZLIN;
                break;
            case 'Bruntál':
                return Okres::BRUNTAL;
                break;
            case 'Frýdek-Místek':
                return Okres::FRYDEK_MISTEK;
                break;
            case 'Karviná':
                return Okres::KARVINA;
                break;
            case 'Nový Jičín':
                return Okres::NOVY_JICIN;
                break;
            case 'Opava':
                return Okres::OPAVA;
                break;
            case 'Ostrava-město':
                return Okres::OSTRAVA_MESTO;
                break;
            case 'Extra-Regio':
                return Okres::EXTRA_REGIO;
                break;
                
            default:
                return null;
        }
    }
}
?>