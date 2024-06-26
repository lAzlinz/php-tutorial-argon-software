<?php

class Router {

    protected array $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct(string $uri, string $requestType): string {

        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined.');
    }
}