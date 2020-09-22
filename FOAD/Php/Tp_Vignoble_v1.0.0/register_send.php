<?php
require_once("./connect_pdo.php");

if (!empty($_POST['rg_email']) && !empty($_POST['rg_lastname']) && !empty($_POST['rg_firstname']) && !empty($_POST['rg_pwd'])) {
    $email = htmlspecialchars($_POST['rg_email']);
    $lastname = htmlspecialchars($_POST['rg_lastname']);
    $firstname = htmlspecialchars($_POST['rg_firstname']);
    $password = htmlspecialchars($_POST['rg_pwd']);
    $pwd = password_hash($password, PASSWORD_BCRYPT);
    $req = $bdd->prepare("INSERT INTO users(user_email, user_firstname, user_lastname, user_pwd)
    VALUES(:email, :firstname, :lastname, :pwd)");
    $req->execute(array(
        'email' => $email,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'pwd' => $pwd
    ));

    $_SESSION['msg_succes'] = "Enregistrement reussi";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");

} else {
    $_SESSION['msg_alert'] = "Erreur dans le formulaire d'enregistrement";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'register.php';
    header("Location: http://$host$uri/$extra");
}
