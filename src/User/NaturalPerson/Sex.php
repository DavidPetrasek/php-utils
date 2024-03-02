<?php
namespace Psys\Utils\User\NaturalPerson;


enum Sex :int
{
    case MALE = 1;
    case FEMALE = 2;
        
    static function fromString ($string) : ?self
    {
        switch ($string)
        {
            case 'male':
                return Sex::MALE;
                break;
            case 'female':
                return Sex::FEMALE;
                break;
                
            default:
                return null;
        }
    }
}
?>