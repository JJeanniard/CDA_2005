<?php
namespace Titanic\Controllers;

use Titanic\Controller;
use Titanic\Models\Clients;
use Titanic\Models\Sales;

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

        $sales = new Sales();

        return $this->view('admin/users.html.twig', [
            'users' => $users->getClientAll(),
            'sales' => $sales->getSaleAll()
        ]);
    }

    /**
     * CRUD
     */
    public function add(){

    }

    public function update(){

    }

    public function delete(){

    }
}