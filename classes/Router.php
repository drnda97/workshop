<?php

class Router
{
  protected $controller = 'PagesController';
  protected $method = 'startupage';
  protected $params = [];

  public function __construct()
  {
       // $url = new Request;
       $url = $this->parseUrl();
       $this->availableRoutes();
  }
  public function parseUrl()
  {
    if (isset($_GET['url'])) {
      return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }
  }
  public function availableRoutes()
  {
    $controller_base = $this->parseUrl()[0];
    $controller_name = ucfirst($controller_base).'Controller';
    if (file_exists('./controller/' . $controller_name . '.php')) {
      $this->controller = $controller_name;
      unset($this->parseUrl()[0]);
    }
    require_once('./controller/' . $this->controller .'.php');
    $this->controller = new $this->controller;
    if (isset($this->parseUrl()[1])) {
      if (method_exists($this->controller, $this->parseUrl()[1])) {
        $this->method = $this->parseUrl()[1];
        unset($this->parseUrl()[1]);
      }
    }
      $this->params = $this->parseUrl() ? array_values($this->parseUrl()) : [];
      call_user_func_array([$this->controller, $this->method], $this->params);
  }
}
