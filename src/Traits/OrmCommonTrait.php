<?php

namespace Jasonkonmax\LaravelSupport\Traits;

trait OrmCommonTrait
{
    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}