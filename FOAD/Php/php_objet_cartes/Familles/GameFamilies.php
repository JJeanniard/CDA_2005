<?php


namespace Families;

use Families\Player;
use Families\GameCard;

class GameFamilies
{

    private array $cards;

    public function __construct()
    {

        $families = ['Pierre', 'Paul', 'Jacques', 'Dupont', 'Martin', 'Stark', 'Lannister'];
        $peoples = ['Le Grand-Père', 'La Grand-Mère', 'Le Père', 'La Mère', 'Le Fils', 'La Fille'];

        foreach ($families as $family) {
            foreach ($peoples as $people) {
                $this->cards[] = new GameCard($family, $people);
            }
        }

        shuffle($this->cards);
    }

    //TODO: faire en sorte qu'il y a pas une famille lors de la distribution
    public function distribute($players)
    {
        if (sizeof($players) < 2 || sizeof($players) > 4) {
            throw new Exception("Soit il n'y a pas le nombre de joueur suffisant ou il y a trop de joueur!");
        }
        $x = 0;
        for($i = 0; $i < 7; $i++){
            for ($y = 0; $y < sizeof($players); $y++) {
                $player[$players[$y]->getPlayerName()][$i] = $this->cards[$x];
                $x++;
            }
        }
        //TODO: verifier qu'un joueur n'a pas 7 fois la le même nom de famille dans son jeux
    }
}