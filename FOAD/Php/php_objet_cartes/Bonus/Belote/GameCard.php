<?php
namespace Bonus\Belote;


class GameCard
{
    private string $color;

    private string $name;

    public function __construct(string $color, string $name)
    {
        $this->color = $color;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}