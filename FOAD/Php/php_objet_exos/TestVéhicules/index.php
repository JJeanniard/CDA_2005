<?php
require "../Véhicules/Voiture.php";

$voiture1 = new voiture("Renault", "Scenic", "Peugo", 160, 1500);

echo $voiture1->vitesseMax();