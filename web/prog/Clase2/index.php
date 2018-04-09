
<?php
require_once "entidades/localidad.php";
require_once "entidades/persona.php";
require_once "entidades/direccion.php";
require "entidades/alumno.php";
require "entidades/profesor.php";

echo "<body style='background-color:orange'>";




$localidadQ = new localidad( 1879,"Quilmes");
$direccion1= new direccion("esmeralda",40,$localidadQ);
$persona1= new persona("Calos","Perez",30955466,$direccion1);
echo "<br><br>";
$persona1->Mostrarhtml();
echo "<br><br>";

$alumno = new alumno("Calos","Perez",30955466,$direccion1,24774,"2017-03-15" );
$alumno->Mostrarhtml();
echo "<br><br>";

$profesor = new profesor("Kuda","dario",20955466,$direccion1,"Matematicas","Viernes");
$profesor->Mostrarhtml();
$profesor->setmaterias("fisica");
$profesor->setdias("jueves");
echo "<br><br>";
$profesor->Mostrarhtml();


 ?>   











