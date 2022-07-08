<?php

namespace App\Enums;

trait EnumHelper
{
    public static function implode(string $separator): string
    {
        return implode($separator, static::names());
    }

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function array(): array
    {
        return array_combine(self::names(), self::values());
    }

    public static function pair(): array
    {
        $data = array();
        $names = self::names();
        $values = self::values();

        for ($i = 0; $i < count($names); $i++) {
            $data[] = [
                'label' => $values[$i],
                'value' => $names[$i],
            ];
        }
        return $data;
    }
}
