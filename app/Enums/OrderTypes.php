<?php

namespace App\Enums;

class OrderTypes
{
    const immediately = 1;
    const abroad      = 2;
    const renewalOfResidence      = 3;

    public static function getNameAr($value)
    {
        $constants = array_flip((new \ReflectionClass(self::class))->getConstants());
        try {
            if ($constants[$value] == "immediately") {
                return "فوري";
            } else if ($constants[$value] == "abroad") {
                return "استقدام";
            } else if ($constants[$value] == "renewalOfResidence") {
                return "طلب تجديد";
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
