<?php
namespace Titanic\Controllers;

use Titanic\Controller;
use Titanic\Models\Clients;

/**
 * Class UsersController
 * @package Titanic\Controllers
 */
class ClientController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $users = new Clients();

        return $this->view('admin/users.html.twig', [
            'users' => $users->getClientAll()
        ]);
    }
}