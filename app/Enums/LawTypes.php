<?php

namespace App\Enums;

class LawTypes
{
    const law = 1;
    const decree      = 2;

    public static function getNameAr($value)
    {
        $constants = array_flip((new \ReflectionClass(self::class))->getConstants());
        try {
            if ($constants[$value] == "law") {
                return "قانون";
            } else if ($constants[$value] == "decree") {
                return "مرسوم";
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
            self::law,
            self::decree,
        ];
    }
}
