<?php
$tableau = ["Mike", "Franck", "Sophie"];

function html_List(string $nameList, array $tabList) : string
{
    $result = "Aucun resultat";

    if(!empty($nameList) && count($tabList)>0){
        $result = "<h3>$nameList</h3>";
        $result .= "<ul>";
        foreach ($tabList as $element){
            $result .= "<li>$element</li>";
        }
        $result .= "</ul>";
    }

    return $result;
}
