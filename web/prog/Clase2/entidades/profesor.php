<?php
include_once "persona.php";
include_once "iMostrable.php";


class profesor extends persona implements iMostrable
{

    private $materias;
    private $dias;

    public function __construct( $nombre,$apellido,$dni,$dir,$mat,$dia)
    {
        parent::__construct($nombre,$apellido,$dni,$dir);
        $this->materias= array($mat);
        $this->dias= array($dia);
    }

    public function getmaterias()
    {   
        $retorno1=" ";
        foreach( $this->materias as $aux )
        {
            $retorno1 .= $aux." ";
        }

        return $retorno1;
    }
    public function setmaterias($mat)
    {
        $this->materias[] = $mat;
    }

    public function getdias()
    {   
        $retorno= " ";
        foreach($this->dias as $aux)
        {
            $retorno .=$aux." ";
        }
        
        return $retorno;
    }
    public function setdias($dia)
    {
        $this->dias[] = $dia;
    }

    public function Mostrarhtml()
    {
        parent::Mostrarhtml();
        echo "<br>Materia: ". $this->getmaterias()."<br>Día :".$this->getdias();
    }



}



?>