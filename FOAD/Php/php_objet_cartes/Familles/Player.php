<?php


namespace Families;


class Player
{
    private string $playerName;

    public function __construct($name)
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
}