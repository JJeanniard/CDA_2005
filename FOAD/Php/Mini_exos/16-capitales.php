<?php

function capital(string $pays): string
{
    switch ($pays) {
        case "France":
            $capital = "Paris";
            break;
        case "Allemagne":
            $capital = "Berlin";
            break;
        case "Italie":
            $capital = "Rome";
            break;
        case "Maroc":
            $capital = "Rabat";
            break;
        case "Espagne":
            $capital = "Madrid";
            break;
        case "Portugal":
            $capital = "Lisbonne";
            break;
        case "Angletter":
            $capital = "Londres";
            break;
        default:
            $capital = "Inconnu";
    }

    return $capital;
}