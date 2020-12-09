<?php

namespace Models;

use Models\DbConnect;

class Users
{
    private PDO $db;

    public function getClientAll() : void
    {
        $db = DbConnect::getInstance();
    }
}