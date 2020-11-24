<?php

require "../Personnes/Address.php";
require "../Personnes/Client.php";

$address = new Address("34", "blabla", 39570, "conliège");

$client = new Client("tata", "toto", new DateTime("1990-03-14"), $address);

var_export($client->getAdresse());

$client2 = new Client("titi", "toto", new DateTime("1990-03-24"), $address);

var_export($client->getAdresse());