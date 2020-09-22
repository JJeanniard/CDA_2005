<?php
require_once("./connect_pdo.php");

if (!empty($_POST['rg_email']) && !empty($_POST['rg_lastname']) && !empty($_POST['rg_firstname']) && !empty($_POST['rg_pwd'])) {
    $email = htmlspecialchars($_POST['rg_email']);
    $lastname = htmlspecialchars($_POST['rg_lastname']);
    $firstname = htmlspecialchars($_POST['rg_firstname']);
    $password = htmlspecialchars($_POST['rg_pwd']);

    $bdd->prepare("INSERT INTO user(user_email, user_firstname, user_lastname, user_pwd)
    VALUES (:email, :firstname, :lastname, :pwd)");
    $bdd->exec(array(
        'email' => $email,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'pwd' => password_hash($password, PASSWORD_BCRYPT)
    ));


} else {
    $_SESSION['msg_alert'] = "Erreur dans le formulaire d'enregistrement";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'register.php';
    header("Location: http://$host$uri/$extra");
}
