<?php

echo "<body style='background-color:orange'>";

function esPar($num)
{
    if ($num%2==0){
        $x = "true";
    }
    else
    {
        $x = "false";
    }
return $x;
}

function esImpar($num)
{
    if ($num%2!=0){
        $x = "true";
    }
    else
    {
        $x = "false";
    }
return $x;
}


echo esPar(2)." 2  espar";
echo "<br>";
echo esImpar(1)."  1 esimpar";

?>
