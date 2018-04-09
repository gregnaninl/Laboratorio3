<?php
include_once "persona.php";
include_once "iMostrable.php";


class alumno extends persona implements iMostrable
{

    private $legajo;
    private $fechaInsc;

    public function __construct( $nombre,$apellido,$dni,$dir,$leg,$fecha)
    {
        parent::__construct($nombre,$apellido,$dni,$dir);
        $this->legajo=$leg;
        $this->fechaInsc= date_create($fecha);
    }

    public function getlegajo()
    {
        return $this->legajo;
    }
    public function setlegajo($leg)
    {
        $this->legajo = $leg;
    }

    public function getfechaInsc()
    {
        return $this->fechaInsc;
    }
    public function setfechaInsc($fecha)
    {
        $this->fechaInsc = $fecha;
    }

    public function Mostrarhtml()
    {
        parent::Mostrarhtml();
        echo "<br>Legajo: ".$this->legajo."<br>Fecha :".date_format($this->fechaInsc,"Y/m/d");
    }

}


?>