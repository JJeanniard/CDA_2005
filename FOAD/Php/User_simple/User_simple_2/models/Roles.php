<?php


class roles extends RequestPDO
{
    public function __construct()
    {
        parent::__construct("users_roles");
    }

    public function getFindById(int $id)
    {
        return parent::getFindBy("role_id", $id);
    }

    public function remove(int $id)
    {
        return parent::delete("role_id", $id);
    }
}