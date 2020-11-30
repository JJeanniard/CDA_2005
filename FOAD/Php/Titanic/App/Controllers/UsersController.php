<?php
namespace Titanic\Controllers;

use Controller;

class UsersController extends Controller
{
    public function index(){

        return $this->view('user', [
            'tata' => 'tata'
        ]);
    }
}