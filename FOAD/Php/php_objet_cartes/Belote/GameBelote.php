<?php

namespace Belote;

use Belote\GameCard;
use Exception;

class GameBelote
{
    private array $cards;

    public function __construct()
    {
        $colors = ['Pique', 'Coeur', 'Carreau', 'Trèfle'];
        $names = ['Sept', 'Huit', 'Neuf', 'Dix', 'Valet', 'Dame', 'Roi', 'As'];

        foreach ($colors as $color) {
            foreach ($names as $name) {
                $this->cards[] = new GameCard($color, $name);
            }
        }

        shuffle($this->cards);
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

        //On fait une premiere distribution sur 3 carte au premiere joueurs de chaque équipes puis au 2 autre joueurs.
        //En suite on distribue 2 carte dans le même ordre.

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


        for ($i = 0; $i < 3; $i++) {
            foreach ($players as $player) {
                $card[] = $this->cards[$idCard];
                $player->setPlayerCards($card);
                $idCard++;
            }
        }


        for ($i = 0; $i < 2; $i++) {
            foreach ($players as $player) {
                $card[] = $this->cards[$idCard];
                $player->setPlayerCards($card);
                $idCard++;
            }
        }

        return $this->cards[$idCard+1];
    }
}