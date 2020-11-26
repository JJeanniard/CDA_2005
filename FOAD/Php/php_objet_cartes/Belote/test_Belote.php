<?php
require "GameCard.php";
require "Player.php";
require "GameBelote.php";

use Belote\Player;
use Belote\GameCard;
use Belote\GameBelote;

$players = [
    0 => new Player('Mike', 1),
    1 => new Player('Paul', 2),
    2 => new Player('Cindy', 2),
    3 => new Player('Jonas', 1)
];

$game = new GameBelote();

//var_dump($game);

$game->distribute($players);

//var_dump($players);

foreach ($players as $player){
    echo $player->getPlayerName(). "\n";
    foreach ($player->getPlayerCards() as $card){
        echo $card->getColor() . " " . $card->getName() ."\n";
    }
    echo "\n";
}