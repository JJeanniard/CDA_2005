<?php


try {
    $bdd = new PDO("localhost", "vignoble", "dDkI1Musk8VWFwy4");
} catch (Exception $e) {
    echo "Erreur de connection à la base de donnée : " . $e;
}
   