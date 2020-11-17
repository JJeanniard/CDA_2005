<?php
namespace Controllers;

use Controller;

class HomeController extends Controller
{
    public function index(){
        echo "hello home";

        $this->view("home");
    }
}