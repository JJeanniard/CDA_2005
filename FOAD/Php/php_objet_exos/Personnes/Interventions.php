<?php

use Client;
use Intervenant;

class Interventions
{
    private DateTime $datetime;

    private string $description;

    public function __construct(Client $client, Intervenant $intervenant)
    {

    }
}