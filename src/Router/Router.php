<?php

namespace App\Router;

use Exception;

class Router
{
  private $url;
  private $routes = [];

  public function __construct($url)
  {
    $this->url = trim($url, '/');
  }

  public function get($path, $callable)
  {
    return $this->add($path, $callable, 'GET');
  }

  public function post($path, $callable)
  {
    return $this->add($path, $callable, 'POST');
  }

  private function add($path, $callable, $method)
  {
    $route = new Route($path, $callable);
    $this->routes[$method][] = $route;
    return $route;
  }

  public function run()
  {
    $method = $_SERVER['REQUEST_METHOD'];
    if (!isset($this->routes[$method])) throw new Exception('No routes matche this request method');

    foreach ($this->routes[$method] as $route) if ($route->match($this->url)) return $route->call();

    header('Location:/students');
  }
}
