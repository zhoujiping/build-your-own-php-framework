<?php 

class Request
{
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    // 返回http请求方式
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}