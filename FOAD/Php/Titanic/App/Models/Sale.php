<?php
/**
 * Sale.php
 *
 * desc exemple
 *
 * @author Jjeanniard
 * @version 0.0.1
 */


namespace Titanic\Models;


class Sale extends UserModel
{
    private string $com_code;

    private string $com_name;

    private string $com_password;

    private ?string $com_substitute;

    /**
     * @return string
     */
    public function getComCode(): string
    {
        return $this->com_code;
    }

    /**
     * @param string $com_code
     */
    public function setComCode(string $com_code): void
    {
        $this->com_code = $com_code;
    }

    /**
     * @return string
     */
    public function getComName(): string
    {
        return $this->com_name;
    }

    /**
     * @param string $com_name
     */
    public function setComName(string $com_name): void
    {
        $this->com_name = $com_name;
    }

    /**
     * @return string
     */
    public function getComPassword(): string
    {
        return $this->com_password;
    }

    protected function getPassword()
    {
        $this->getComPassword();
    }

    /**
     * @param string $com_password
     */
    public function setComPassword(string $com_password): void
    {
        $this->com_password = $com_password;
    }

    /**
     * @return string
     */
    public function getComSubstitute(): string
    {
        return $this->com_substitute;
    }

    /**
     * @param string $com_substitute
     */
    public function setComSubstitute(string $com_substitute): void
    {
        $this->com_substitute = $com_substitute;
    }
}