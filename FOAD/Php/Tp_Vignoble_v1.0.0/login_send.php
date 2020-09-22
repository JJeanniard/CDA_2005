<?php
require_once("./connect_pdo.php");

if (!empty($_POST['rg_email']) && !empty($_POST['rg_pwd'])) {
    $email = htmlspecialchars($_POST['rg_email']);
    $password = htmlspecialchars($_POST['rg_pwd']);

    $req = $bdd->prepare("SELECT user_email, user_pwd, user_firstname WHERE user_email = :email AND user_pwd = :pwd");
    $req->execute(array('email' => $email, 'pwd' => password_verify($password, PASSWORD_BCRYPT)));


} else {
    $_SESSION['msg_alert'] = "Erreur dans le login";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'login.php';
    header("Location: http://$host$uri/$extra");
}