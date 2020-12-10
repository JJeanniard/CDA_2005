<?php
namespace Titanic\Controllers;

use Titanic\Controller;

class HomeController extends Controller
{

    public function index()
    {
                
        return $this->view('index.html.twig', [
            'welcome' => 'welcome'
        ]);
    }
}