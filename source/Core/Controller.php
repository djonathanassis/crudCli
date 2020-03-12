<?php


namespace Source\Core;


class Controller
{

    protected  function  loadView($view, $viewData = array()){
        extract($viewData);
        include 'source/Views/'.$this->controllerNome() .'/'. $view . '.php';

    }
    protected function loadTemplete($view, $viewData = array()){
        require 'source/Views/Template.php';
    }

    protected function loadViewInTemplate($view, $viewData = array()){
        extract($viewData);
        include 'source/Views/'. $this->controllerNome() .'/'. $view . '.php';
    }

    protected function controllerNome(){
        $class = get_class($this);
        $class = explode('\\', $class);
        $class = array_pop($class);
        $class = preg_replace('/Controller$/', '', $class);
        return strtolower($class);
    }

}