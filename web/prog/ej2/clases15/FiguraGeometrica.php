<?php


abstract class FiguraGeometrica
{


    protected  $color;
    protected  $perimetro;
    protected  $superficie;

    public function __construct( )
    {
        
    }

   
    public function getColor()
    {
        return $this->color;
    }

    public function setColor( $col)
    {
        $this->color = $col;
    }

    


    public function toString()
    {
        $datos = "color: ".$this->color."<br>perimetro: ".$this->perimetro."<br>superficie: ".$this->superficie."<br>";
        return $datos;
    } 
    
    abstract protected function CalcularDatos();
    
    abstract public  function Dibujar();


}



?>