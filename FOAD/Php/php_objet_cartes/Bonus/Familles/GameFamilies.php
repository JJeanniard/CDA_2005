<?php
namespace Bonus\Families;

use Exception;

use Bonus\Card;
use Bonus\ICard;

class GameFamilies extends Card implements ICard
{

    public function __construct()
    {

        $families = ['Pierre', 'Paul', 'Jacques', 'Dupont', 'Martin', 'Stark', 'Lannister'];
        $peoples = ['Le Grand-Père', 'La Grand-Mère', 'Le Père', 'La Mère', 'Le Fils', 'La Fille'];

        foreach ($families as $family) {
            foreach ($peoples as $people) {
                $this->cards[] = new GameCard($family, $people);
            }
        }
        parent::__construct();
    }

    public function distribute(array $players)
    {
        if (sizeof($players) < 2 || sizeof($players) > 4) {
            throw new Exception("Soit il ns'y a pas le nombre de joueur suffisant ou il y a trop de joueur!");
        }

        $x = 0;
        foreach ($players as $player) {
            for($i = 0; $i < 7; $i++){
                $cardPlDist[] = $this->cards[$x];
                $x++;
            }
            $player->setPlayerCards($cardPlDist);
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
                $this->distribute($players);
            }
        }
    }
}