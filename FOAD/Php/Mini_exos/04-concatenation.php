<?php
function concatenation(string $arg1, string $arg2) : string
{
    return $arg1 . $arg2;
}

function concatenationv2(string $arg1, string $arg2) : string
{
    return strtolower($arg1) . " " . strtoupper($arg2);
}