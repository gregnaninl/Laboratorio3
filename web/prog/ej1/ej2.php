<?php

echo "<body style='background-color:orange'>";


$estacion;
$hoy = getdate();
$anio = $hoy["year"];
$mes= $hoy["mon"];
$dia=$hoy["mday"];

print("La fecha de Hoy es <br> dia: ".$dia." del mes: ".$mes." del año:".$anio);
print("<br>".$hoy["weekday"].":".$hoy["mday"]."-".$hoy["month"]."-".$hoy["year"]."<br>");
print_r($hoy);

$dateH = date_create("$anio-$mes-$dia");

$dateV=date_create("$anio-03-21");
$dateO=date_create("$anio-06-21");
$dateI=date_create("$anio-09-21");
$dateP=date_create("$anio-12-21");


if($dateH < $dateV )
{
    $estacion = "Verano";
}
else
{

    if($dateH< $dateO)
    {
        $estacion = "Otonio";
    }
    else
    {
        if($dateH < $dateI)
        {
            $estacion = "Invierno";            
        }
        else
        {
            if($dateH < $dateP)
            {
                $estacion = "Primavera";
            }
            else
            {
                $estacion = "Verano";
            }

        }
    }

}


print("<br> La estacion del año es:".$estacion);

?>