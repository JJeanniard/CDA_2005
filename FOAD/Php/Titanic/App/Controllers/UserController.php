<?php
namespace Titanic\Controllers;

use Titanic\Controller;

/**
 * Class UsersController
 * @package Titanic\Controllers
 */
class UserController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {

        return $this->view('user', [
            'tata' => 'tata'
        ]);
    }
}