<?php


namespace Families;

use Families\Player;

class GameFamilies
{

    private GameCard $cards;

    public function __construct()
    {
        $families = ['Pierre', 'Paul', 'Jacques', 'Dupont', 'Martin', 'Stark', 'Lannister'];
        $peoples = ['Le Grand-Père', 'La Grand-Mère', 'Le Père', 'La Mère', 'Le Fils', 'La Fille'];

        foreach ($families as $family) {
            foreach ($peoples as $people)
            $this->cards += new GameCard($family, $people);
        }

    }

    public function distribute(Player $players)
    {

    }
}