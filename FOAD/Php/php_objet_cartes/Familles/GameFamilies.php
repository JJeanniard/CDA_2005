<?php


namespace Families;

use Exception;
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

    public function distribute($players)
    {
        if (sizeof($players) < 2 || sizeof($players) > 4) {
            throw new Exception("Soit il ns'y a pas le nombre de joueur suffisant ou il y a trop de joueur!");
        }

        $x = 0;
        for($i = 0; $i < 7; $i++){
            for ($y = 0; $y < sizeof($players); $y++) {
                $player[$players[$y]->getPlayerName()][$i] = $this->cards[$x];
                $x++;
            }
        }

        $z = 0;
        foreach ($player as $cards){
            foreach ($cards as $family){
                $rows[$z] = $family->getFamily();
                $z++;
            }
        }

        foreach (array_count_values($rows) as $count){
            echo $count."\n";
            if($count === 7){
                printf("MATCH");
                sleep(10);
                $this->distribute($players);
            }
        }
    }
}