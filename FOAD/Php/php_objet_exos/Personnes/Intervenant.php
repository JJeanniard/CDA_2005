<?php


use Interventions;
use Personne;

class Intervenant extends Personne
{
    private float $revenu;

    private float $revenuSup;

    /**
     * @return float
     */
    public function getRevenu(): float
    {
        return $this->revenu;
    }

    /**
     * @param float $revenu
     */
    public function setRevenu(float $revenu): void
    {
        $this->revenu = $revenu;
    }

    /**
     * @return float
     */
    public function getRevenuSup(): float
    {
        return $this->revenuSup;
    }

    /**
     * @param float $revenuSup
     */
    public function setRevenuSup(float $revenuSup): void
    {
        $this->revenuSup = $revenuSup;
    }


}