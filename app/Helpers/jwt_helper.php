<?php
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

if (!function_exists('generateJWT')) {
    function generateJWT($payload)
    {
        $secretKey = getenv('JWT_SECRET');
        return JWT::encode($payload, $secretKey, 'HS256');
    }
}

if (!function_exists('validateJWT')) {
    function validateJWT($token)
    {
        try {
            $secretKey = getenv('JWT_SECRET');
            return JWT::decode($token, new Key($secretKey, 'HS256'));
        } catch (\Exception $e) {
            return false;
        }
    }
}
