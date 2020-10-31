<?php
function passwordLength(string $pwd) : bool
{
    $isLenght = FALSE;

    if(strlen($pwd) > 8){
        $isLenght = TRUE;
    }

    return $isLenght;
}

function passwordCheck(string $pwd) : bool
{
    $isValid = false;

    if(passwordLength($pwd) && preg_match('/[[:digit:]]{1,}[a-z]{1,}[A-Z]{1,}/', $pwd)){
        return true;
    }

    return $isValid;
}