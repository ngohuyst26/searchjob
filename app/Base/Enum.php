<?php

namespace App\Base;

use ReflectionClass;

abstract class Enum{

    private static $cache = [];

    public static function getValues(){
        $calledClass = get_called_class();
        if (!array_key_exists($calledClass, self::$cache)){
            $reflection                = new ReflectionClass($calledClass);
            self::$cache[$calledClass] = array_filter(
                $reflection->getConstants(),
                function ($key){
                    return $key !== 'LABELS';
                },
                ARRAY_FILTER_USE_KEY
            );
        }

        return array_values(self::$cache[$calledClass]);
    }

    public static function getKeys(){
        $calledClass = get_called_class();
        if (!array_key_exists($calledClass, self::$cache)){
            $reflection                = new ReflectionClass($calledClass);
            self::$cache[$calledClass] = array_filter(
                $reflection->getConstants(),
                function ($key){
                    return $key !== 'LABELS';
                },
                ARRAY_FILTER_USE_KEY
            );
        }

        return array_keys(self::$cache[$calledClass]);
    }

    public static function getAssociativeArray(){
        $calledClass = get_called_class();
        if (!array_key_exists($calledClass, self::$cache)){
            $reflection                = new ReflectionClass($calledClass);
            self::$cache[$calledClass] = array_filter(
                $reflection->getConstants(),
                function ($key){
                    return $key !== 'LABELS';
                },
                ARRAY_FILTER_USE_KEY
            );
        }

        return self::$cache[$calledClass];
    }

    public static function getLabel($value){
        $calledClass = get_called_class();
        if (!defined("$calledClass::LABELS")){
            throw new \Exception("Labels not defined for class $calledClass");
        }

        $labels = constant("$calledClass::LABELS");

        if (!array_key_exists($value, $labels)){
            throw new \Exception("Label not defined for value $value in class $calledClass");
        }

        return $labels[$value];
    }
}