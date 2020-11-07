<?php


try {
    $bdd = new PDO("mysql:host=localhost;dbname=vignoble", "vignoble", "dDkI1Musk8VWFwy4", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    echo "Erreur de connection à la base de donnée : " . $e;
}
   