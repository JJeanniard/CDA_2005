<?php
session_start();

if(isset($_SESSION['user']['name']) && empty($_SESSION['user']['name'])){
    $_SESSION['error']['alert'] = "Tu n'est pas connécter";
    header("Location: ./index.php");
}