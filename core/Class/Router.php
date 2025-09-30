<?php

namespace Core;
use Core\Response;

class Router
{
    public $routes = [];

    protected function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        $this->add($uri, $controller, 'DELETE');
    }

    public function put($uri, $controller)
    {
        $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
        $this->add($uri, $controller, 'PATCH');
    }

    //use to loop through routes[] and check if the given uri match to what it has
    public function routes($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($uri === $route['uri'] && strtoupper($method) === $route['method']) {
                return require base_path($route['controller']);
            }
        }
        $this->abort(404);
    }

    protected function abort($code = 404)
    {
        http_response_code($code);

        require base_path("view/errors/{$code}.php");

        die();

    }

}
