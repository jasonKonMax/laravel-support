<?php

namespace Jasonkonmax\LaravelSupport\Traits;

trait ResponseTrait
{
    /**
     * @param $result
     *
     * @return array
     */
    public static function successJson($result = [])
    {
        return [
            'code' => 0, 'result' => $result, 'message' => 'ok', 'type' => 'success'
        ];
    }
}