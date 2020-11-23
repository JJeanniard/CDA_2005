<?php
require "../Véhicules/Voiture.php";
require "../Véhicules/VoitureDeSport.php";

$voiture1 = new voiture("Renault", "Scenic", "Peugeot", 600, 1500);

echo $voiture1->toString();
echo "\n";

echo "\n";
echo $voiture1->vitesseMax();
echo "\n";
try {
    $voituredecours1 = new VoitureDeSport("Renault", "Scenic", "Renault", 1000, 600);
    echo $voituredecours1->vitesseMax();
}catch (Exception $e){
    echo "Erreur: $e";
}


