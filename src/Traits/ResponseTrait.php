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
            'code'    => 0,
            'result'  => $result,
            'message' => 'ok',
            'type'    => 'success'
        ];
    }

    /**
     * @param $result
     *
     * @return array
     */
    public static function successApiJson($result = [])
    {
        return [
            'code'    => 0,
            'result'  => $result,
            'message' => 'ok',
            'type'    => 'success'
        ];
    }

    /**
     * @param $message
     *
     * @return array
     */
    public static function errorJson($message = "")
    {
        return [
            'code'    => -1,
            'message' => $message,
            'type'    => 'error'
        ];
    }

    /**
     * @param $message
     *
     * @return array
     */
    public static function errorApiJson($message = "", $code = -1)
    {
        return [
            'code'    => $code,
            'message' => $message,
            'type'    => 'error',
            'result'  => [],
        ];
    }
}