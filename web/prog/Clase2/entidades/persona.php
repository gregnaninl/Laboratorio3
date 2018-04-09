<?php
include_once "iMostrable.php";

class Persona implements iMostrable
{
    
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;

    public function __construct($nom,$ape,$num,$dir )
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->dni = $num;
        $this->direccion = $dir;

    }
     

    public function  getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nom)
    {
        $this->nombre = $nom;
    }

    public function  getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($ape)
    {
        $this->apellido = $ape;
    }

    public function getDni()
    {
        return $this->dni;
    }
    public function setDni($num)
    {
        $this->dni = $num;
    }

    public function getdireccion()
    {
        return $this->direccion;
    }
    public function setdireccion($dir)
    {
        $this->direccion = $dir;
    }
    
    public function Mostrarhtml()
    {
        
        echo "Nombre:".$this->nombre."<br>Apellido: ".$this->apellido."<br>Dni: ". $this->dni."<br>Direccion: ". $this->direccion->Mostrar();
    }




}
?>

