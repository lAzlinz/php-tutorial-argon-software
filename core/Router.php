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

    public function direct(string $uri, string $requestType) {

        if (array_key_exists($uri, $this->routes[$requestType])) {
            // return $this->routes[$requestType][$uri];
            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
        }

        throw new Exception('No route defined.');
    }

    protected function callAction(string $controller, string $action)
    {
        $controller = new $controller;
        if (! method_exists($controller, $action)) {
            throw new Exception("{$controller} does not respond to the {$action} action.");
        }
        return $controller->$action();
    }
}