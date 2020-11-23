<?php


class Moteur
{
    private string $marque;

    private int $vitessMax;


    /**
     * Moteur constructor.
     * @param string $modeleMoteur
     * @param int $vitessMax
     */
    public function __construct(string $modeleMoteur, int $vitessMax)
    {
        $this->setMarque($modeleMoteur);
        $this->setVitessMax($vitessMax);
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
     * @return int
     */
    public function getVitessMax(): int
    {
        return $this->vitessMax;
    }

    /**
     * @param int $vitessMax
     */
    public function setVitessMax(int $vitessMax): void
    {
        $this->vitessMax = $vitessMax;
    }


}