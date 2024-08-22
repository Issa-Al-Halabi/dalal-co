<?php

namespace App\Enums;

class PhoneNumberEnums
{
    const alia = "+963956330894";
    const tala  = "+963956330894";

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
            self::alia,
            self::tala,
        ];
    }
}
