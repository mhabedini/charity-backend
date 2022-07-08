<?php

namespace App\Enums;

enum MaritalStatus: string
{
    use EnumHelper;

    case SINGLE = 'مجرد';
    case MARRIED = 'متأهل';
    case DIVORCED = 'مطلقه';
    case WIDOW = 'بیوه';
}
