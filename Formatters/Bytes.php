<?php

namespace App/Formatters;

class BytesFormatter
{

    const units = ['B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB'];

    public static function gbToBytes(int $value): int
    {
        return self::transformTo($value, 'GiB');
    }

    public static function transformTo(int $value, string $unit = 'B'): int
    {
        $index = array_search($unit, self::units);

        $bytes = 1;
        for ($i=0; $i < $index; $i++) {
            $bytes *= 1024;
        }

        return round($bytes * $value, 2);
    }
}

//echo log(5000000) / log(1024);
echo BytesFormatter::GbToBytes(5);