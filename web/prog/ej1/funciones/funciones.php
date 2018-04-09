<?php


function sumar($numero1 , $numero2)
{
	return $numero1 + $numero2;
}

function valorMedio($a,$b,$c)
{
    
    $valor;
    
    if($a == $b && $a == $c)
{
    $valor= "Los Valores son Iguales : $a ";
    
}
elseif($a==$b ||$b==$c || $c==$a )
    {
    $valor="no hay valor medio";        
    }
    else
    {   
        if($a>$b)
        {
            if($a>$c)
            {
                $valor= "valor medio 3: $c";
            }
            else
            {
                $valor= "valor medio 1: $a ";
            }
        }
        else
        {
            if($b>$c)
            {
                $valor="valor medio 3: $c";
            }
            else
            {
                $valor ="valor medio 2: $b ";
            }

        }

    }   

    return $valor;
}


function Calculadora($operador,$op1,$op2)
{
    $valor;

switch ($operador)
{
case '+':
$valor = $op1+$op2;
break;
case '-':
$valor = $op1-$op2;
break;
case '/':
$valor = $op1/$op2;
break;
case '*':
$valor = $op1*$op2;
break; 
default:
 $valor = "El operator es incorrecto";
}

return $valor;

}


?>