<?php

require "utils/routes.php";

class Router {
    private static $routes = [];

    public static function get($path, $handler) {
        self::$routes[] = ['method' => 'GET', 'path' => $path, 'handler' => $handler];
    }

    public static function post($path, $handler) {
        self::$routes[] = ['method' => 'POST', 'path' => $path, 'handler' => $handler];
    }

    public static function handle($uri) {
        foreach (self::$routes as $route) {
            if ($route['path'] === $uri) {
                return $route['handler'];
            }
        }
        return null;
    }
}
