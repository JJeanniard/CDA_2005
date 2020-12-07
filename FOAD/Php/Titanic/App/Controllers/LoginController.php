<?php
namespace Titanic\Controllers;

use Titanic\Controller;

class LoginController extends Controller
{
    public function index() : string
    {
        return $this->view('Titanic/login.html.twig', []);
    }
}