<?php

echo "<body style='background-color:orange'>";

function verificarPalabra($palabra,$max)
{
   
   if( strlen($palabra) > $max ) 
    {
     $i= 0;
    }
    else
    {
       if( strcmp($palabra,"Recuperatorio")==0 ||  strcmp($palabra,"Programacion")==0 || strcmp($palabra,"Parcial")==0   )
       {
           $i=1;
       }
       else
       {
           $i=0;
       }     
    }
    return $i;
}

echo "verificar la palabra carlos, cantidad max 15 <br> resultado: ";
 echo  verificarPalabra("carlos",15);


 
?>