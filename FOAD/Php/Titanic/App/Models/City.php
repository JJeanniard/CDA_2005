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
 * City.php
 *
 * desc exemple
 *
 * @author Jjeanniard
 * @version 0.0.1
 */


namespace Titanic\Models;


class City
{
    private int $city_code;

    private string $city_name;

    private string $country_code;

    /**
     * @return int
     */
    public function getCityCode(): int
    {
        return $this->city_code;
    }

    /**
     * @param int $city_code
     */
    public function setCityCode(int $city_code): void
    {
        $this->city_code = $city_code;
    }

    /**
     * @return string
     */
    public function getCityName(): string
    {
        return $this->city_name;
    }

    /**
     * @param string $city_name
     */
    public function setCityName(string $city_name): void
    {
        $this->city_name = $city_name;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->country_code;
    }

    /**
     * @param string $country_code
     */
    public function setCountryCode(string $country_code): void
    {
        $this->country_code = $country_code;
    }

}