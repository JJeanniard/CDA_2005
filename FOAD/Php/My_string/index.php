<?php
require "./MyString.php";

$string = new MyString("azertyuiop");


echo $string->charAt(0)."\n";

print_r($string->split());

echo $string->toLowerCase()."\n";
echo $string->toUpperCase()."\n";

echo $string->indexOf("ui")."\n";

echo $string->subString(-2);