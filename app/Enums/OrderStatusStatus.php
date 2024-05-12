<?php

namespace App\Enums;

class OrderStatusStatus
{
    const completed = "Completed";
    const working = "Working";
    const notcompleted = "Not Completed";

    public static function getNameAr($value)
    {
        $constants = array_flip((new \ReflectionClass(self::class))->getConstants());
        try {
            if ($constants[$value] == "completed") {
                return "مكتمل";
            } else if ($constants[$value] == "working") {
                return "يتم العمل عليه";
            } else if ($constants[$value] == "notcompleted") {
                return "غير مكتمل";
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
            self::completed,
            self::working,
            self::notcompleted,
        ];
    }
}