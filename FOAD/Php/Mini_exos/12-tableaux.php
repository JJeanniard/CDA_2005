<?php
$tableau = ['DEVOLDERE', 'CHATELOT', 'THIRY', 'ROCHE', 'LEROY'];

function premierElementTableau(array $args)
{
    if(empty($args)){
        $resultat = null;
    }

    $resultat = $args[0];

    return $resultat;
}

function dernierElementTableau(array $args){

    if(empty($args)){
        $resultat = null;
    }

    $resultat = $args[count($args)-1];

    return $resultat;
}