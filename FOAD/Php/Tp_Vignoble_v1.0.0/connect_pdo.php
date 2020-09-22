<?php


try {
    $bdd = new PDO("mysql:host=localhost", "vignoble", "dDkI1Musk8VWFwy4");
} catch (Exception $e) {
    echo "Erreur de connection à la base de donnée : " . $e;
}
   