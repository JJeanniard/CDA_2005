<?php

/**
 * Class Voiture
 */
class Voiture
{
    protected string $marque;

    protected string $modele;

    /** Poids en kilogramme @var int */
    protected int $poids;

    public function __construct(string $marque, string $modele, int $poids = 1000, string $modeleMoteur, int $vitessMax)
    {
        $moteur = new Moteur($modeleMoteur, $vitessMax);

        $this->setMarque($marque);
        $this->setModele($modele);
        $this->setPoids($poids);
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele(string $modele): void
    {
        $this->modele = $modele;
    }

    /**
     * @return int
     */
    public function getPoids(): int
    {
        return $this->poids;
    }

    /**
     * @param int $poids
     */
    public function setPoids(int $poids): void
    {
        $this->poids = $poids;
    }


}