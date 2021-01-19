<?php
namespace Titanic\Controllers;

use Titanic\Controller;
use Titanic\Session;
use Titanic\Validator;

/**
 * Permet la gestion de connection d'un utilisateur
 *
 * Class LoginController
 * @package Titanic\Controllers
 */
class LoginController extends Controller
{
    /**
     * @route('/login', methode='post')
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index() : string
    {
        if(Session::isLogged()){
            Session::addMessage('info', 'Hello les amies les sessions fonctionnes!');
            return header('Location: /Login/connection');
            exit();
        }else{
            return header('Location: /Admin');
            exit();
        }

    }

    public function connection() : string
    {


        if(!empty($_POST)){
            $username = $_POST['username'] ?? null;
            $password = $_POST['password'] ?? null;

            if(Validator::isAlphaNum($username, 4) && Validator::isPassword($password)){

                header('Location: /admin');
                exit();
            }else{
                Session::setMessage('error', 'Probleme dans de la soumission du formulaire!');
                header('Location: /login/connection');
                exit('admin/login.html.twig');
            }
        }
        return $this->view('admin/login.html.twig');
    }
}