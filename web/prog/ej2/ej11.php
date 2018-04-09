<?php

echo "<body style='background-color:orange'>";

 function calcularcuadrado( $nmin,$nmax,$expmax)
{
   
    for($nmin;$nmin< $nmax+1;$nmin++)
    {
        for($i=1 ; $i < $expmax+1 ; $i++)
        {
            echo " $nmin elevado a $i: ".  pow($nmin,$i) . "-" ;

        }
        echo "<br>";
    }



}


calcularcuadrado(1,4,4);




   

?>
