<?php
namespace Bonus\Families;


class GameCard
{
    private string $family;

    private string $name;

    public function __construct(string $family, string $name)
    {
        $this->family = $family;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFamily(): string
    {
        return $this->family;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }


}