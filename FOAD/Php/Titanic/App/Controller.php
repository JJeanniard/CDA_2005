<?php

abstract class Controller
{
    protected Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        $action = $this->router->getAction();

        if (!method_exists($this, $action)) {
            throw new Exception("Invalide Action");
        }

        return $this->$action();
    }

    public function view(string $view, array $data, bool $layout = true)
    {
        $path = (__DIR__.'/Views/'.$view.'.php');

        extract($data);

        ob_start();

        require $path;

        $result = ob_get_clean();
        $data = [
            'page' => $result
        ];

        if($layout === true){
            $result = $this->view('layout', $data, false);
        }

        return $result;
    }

    abstract public function index();
}