<?php
namespace Bonus;

class Card
{
    protected array $cards;

    public function __construct()
    {
        shuffle($this->cards);
    }
}