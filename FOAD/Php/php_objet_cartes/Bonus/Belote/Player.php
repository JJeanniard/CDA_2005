<?php

namespace Bonus\Belote;

use Bonus\Players;

class Player extends Players
{

    private int $playerTeam;

    public function __construct(string $name, int $team)
    {
        parent::__construct($name);
        $this->playerTeam = $team;
    }

    /**
     * @return int
     */
    public function getPlayerTeam(): int
    {
        return $this->playerTeam;
    }
}