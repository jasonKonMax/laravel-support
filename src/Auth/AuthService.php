<?php

namespace Jasonkonmax\LaravelSupport\Auth;

use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;

class AuthService
{
    public $userModel = null;
    public $findKey = null;
    public $userData = null;

    public function attempt(array $credentials = [], $remember = false)
    {
        // 定义密钥
        $key = env('LS_JWT_SECRET');
        // 创建有效载荷
        $expiration_time = 86400;
        $findValue = Arr::get($credentials, $this->findKey);
        $user = Cache::remember('user_cache_' . $findValue, $expiration_time, function () use ($credentials) {
            // 在这里执行创建缓存项的逻辑
            $model = new $this->userModel;
            $findValue = Arr::get($credentials, $this->findKey);
            return $model->where($this->findKey, $findValue)->first();
        });
        $payload = [
            'uid' => $user->id,
            'user_key' => $findValue,
        ];
        // 设置Token的过期时间
        $expiration_time = time() + env('LS_JWT_TTL', 3600); // 过期时间为一小时后
        // 生成 Token
        return JWT::encode($payload, $key, env('LS_JWT_ALG', 'HS256'));
    }

    public function logout()
    {
    }

    public function refresh()
    {
        $key = env('LS_JWT_SECRET');
        if (!empty($this->userData)){
            $payload = [
                'uid' => $this->userData->id,
                'user_key' => $this->userData->{$this->findKey},
            ];
            return JWT::encode($payload, $key, env('LS_JWT_ALG', 'HS256'));
        }
        return false;
    }

    public function user()
    {
        return $this->userData;
    }

    public function checkToken($token)
    {
        $key = env('LS_JWT_SECRET');
        try {
            // 验证 Token
            $payload = JWT::decode($token, new Key($key, 'HS256'));
            // 获取有效载荷中的数据
            $userId = $payload->uid;
            $userKey = $payload->user_key;
            //
            $userData = Cache::get('user_cache_' . $userKey);
            $this->userData = $userData;
            return true;
            // 可以在此处进行进一步的业务逻辑处理
        } catch (\Exception $e) {
            // 处理验证失败的情况
            abort(403, 'Token Error');
        }
    }
}
