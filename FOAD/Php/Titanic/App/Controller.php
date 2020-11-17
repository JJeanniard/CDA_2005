<?php

abstract class Controller
{
    protected Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run(){
        $action = $this->router->getAction();

        if(!method_exists($this, $action)){
            throw new Exception("Invalide Action");
        }

        return $this->$action();
    }

    public function view(){

    }

    abstract public function index();
}