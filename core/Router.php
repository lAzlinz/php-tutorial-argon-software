<?php

class Router {

    protected array $routes;

    public function define(array $routes) {
        $this->routes = $routes;
    }

    public function direct(string $uri): string {



        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route defined.');
    }
}