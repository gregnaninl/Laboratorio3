<?php

echo "<body style='background-color:orange'>";

function invertirarray($array)
{

krsort($array);

return $array;

}

$palabra = array("H","O","L","A");

var_dump($palabra);

$plabrainvertida= array();

$palabra= invertirarray($palabra);

echo "<br>";
var_dump($palabra);



?>