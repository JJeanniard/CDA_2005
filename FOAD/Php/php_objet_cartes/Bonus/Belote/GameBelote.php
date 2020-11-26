<?php

namespace Bonus\Belote;

use Exception;

use Bonus\Card;
use Bonus\ICard;

class GameBelote extends Card implements ICard
{

    public function __construct()
    {

        $colors = ['Pique', 'Coeur', 'Carreau', 'Trèfle'];
        $names = ['Sept', 'Huit', 'Neuf', 'Dix', 'Valet', 'Dame', 'Roi', 'As'];

        foreach ($colors as $color) {
            foreach ($names as $name) {
                $this->cards[] = new GameCard($color, $name);
            }
        }
        parent::__construct();
    }

    public function distribute(array $players)
    {

        if (sizeof($players) > 4 || sizeof($players) < 4) {
            throw new Exception("Le nombre de joueur est soit insufisant ou il y n'a trop!");
        }

        foreach ($players as $player) {
            $teams[] = $player->getPlayerTeam();
        }

        if (sizeof(array_count_values($teams)) > 2 || sizeof(array_count_values($teams)) < 2) {
            throw new Exception("Trop ou peu d'équipe pour jouer!");
        }

        foreach ($players as $key => $player) {
            for ($i = 1; $i < 2; $i++) {
                if ($player->getPlayerTeam() === 1) {
                    $firstTeam[] = $player;
                } else {
                    $secondTeam[] = $player;
                }
            }
        }

        $players = null;

        $players[] = $firstTeam[0];
        $players[] = $secondTeam[0];
        $players[] = $firstTeam[1];
        $players[] = $secondTeam[1];

        $idCard = 0;
        foreach ($players as $player) {
            $cardPlDist1 = null;
            for ($x = 0; $x < 3; $x++) {
                $cardPlDist1[] = $this->cards[$idCard];
                $idCard++;
            }
            $player->setPlayerCards($cardPlDist1);
        }

        foreach ($players as $player) {
            $cardPlDist2 = null;
            for ($i = 0; $i < 2; $i++) {
                $cardPlDist2[] = $this->cards[$idCard];
                $idCard++;
            }

            foreach ($player->getPlayerCards() as $cards){
                $cardPlDist2[] = $cards;
            }
            $player->setPlayerCards($cardPlDist2);
        }

        return $this->cards[$idCard + 1];
    }
}