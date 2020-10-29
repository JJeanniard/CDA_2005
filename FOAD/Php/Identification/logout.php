<?php
session_start();
if(isset($_SESSION['user']['name']) && !empty($_SESSION['user']['name'])){
    $_SESSION['user'] = null;
    $_SESSION['error']['alert'] = "Tu est bien déconnécter";
    header("Location: ./index.php");
}