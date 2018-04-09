<?php
include_once "FiguraGeometrica.php";


class Triangulo extends FiguraGeometrica 
{

    public $altura;
    public $base;

    public function CalcularDatos()
    {
        $this->superficie = ($this->altura * $this->base)/2;
        $this->perimetro = $this->base *3;
    }


    public function __construct(  $b, $h)
    {
        $this->altura = $h;
        $this->base = $b;
        $this->CalcularDatos(); 
    } 

    
    public function Dibujar()
    {
        $cadena = null;
	    for ($i = 1; $i <= $this->altura; $i++) {
		for ($h = $i; $h <= $i; $h++) {
			$cadena .= "*";
		}
		echo $cadena."<br />";
	}
    }





    
}




?>