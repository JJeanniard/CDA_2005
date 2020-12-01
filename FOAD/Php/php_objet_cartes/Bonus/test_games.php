<?php

require "Players.php";
require "Card.php";
require "ICard.php";
require "Familles/GameCard.php";
require "Familles/Player.php";
require "Familles/GameFamilies.php";


use Bonus\Families\Player;
Use Bonus\Families\GameFamilies;

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
