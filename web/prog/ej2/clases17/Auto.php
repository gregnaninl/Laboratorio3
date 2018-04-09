<?php

class Auto
{

private $color;
private $precio;
private $marca;
private $fecha;


public function __construct($_marca, $_color )
{
    $this->marca = $_marca;
    $this->color = $_color;
}

public function __construct1($_marca, $_color, $_precio )
{
    $this->marca = $_marca;
    $this->color = $_color;
    $this->precio= $_precio;
}

public function __construct2($_marca, $_color, $_precio, $_fecha )
{
    $this->marca = $_marca;
    $this->color = $_color;
    $this->precio= $_precio;
    $this->fecha = $_fecha;
}

#region getter

public function getColor()
{
    return $this->color;
}

public function setColor( $_color)
{
    $this->color = $_color;
} 


public function getPrecio()
{
    if($this->precio!=null)
    {
        return $this->precio;
    }
    
}

public function setPrecio($_precio)
{
    
    $this->precio= $_precio;
}

public function getMarca()
{
    return $this->marca;
}

public function setMarca($_marca)
{
    $this->marca = $_marca;
}

public function getFecha()
{
    if($this->fecha!=null)
    {
        return $this->fecha->format('Y-m-d');
    }
    
}

public function setFecha($_fecha)
{
    $this->fecha = $_fecha;
}

#endregion


public function AgregarImpuestos($_impuesto)
{
    $this->precio +=$_impuesto;
}

public function MostrarAuto($auto)
{
    echo "Color: ".$auto->getColor()."<br>Precio: ".$auto->getPrecio()."<br>Marca: ".$auto->getMarca()."<br>Fecha: ".$auto->getFecha();

}

public function Equals($a1 , $a2)
{
    $x= false;

    if(strnatcasecmp ( $a1->getMarca() , $a2->getMarca()) == 0 )
    {
        $x=true;
    }

    return $x;
}

public function Add ($a1 , $a2)
{
    $importe=0;
    
    if( $this->Equals($a1,$a2) == true && strnatcasecmp ( $a1->getColor() , $a2->getColor()) == 0   )
    {
        $importe = $a1->getPrecio() + $a2->getPrecio();
    }
    else
    {
        echo "<br>Estos autos no se pueden sumar!!!<br>";
    }   

    return $importe;
}



}



?>