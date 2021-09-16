<?php

namespace App\_Framework\Core;

use App\_Framework\Core\Request;
use App\_Framework\Core\View;

use App\_Framework\Traits\Routes;
use App\_Framework\Traits\UrlManager;

class Router
{
    use Routes, UrlManager;

    private $routes = [];
    private $route = [];
    private $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    private function addRoute($url, $collable, $method = 'GET')
    {
        array_push($this->routes, array(
            "url" => $url,
            "method" => $method,
            "action" => $collable,
            "params" => []
        ));
    }



    public function getRoute()
    {
        $routeUrl = $this->request->getPath();
        $countRouteUrl = count($routeUrl);

        foreach ($this->routes as $item) {
            
            $requestUrl = $this->parse($item["url"]);
            $countRequestUrl = count($requestUrl);

            if ($countRouteUrl  === $countRequestUrl && $this->request->getMethod() === $item["method"]) {

                $data = array_diff_assoc($requestUrl, $routeUrl);
                $k = $countRouteUrl - count($data);

                foreach ($data as $param) {
                    ($param == "{param}") ? $k++ : $k--;
                }

                if ($k === $countRouteUrl) {
                    $this->route = $item;
                    $params = [];
                    foreach (array_diff_assoc($routeUrl, $requestUrl) as $param) {
                        array_push($params, $param);
                    }

                    $this->route["params"] = $params;
                }
            }
        }
    }


    public function dispatch()
    {
        $this->getRoute();

        if (!empty($this->route)) {
            list($controller, $method) = $this->route['action'];

            if (class_exists($controller)) {
                if (method_exists($controller, $method)) {
                    (new $controller())->$method(...$this->route['params']);
                    return;
                }
            }
        }

        View::redirect("error/404", 404);
    }

    public function __destruct()
    {
        $this->dispatch();
    }
}
