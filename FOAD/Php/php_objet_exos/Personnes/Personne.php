<?php

class Personne
{
    private string $nom;

    private string $prenom;

    private int $age;

    /**
     * Personne constructor.
     * @param string $nom
     * @param string $prenom
     * @param DateTime $datedenaissance
     */
    public function __construct(string $nom, string $prenom, DateTime $datedenaissance)
    {
        $toDay = new DateTime();

        $this->nom = $nom;

        $this->prenom = $prenom;

        $this->age = $toDay->diff($datedenaissance)->y;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

}