<?php

echo "<body style='background-color:orange'>";


$cont=0;
$suma=0;

echo "<br><br>Los numeros sumados son:<br>";
for ($i = 1; $suma < 1000; $i++)
     {        
        $suma = $suma+ $i;
        $cont++;
       
        echo "-".$i;       
        
    }

    
    echo "<br><br>Se sumarion :".$cont."numeros";
   
   

?>
