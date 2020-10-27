<?php
function estMajeur(int $age): bool
{
    $resultat = false;

    if ($age >= 18) {
        $resultat = true;
    }

    return $resultat;
}

function calculRetraite(int $age): string
{
    $somme = 60 - $age;
    $result = "";

    if (60 > $age) {
        $result = "Il vous reste $somme avant la retraite.";
    } else if (60 === $age) {
        $result = "Vous êtes à la retraite cette année.";
    } else if (60 < $age) {
        //TODO:supprimez le signe négatif
        $result = "Vous êtes à la retraite depuis $somme ans.";
    }else if(0 > $age){
        $result = "Vous n'êtes pas encore né.";
    }

    return $result;
}

echo calculRetraite(60);