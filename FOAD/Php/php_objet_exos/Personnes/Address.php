<?php

class Address
{

    private int $numeroRue;

    private string $nomRue;

    private int $codePostal;

    private string $nomCommun;

    public function __construct(int $numeroRue, string $nomRue, int $codePostal, string $nomCommun)
    {
        $this->numeroRue = $numeroRue;
        $this->nomRue = $nomRue;
        $this->codePostal = $codePostal;
        $this->nomCommun= $nomCommun;
    }

    /*public function tostring(){
        foreach ($this as $attribue => $value){
            echo $this->{$attribue};
        }
    }*/
}