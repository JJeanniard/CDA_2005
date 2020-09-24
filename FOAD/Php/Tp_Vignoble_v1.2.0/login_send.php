<?php
session_start();
require_once("./connect_pdo.php");

if (!empty($_POST['l_email']) && !empty($_POST['l_pwd'])) {
    $email = htmlspecialchars($_POST['l_email']);
    $passwd = htmlspecialchars($_POST['l_pwd']);

    $req = $bdd->prepare("SELECT user_id, user_email, user_pwd, user_firstname FROM users WHERE user_email = ?");
    $req->execute(array($email));

    while ($rep = $req->fetch()) {

        if (password_verify($passwd, $rep['user_pwd'])) {

            $_SESSION['user']['lastname'] = $rep['user_lastname'];
            $_SESSION['user']['firstname'] = $rep['user_firstname'];
            $_SESSION['user']['id'] = $rep['user_id'];

        } else {
            $_SESSION['msg_alert'] = "Erreur dans le login";
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = 'login.php';
            header("Location: http://$host$uri/$extra");
        }

        $_SESSION['msg_succes'] = "login ok";
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php';
        header("Location: http://$host$uri/$extra");
    }
} else {

    $_SESSION['msg_alert'] = "Erreur dans le login";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'login.php';
    header("Location: http://$host$uri/$extra");
}
