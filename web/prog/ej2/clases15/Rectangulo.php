<?php
include_once "FiguraGeometrica.php";


class Rectangulo extends FiguraGeometrica
{


    public $ladoUno;
    public $ladoDos;

    public function CalcularDatos()
    {
        $this->superficie = $this->ladoUno * $this->ladoDos;
        $this->perimetro = $this->ladoDos*2 + $this->ladoUno *2;
    }


    public function __construct( $l1,$l2 )
    {
        $this->ladoUno = $l1;
        $this->ladoDos = $l2;
        $this->CalcularDatos();

    }

    
    public function Dibujar()
    {
        for($i=0; $i<$this->ladoDos ; $i++ )
        {

            for($x=0 ; $x<$this->ladoUno ; $x ++)
            {
                echo "*";
            }
            echo "<br>";
        }
    }

    
    
}




?>