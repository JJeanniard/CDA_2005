<?php


class role
{
    private int $role_id;

    private string $role_name;

    private int $role_level;

    /**
     * @return int
     */
    public function getRoleId(): int
    {
        return $this->role_id;
    }

    /**
     * @param int $role_id
     */
    public function setRoleId(int $role_id): void
    {
        $this->role_id = $role_id;
    }

    /**
     * @return string
     */
    public function getRoleName(): string
    {
        return $this->role_name;
    }

    /**
     * @param string $role_name
     */
    public function setRoleName(string $role_name): void
    {
        $this->role_name = $role_name;
    }

    /**
     * @return int
     */
    public function getRoleLevel(): int
    {
        return $this->role_level;
    }

    /**
     * @param int $role_level
     */
    public function setRoleLevel(int $role_level): void
    {
        $this->role_level = $role_level;
    }

}