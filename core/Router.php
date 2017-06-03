<?php

class Router
{
    protected $routes = [];

    public static function load($file)
    {
        $router = new static;
        
        // 调用 $router->define([]);
        require $file;
        
        // 注意这里，静态方法中没有 $this 变量，不能 return $this;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        // 如果数组中存在 $uri 这样的路由, 那么返回对应的路经
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        
        // 不存在，抛出异常，以后关于异常的可以自己定义一些，比如404异常，可以使用NotFoundException
        throw new Exception('No route defined for this URI');
    }    

}