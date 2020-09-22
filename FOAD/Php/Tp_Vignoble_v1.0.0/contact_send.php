<?php
session_start();

if(!empty($_POST['c_email']) && !empty($_POST['c_text'])){

    //TODO: faire fonction d'envoie d'email pour poluer les formateurs 

    $_SESSION['msg_succes'] = "Le formulaire de contact a bien été transmise!";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");

}else{
    $_SESSION['msg_alert'] = "Erreur dans le formulaire de contact";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'contact.php';
    header("Location: http://$host$uri/$extra");
}