<?php

class Impot
{

    private const taux14 = 14;

    private const taux9 = 9;

    private string $name;

    private int $revenu;

    private float $resultat;

    public function __construct($name, $revenu)
    {
        $this->name = $name;
        $this->revenu = $revenu;
    }

    public function calculImpot(): float
    {

        if ($this->revenu > 15000) {
            $this->resultat = $this->revenu * self::taux14 / 100;
        } else {
            $this->resultat = $this->revenu * self::taux9 / 100;
        }

        return $this->resultat;
    }

    public function afficheImpot(): void
    {
        echo "$this->name votre impôt est de ".$this->calculImpot()." euros.";
    }
}