<?php

namespace App\Router;

class Route
{
  private $path;
  private $callable;
  private $matches = [];

  public function __construct($path, $callable)
  {
    $this->path = trim($path, '/');
    $this->callable = $callable;
  }

  public function match($url)
  {
    $url = trim($url, '/');

    $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
    $regex = "#^$path$#";

    if (!preg_match($regex, $url, $matches)) return false;

    array_shift($matches);
    $this->matches = $matches;
    return true;
  }

  public function call()
  {
    $params = explode('~', $this->callable);
    $controller = "App\\Controllers\\" . $params[0] . "Controller";

    $controller = new $controller();
    call_user_func_array([$controller, $params[1]], $this->matches);
  }
}
