<?php


class direccion
{
    private $calle;
    private $altura;  
    private $localidad;
   

    public function __construct($calle , $num,$loc)
    {
        $this->calle = $calle;
        $this->altura = $num;
        $this->localidad = $loc;
               
    }


    public function getCalle()
    {
        return $this->calle;
    }
    public function setNombre($calle)
    {
        $this->calle = $calle;
    }

    public function getAltura()
    {
        return $this->altura;
    }
    public function setAltura($num)
    {
        $this->altura = $num;
        
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }
    public function setLocalidad($loc)
    {
        $this->localidad = $loc;
        
    }

    public function Mostrar()
    {
        $loc= $this->localidad->Mostrar();
        $resultado= "calle $this->calle Altura: $this->altura<br>Localidad: $loc ";
        return $resultado;
    }

}

?>