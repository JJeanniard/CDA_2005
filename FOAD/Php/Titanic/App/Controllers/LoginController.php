<?php
namespace Titanic\Controllers;

use Titanic\Controller;
use Titanic\Session;

/**
 * Permet la gestion de connection d'un utilisateur
 *
 * Class LoginController
 * @package Titanic\Controllers
 */
class LoginController extends Controller
{
    public function index() : string
    {
        return $this->view('admin/login.html.twig');
    }

    public function login(){
        //recuperation de la requet type post
        //TODO verifier que le formulaire est bon, sinon retour avec message d'erreu


        if(!empty($_REQUEST['POST'])){

        }else{
            Session::addMessage('info', 'Hello les amies les sessions fonctionnes!');
            return header('Location: /Login');
        }

        return header('Location: Admin');
    }
}