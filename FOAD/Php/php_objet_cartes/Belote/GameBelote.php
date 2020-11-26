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

        if(sizeof(array_count_values($teams)) > 2 || sizeof(array_count_values($teams)) < 2){
           throw new Exception("Trop ou peu d'équipe pour jouer!");
        }

        //On fait une premiere distribution sur 3 carte au premiere joueurs de chaque équipes puis au 2 autre joueurs.

        //En suite on distribue 2 carte dans le même ordre.

        //TODO: selectionner les 2 premiers joueurs de chaque équipe

        foreach ($players as $key => $player){
            for($i = 1; $i < 2 ; $i++){
                if($player->getPlayerTeam() === 1){
                    $firstTeam[] = $player;
                }else{
                    $secondTeam[] = $player;
                }
            }
        }

        $z = 0;
        for($i = 0; $i < 3; $i++){
            $cardPl1[] = $this->cards[$z++];
            $firstTeam[0]->setPlayerCards($cardPl1);
            $cardPl2[] = $this->cards[$z++];
            $secondTeam[0]->setPlayerCards($cardPl2);
            $cardPl3[] = $this->cards[$z++];
            $firstTeam[1]->setPlayerCards($cardPl3);
            $cardPl4[] = $this->cards[$z++];
            $secondTeam[1]->setPlayerCards($cardPl4);
        }

        $y = 0;
        for($i = 0; $i < 2; $i++){
            $cardPl1[] = $this->cards[$y++];
            $firstTeam[0]->setPlayerCards($cardPl1);
            $cardPl2[] = $this->cards[$y++];
            $secondTeam[0]->setPlayerCards($cardPl2);
            $cardPl3[] = $this->cards[$y++];
            $firstTeam[1]->setPlayerCards($cardPl3);
            $cardPl4[] = $this->cards[$y++];
            $secondTeam[1]->setPlayerCards($cardPl4);
        }



        var_dump($firstTeam[0]->getPlayerCards());
        var_dump($secondTeam[0]->getPlayerCards());
        var_dump($firstTeam[1]->getPlayerCards());
        var_dump($secondTeam[1]->getPlayerCards());
    }
}