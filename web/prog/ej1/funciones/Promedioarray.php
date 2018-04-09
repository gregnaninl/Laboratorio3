<?php

function Promedioarray($array)
{
    $arrayValor= array(); 
    $cant=sizeof($array);
    $suma=0;
    $promedio;
    for($i=0 ; $i <$cant ;$i++)
    {
        $suma+=   $array[$i];
    }

    $promedio = $suma / $cant;
    if($promedio>6)
    {
        $arrayValor["resultado"]= "Es mayor que 6";
    }
    else
    {
        if($promedio <6)
        {
            $arrayValor["resultado"]= "Es menor que 6"; 
        }
        else
        {
            $arrayValor["resultado"]= "Es igual que 6";  
        }
    }

    $arrayValor["promedio"]=$promedio;
    $arrayValor["suma"]= $suma;
    return $arrayValor;

}



?>