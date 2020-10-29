<?php
session_start();

$lastname = $_POST['lastname'] ?? '';
$pwd = $_POST['pwd'] ?? '';

$lastname = strip_tags($lastname);
$pwd = strip_tags($pwd);

if(empty($lastname) || empty($pwd)){
    $_SESSION['error']['warning'] = "Les champs sont vides.";
    header("Location: ./index.php");
}

if(!is_string($lastname) || !is_string($pwd)){
    $_SESSION['error']['alert'] = "Une erreur est survenue lors de l'envoie du formulaire.";
    header("Location: ./index.php");
}

if($lastname == "admin" && $pwd == "Cdi1234"){
    $_SESSION['user']['name'] = $lastname;
    header("Location: ./info.php");
}else{
    $_SESSION['error']['alert'] = "L'association username et password ne correspond pas!";
    header("Location: ./index.php");
}