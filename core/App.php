<?php 

class App
{
    protected static $registries = [];

    public static function bind($key, $value)
    {
        static::$registries[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$registries)) {
            throw new Exception("No {$key} is bound in the container.");
        }

        return static::$registries[$key];
    }
}