<?php

namespace App\Enums;

class OrderTypes
{
    const immediately = 1;
    const abroad      = 2;
    const renewalOfResidence      = 3;
    const giveIn      = 4;
    const deportration      = 5;

    public static function getNameAr($value)
    {
        $constants = array_flip((new \ReflectionClass(self::class))->getConstants());
        try {
            if ($value == self::immediately) {
                return "فوري";
            } else if ($value == self::abroad) {
                return "استقدام";
            } else if ($value == self::renewalOfResidence) {
                return "طلب تجديد";
            } else if ($value == self::giveIn) {
                return "تنازل";
            } else if ($value == self::deportration) {
                return "تسفير";
            }
        } catch (\Throwable $th) {
            return "null";
        }

        return $constants[$value] ?? "null";
    }

    public static function getName($value)
    {
        $constants = array_flip((new \ReflectionClass(self::class))->getConstants());

        return $constants[$value] ?? null;
    }
    public static function getValue($name)
    {
        return defined('self::' . $name) ? constant('self::' . $name) : null;
    }
    public static function getValues()
    {
        return [
            self::immediately,
            self::abroad,
        ];
    }
}
