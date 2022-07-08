<?php

namespace App\Enums;

enum Religion: string
{
    use EnumHelper;

    case SHIA_MUSLIM = 'شیعه';
    case SUNNI_MUSLIM = 'سنی';
    case JEWISH = 'یهودی';
    case CHRISTIAN = 'مسیحی';
    case ZOROASTRIAN = 'زرتشتی';
}
