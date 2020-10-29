<?php
function somme(int $arg1, int $arg2) : int
{
    return $arg1+$arg2;
}

function soustration(int $arg1, int $arg2) : int
{
    return $arg1 - $arg2;
}

function multiplication(int $arg1, int $arg2) : int
{
    return $arg1 * $arg2;
}

function division(int $arg1, int $arg2) : float
{
    $resultat = $arg1/$arg2;

    if($resultat < 0){
        $resultat = 0;
    }

    return round($resultat, 2);
}

