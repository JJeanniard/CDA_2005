<?php


namespace Belote;


class Player
{
    private string $playerName;

    private int $playerTeam;

    private array $playerCards;

    public function __construct(string $name, int $team)
    {
        $this->setPlayerName($name);
        $this->playerTeam = $team;
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
     * @return int
     */
    public function getPlayerTeam(): int
    {
        return $this->playerTeam;
    }
}