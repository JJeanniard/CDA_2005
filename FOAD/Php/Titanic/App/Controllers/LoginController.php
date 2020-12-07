<?php
namespace Titanic\Controllers;

use Titanic\Controller;

class LoginController extends Controller
{
    public function index(){
        return $this->view('admin/login.html.twig', '');
    }
}