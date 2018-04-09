<?php
include_once "clases17/Auto.php";

echo "<body style='background-color:orange'>";

$a1= new Auto("Ford","Gris");
$a2= new Auto("Ford","Verde");
$a3 = new Auto("Ford","Rojo",50000);
$a4 = new Auto("Ford","Rojo",90000);
$a5 = new Auto("Renault","Negro",75000,new DateTime('2017-01-01'));

echo "<br>";
$a1->MostrarAuto($a1);
echo "<br>";
$a1->MostrarAuto($a2);
echo "<br>";
$a1->MostrarAuto($a3);
echo "<br>";
$a1->MostrarAuto($a4);
echo "<br>";
$a1->MostrarAuto($a5);


?>