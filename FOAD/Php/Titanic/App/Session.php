<?php
/**
 * Class abstrait pour la gestion de session d'utilisateur et des messages
 */

namespace Titanic;

\session_start();

class Session{

    private function __construct(){}


    static public function isLogged()
    {
        return !empty($_SESSION['user']);
    }

    static public function login($user)
    {
        $_SESSION['user'] = $user;
    }

    static public function logout()
    {
        \session_destroy();
    }

    /**
     * Type de message 'error', 'success', 'warning' ...
     * Le message doit etre cours et comprehensible
     * @param string $messageType
     * @param string $message
     */
    static public function setMessage(string $messageType, string $message)
    {
        $_SESSION['msg'][''.$messageType.''] = $message;
    }

    static public function getMessage() : ?array
    {
        $msg = $_SESSION['msg'] ?? null;

        $_SESSION['msg'] = null;

        return $msg;
    }

}
