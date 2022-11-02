<?php

namespace Jasonkonmax\LaravelSupport;

class PropertyCache
{
    private static $_cache = [];

    /**
     * @param callable $callback
     * @param          $dependent
     *
     * @return mixed
     */
    public static function cache(callable $callback, $dependent)
    {
        $key = md5(json_encode($dependent));
        if (isset(self::$_cache[$key])) {
            return self::$_cache[$key];
        }
        self::$_cache[$key] = call_user_func($callback);
        return self::$_cache[$key];
    }
}