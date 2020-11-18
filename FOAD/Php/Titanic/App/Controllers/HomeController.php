<?php
namespace Controllers;

use Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view('home', [
            'welcome' => 'welcome'
        ]);
    }
}