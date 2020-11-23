<?php
require "../Personnes/Personne.php";

$personne = new Personne("tata", "toto", new DateTime("1990-03-14"));

echo $personne->getAge();