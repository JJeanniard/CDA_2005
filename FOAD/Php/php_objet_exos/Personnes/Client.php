<?php

require "Personne.php";

class Client extends Personne
{
    private static int $numero = 0;

    private Address $adresse;

    public function __construct(string $nom, string $prenom, DateTime $datedenaissance, Address $address)
    {
        parent::__construct($nom, $prenom, $datedenaissance);
        Client::$numero = Client::$numero += 1;
        $this->adresse = $address;
    }

    /**
     * @return int
     */
    public static function getNumero(): int
    {
        return self::$numero;
    }

    /**
     * @return Address
     */
    public function getAdresse(): Address
    {
        return $this->adresse;
    }


}