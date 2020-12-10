<?php
/*
 * Copyright (c) 2020.
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

/**
 * Client.php
 *
 * desc exemple
 *
 * @author Jjeanniard
 * @version 0.0.1
 */


namespace Titanic\Models;


class Client extends UserModel
{
    private int $client_id;

    private string $client_lastname;

    private string $client_firstname;

    private string $client_email;

    private string $client_phone;

    private string $client_added;

    private string $client_password;

    private string $com_code;

    /**
     * @return int
     */
    public function getClientId(): int
    {
        return $this->client_id;
    }

    /**
     * @param int $client_id
     */
    public function setClientId(int $client_id): void
    {
        $this->client_id = $client_id;
    }

    /**
     * @return string
     */
    public function getClientLastname(): string
    {
        return $this->client_lastname;
    }

    /**
     * @param string $client_lastname
     */
    public function setClientLastname(string $client_lastname): void
    {
        $this->client_lastname = $client_lastname;
    }

    /**
     * @return string
     */
    public function getClientFirstname(): string
    {
        return $this->client_firstname;
    }

    /**
     * @param string $client_firstname
     */
    public function setClientFirstname(string $client_firstname): void
    {
        $this->client_firstname = $client_firstname;
    }

    /**
     * @return string
     */
    public function getClientEmail(): string
    {
        return $this->client_email;
    }

    /**
     * @param string $client_email
     */
    public function setClientEmail(string $client_email): void
    {
        $this->client_email = $client_email;
    }

    /**
     * @return string
     */
    public function getClientPhone(): string
    {
        return $this->client_phone;
    }

    /**
     * @param string $client_phone
     */
    public function setClientPhone(string $client_phone): void
    {
        $this->client_phone = $client_phone;
    }

    /**
     * @return string
     */
    public function getClientAdded(): string
    {
        return $this->client_added;
    }

    /**
     * @param string $client_added
     */
    public function setClientAdded(string $client_added): void
    {
        $this->client_added = $client_added;
    }

    /**
     * @return string
     */
    public function getClientPassword(): string
    {
        return $this->client_password;
    }

    /**
     * @param string $client_password
     */
    public function setClientPassword(string $client_password): void
    {
        $this->client_password = $client_password;
    }

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

    protected function getPassword() : string
    {
        return $this->getClientPassword();
    }
}