<?php

namespace App\Enums;

enum CanoeStatus: string
{
    case Pending = 'pending';
    case Available = 'available';
    case Unavaliable = 'unavailable';
}
