<?php


class MyString
{

    private int $length;

    private string $str;

    public function __construct(string $str)
    {
        $this->str = $str;
        $this->strSize();
    }

    public function strSize()
    {
        return $this->length = strlen($this->str);
    }

    /**
     * @param int $index
     * @return string
     */
    public function charAt(int $index) : string
    {
        $value = "";

        for($i = 0; $i < $this->length; $i++){
            if ($index == $i) {
                $value = $this->str[$index];
            }
        }
        return $value;
    }

    public function indexOf(string $str, int $index = 0)
    {
        //TODO: la taille du $str passé en para et faire correspondre
        /*
         * aze = ert
         * zer = ert
         * ert = ert
         */
        $position = -1;

        for($i = $index; $i < $this->length; $i++){
            if($str == substr($this->str, $i, strlen($str))){
                $position = $i+1;
            }
        }

        return $position;
    }

    public function subString(int $position)
    {
        return substr($this->str, $position);
    }

    /**
     * @return array
     */
    public function split() : array
    {
        return str_split($this->str);
    }

    /**
     * @return string
     */
    public function toLowerCase()
    {
        return mb_convert_case($this->str, MB_CASE_LOWER);
    }

    /**
     * @return string
     */
    public function toUpperCase()
    {
        return mb_convert_case($this->str, MB_CASE_UPPER);
    }
}