<?php
session_start();

if(empty($_POST)){

}else{
    $_SESSION['msg_alert'] = "Erreur dans le formulaire de contact";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'contact.php';
    header("Location: http://$host$uri/$extra");
}