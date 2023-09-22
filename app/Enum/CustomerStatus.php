<?php

namespace App\Enums;

enum CustomerStatus: int
{
    case ACTIVED = 1;
    case DEACTIVED = 2;
    case SUSPENDED = 3;
    case CANCELED = 4;
}


?>