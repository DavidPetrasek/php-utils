<?php
namespace Utils\User\NaturalPerson;


enum Gender :int
{
    case MAN = 1;
    case FEMALE = 2;
        
    static function fromString ($string) : ?self
    {
        switch ($string)
        {
            case 'man':
                return Gender::MAN;
                break;
            case 'female':
                return Gender::FEMALE;
                break;
                
            default:
                return null;
        }
    }
}
?>