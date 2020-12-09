<?php
namespace Titanic\Controllers;

use Titanic\Controller;

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

    public function login($request){
        //recuperation de la requet type post
        //TODO verifier que le formulaire est bon, sinon retour avec message d'erreu


        if($request === 'POST'){
            
        }
    }
}