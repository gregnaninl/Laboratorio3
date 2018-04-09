<?php
require "funciones/Promedioarray.php";
echo "<body style='background-color:orange'>";

$arraynum = array();
$arrayresult= array();

for($i=0;$i<5;$i++)
{
$arraynum[]= rand(1,10);
}

$arrayresult = Promedioarray($arraynum);

echo("Los numero del array son:<br>");
var_dump($arraynum);
echo("<br><br>");
echo("la suma es: ".$arrayresult["suma"]."<br>"."El promedio es: ".$arrayresult["promedio"]."<br>".$arrayresult["resultado"]);



?>