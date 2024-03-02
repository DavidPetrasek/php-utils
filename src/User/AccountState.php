<?php
namespace Psys\Utils\User;


enum AccountState :int
{
    case REGISTRATION_INCOMPLETE = 1;
    case ACTIVE = 2;
    case DISABLED = 3;
}
?>