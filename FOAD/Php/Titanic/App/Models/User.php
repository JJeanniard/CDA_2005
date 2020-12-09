<?php
namespace Titanic\Models;

class User extends UserModel
{
    private int $user_id;

    private string $user_name;

    private string $user_email;

    private string $user_pwd;

    private int $user_role;

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->user_name;
    }

    /**
     * @param string $user_name
     */
    public function setUserName(string $user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return string
     */
    public function getUserEmail(): string
    {
        return $this->user_email;
    }

    /**
     * @param string $user_email
     */
    public function setUserEmail(string $user_email): void
    {
        $this->user_email = $user_email;
    }

    /**
     * @return string
     */
    public function getUserPwd(): string
    {
        return $this->user_pwd;
    }

    /**
     * @param string $user_pwd
     */
    public function setUserPwd(string $user_pwd): void
    {
        $this->user_pwd = $user_pwd;
    }

    /**
     * @return int
     */
    public function getUserRole(): int
    {
        return $this->user_role;
    }

    /**
     * @param int $user_role
     */
    public function setUserRole(int $user_role): void
    {
        $this->user_role = $user_role;
    }

    protected function getPassword()
    {
        return $this->user_pwd;
    }
}