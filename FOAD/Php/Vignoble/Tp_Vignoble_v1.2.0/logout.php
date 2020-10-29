<?php 
session_start();

if(!empty($_SESSION['user'])){
    session_destroy();
    session_start();
    $_SESSION['msg_succes'] = "Tu es déconnecté!";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'index.php';
    header("Location: http://$host$uri/$extra");
}else{
    $_SESSION['msg_alert'] = "Erreur tu n'es pas connecter!";
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'login.php';
    header("Location: http://$host$uri/$extra");
}

?>