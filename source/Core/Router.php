<?php

namespace Source\Core;

require __DIR__ . '\..\..\vendor\autoload.php';

class Router
{
    private $controller;
    private $acition;

    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        $url = explode("index.php", $_SERVER['PHP_SELF']);
        $url = end($url);
        $params = array();

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $controller = lcfirst($url[0] . 'Controller');

            array_shift($url);
            if (isset($url[0])) {
                $acition = $url[0];
                if (empty($acition)) {
                    $acition = 'index';
                }
                array_shift($url);
            } else {
                $acition = 'index';
            }
            if (count($url) > 0) {
                $params = $url;
            }
        } else {
            $controller = 'ClientController';
            $acition = 'index';
            $params = array();
        }

        $controller = ucfirst($controller);

        $pasta = 'Source\\Controllers\\';


        if (!file_exists('Source/Controllers/' . $controller . '.php')) {
            $controller = 'NotFoundController';
            $acition = 'index';
        }
        //   $class = "Source\\Controllers\\".$controller;

        $newController = $pasta . $controller;
        $c = new $newController();

        if (!method_exists($pasta . $controller, $acition)) {
            $acition = 'index';
        }
        call_user_func_array(array($c, $acition), $params);
    }
}