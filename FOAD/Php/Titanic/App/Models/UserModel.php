<?php
namespace Titanic\Models;

abstract class UserModel{

    /**
     * @param string $password
     * @return bool
     */
    public function login(string $password) : bool
    {
        return password_verify($password, $this->getPassword());
    }

    abstract protected function getPassword();
}