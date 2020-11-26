<?php

require "Player.php";
require "GameCard.php";
require "GameFamilies.php";

use Families\GameCard;
use Families\Player;
Use Families\GameFamilies;

$players = [
    0 => new Player('Mike'),
    1 => new Player('Paul'),
    2 => new Player('Cindy'),
    3 => new Player('Jonas')
];

$game = new GameFamilies();

var_dump($game);

$game->distribute($players);

var_dump($players);


