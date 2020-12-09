<?php
namespace Titanic\Controllers;

use Titanic\Controller;
use Titanic\Models\Users;

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
        $users = new Users();

        return $this->view('users.html.twig', [
            'user' => $users->getClientAll()
        ]);
    }
}