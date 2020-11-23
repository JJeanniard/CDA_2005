<?php


class Personne
{
    private string $name;

    private string $prenom;

    private int $age;

    public function __construct(string $name, string $prenom, DateTime $datedenaissance)
    {
        $toDay = new DateTime();

        $diff = $toDay->diff($datedenaissance);

        $this->age = $diff->y;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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