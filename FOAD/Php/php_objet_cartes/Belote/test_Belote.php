<?php
require "GameCard.php";
require "Player.php";
require "GameBelote.php";

use Belote\Player;
use Belote\GameCard;
use Belote\GameBelote;

$players = [
    0 => new Player('Mike', 1),
    1 => new Player('Paul', 1),
    2 => new Player('Cindy', 2),
    3 => new Player('Jonas', 2)
];

$game = new Game();

var_dump($game);

$game->distribute($players);

var_dump($players);