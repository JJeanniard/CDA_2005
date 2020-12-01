<?php
namespace Bonus;

class Players
{
    private string $playerName;

    private array $playerCards;

    public function __construct(string $name)
    {
        $this->setPlayerName($name);
    }

    /**
     * @return string
     */
    public function getPlayerName(): string
    {
        return $this->playerName;
    }

    /**
     * @param string $playerName
     */
    public function setPlayerName(string $playerName): void
    {
        $this->playerName = $playerName;
    }

    /**
     * @return array
     */
    public function getPlayerCards(): array
    {
        return $this->playerCards;
    }

    /**
     * @param array $playerCards
     */
    public function setPlayerCards(array $playerCards): void
    {
        $this->playerCards = $playerCards;
    }
}