<?php   
require "alumno.php";// require "ruta del archivo" son los que necesito
//include "alumno.php"// son los que voy a incluir
require_once "alumno.php"; // lo incluye pero si esta repetido funciona igual
require_once "array.php";
/*for($i=0 ; $i<10 ; $i++)
{
include "repetidor.php";	
$cont +=10;
echo "$cont - $i";
}*/

//todas las cçvariables se crean con $
$nombre="Jose";
echo "Hola Mundo <br>".$nombre;
$sueldo = 10.333;
printf("Sueldo : %f <br>",$sueldo);
print("nombre $nombre <br><br>" );

//Contructor de Array
$miArray = array(1,2,3);
//var_dump explora el array
//var_dump($miArray);

//$miArray1 [33] = "Hola";
//$miArray1 ["maria"] = "chau";
$miArray2 = array('legajo' =>19 ,66 );
//var_dump($miArray2);


$elAlumno = new alumno();
$elAlumno->nombre = "PEPE";
$elAlumno->legajo = 666;
$elAlumno->Mail = "no tengo";
$otro = $elAlumno; //pasa la direccion de memoria del objero 
$otro->nombre="Juan";

//var_dump($elAlumno);


ksort($arrayTest);
echo "<br><br>";
var_dump($arrayTest);
echo "<br><br>";
krsort($arrayTest);
var_dump($arrayTest);



?>