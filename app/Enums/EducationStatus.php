<?php

namespace App\Enums;

enum EducationStatus: string
{
    use EnumHelper;

    case ILLITERATE = 'بی سواد';
    case ELEMENTARY = 'ابتدایی';
    case MID_SCHOOL = 'سیکل';
    case DIPLOMA = 'دیپلم';
    case ASSOCIATE = 'فوق دیپلم';
    case BACHELOR = 'لیسانس';
    case MASTER = 'فوق لیسانس';
    case PDH = 'دکتری';
    case SEMINARY = 'حوزوی';
}
