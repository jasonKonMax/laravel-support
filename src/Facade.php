<?php

namespace Jasonkonmax\LaravelSupport;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return new Support();
    }
}