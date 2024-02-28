<?php
namespace Utils\User;


enum AccountStatus :int
{
    case REGISTRATION_INCOMPLETE = 1;
    case ACTIVE = 2;
    case DISABLED = 3;
}
?>