<?php

namespace App\Enums;

enum Roles: int {
    case ADMIN = 1;
    case REGULAR = 2;
    case GUEST = 3;
}
