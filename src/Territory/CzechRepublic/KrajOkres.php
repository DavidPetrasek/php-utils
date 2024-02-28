<?php
namespace Utils\Territory\CzechRepublic;


class KrajOkres
{    
    function ziskatOkresyPodleKraje (Kraj $kraj)
    {
        if ($kraj === Kraj::HLAVNI_MESTO_PRAHA)
        {
            return 
            [
                Okres::PRAHA
            ];
        }
        else if ($kraj === Kraj::STREDOCESKY)
        {
            return
            [
                Okres::BENESOV,
                Okres::BEROUN,
                Okres::KLADNO,
                Okres::KOLIN,
                Okres::KUTNA_HORA,
                Okres::MELNIK,
                Okres::MLADA_BOLESLAV,
                Okres::NYMBURK,
                Okres::PRAHA_VYCHOD,
                Okres::PRAHA_ZAPAD,
                Okres::PRIBRAM,
                Okres::RAKOVNIK,
            ];
        }
        else if ($kraj === Kraj::JIHOCESKY)
        {
            return
            [
                Okres::CESKE_BUDEJOVICE,
                Okres::CESKY_KRUMLOV,
                Okres::JINDRICHUV_HRADEC,
                Okres::PISEK,
                Okres::PRACHATICE,
                Okres::STRAKONICE,
                Okres::TABOR,
            ];
        }
        else if ($kraj === Kraj::PLZENSKY)
        {
            return
            [
                Okres::DOMAZLICE,
                Okres::KLATOVY,
                Okres::PLZEN_MESTO,
                Okres::PLZEN_JIH,
                Okres::PLZEN_SEVER,
                Okres::ROKYCANY,
                Okres::TACHOV,
            ];
        }
        else if ($kraj === Kraj::KARLOVARSKY)
        {
            return
            [
                Okres::CHEB,
                Okres::KARLOVY_VARY,
                Okres::SOKOLOV,
            ];
        }
        else if ($kraj === Kraj::USTECKY)
        {
            return
            [
                Okres::DECIN,
                Okres::CHOMUTOV,
                Okres::LITOMERICE,
                Okres::LOUNY,
                Okres::MOST,
                Okres::TEPLICE,
                Okres::USTI_NAD_LABEM,
            ];
        }
        else if ($kraj === Kraj::LIBERECKY)
        {
            return
            [
                Okres::CESKA_LIPA,
                Okres::JABLONEC_NAD_NISOU,
                Okres::LIBEREC,
                Okres::SEMILY,
            ];
        }
        else if ($kraj === Kraj::KRALOVEHRADECKY)
        {
            return
            [
                Okres::HRADEC_KRALOVE,
                Okres::JICIN,
                Okres::NACHOD,
                Okres::RYCHNOV_NAD_KNEZNOU,
                Okres::TRUTNOV,
            ];
        }
        else if ($kraj === Kraj::PARDUBICKY)
        {
            return
            [
                Okres::CHRUDIM,
                Okres::PARDUBICE,
                Okres::SVITAVY,
                Okres::USTI_NAD_ORLICI,
            ];
        }
        else if ($kraj === Kraj::VYSOCINA)
        {
            return
            [
                Okres::HAVLICKUV_BROD,
                Okres::JIHLAVA,
                Okres::PELHRIMOV,
                Okres::TREBIC,
                Okres::ZDAR_NAD_SAZAVOU,
            ];
        }
        else if ($kraj === Kraj::JIHOMORAVSKY)
        {
            return
            [
                Okres::BLANSKO,
                Okres::BRNO_MESTO,
                Okres::BRNO_VENKOV,
                Okres::BRECLAV,
                Okres::HODONIN,
                Okres::VYSKOV,
                Okres::ZNOJMO,
            ];
        }
        else if ($kraj === Kraj::OLOMOUCKY)
        {
            return
            [
                Okres::JESENIK,
                Okres::OLOMOUC,
                Okres::PROSTEJOV,
                Okres::PREROV,
                Okres::SUMPERK,
            ];
        }
        else if ($kraj === Kraj::MORAVSKOSLEZSKY)
        {
            return
            [
                Okres::BRUNTAL,
                Okres::FRYDEK_MISTEK,
                Okres::KARVINA,
                Okres::NOVY_JICIN,
                Okres::OPAVA,
                Okres::OSTRAVA_MESTO,
            ];
        }
        else if ($kraj === Kraj::ZLINSKY)
        {
            return
            [
                Okres::KROMERIZ,
                Okres::UHERSKE_HRADISTE,
                Okres::VSETIN,
                Okres::ZLIN,
            ];
        }
    }
}
?>