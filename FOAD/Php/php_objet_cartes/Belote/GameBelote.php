<?php


namespace Belote;

use Belote;
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

        shuffle($cards);
    }

    public function distribute(array $players)
    {

        if (sizeof($players) > 4 || sizeof($players) < 4) {
            throw new Exception("Le nombre de joueur est soit insufisant ou il y n'a trop!");
        }

        //TODO: verifier qu'il y a bien 2 équipe
        foreach ($players as $player) {
            echo array_count_values($players->getPlayerTeam());
        }


        //On fait une premiere distribution sur 3 carte au premiere joueurs de chaque équipes puis au 2 autre joueurs.

        //En suite on distribue 2 carte dans le même ordre.

        //TODO: selectionner les 2 premiers joueurs de chaque équipe

        $
    }
}