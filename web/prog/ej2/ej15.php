<?php
include_once "clases15/FiguraGeometrica.php";
include_once "clases15/Rectangulo.php";
include_once "clases15/Triangulo.php";


echo "<body style='background-color:orange'>";




$t1 = new Triangulo(5,3);
$r1 = new Rectangulo(7,3);

echo $r1->toString();
$r1->Dibujar();
echo "<br><br>";
echo $t1->toString();
$t1->Dibujar(); 

?>