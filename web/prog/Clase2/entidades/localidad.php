<?php


class Localidad 
{
    private $codigoPostal;
    private $nombre;  


    public function __construct($post ,$nom )
    {
        $this->nombre = $nom;
        $this->codigoPostal = $post;
    }

    public function getcodigoPostal()
    {
        return $this->codigoPostal;
    }
    public function setcodigoPostal($post)
    {
        $this->codigoPostal = $post;
    }

    public function getnombre()
    {
        return $this->nombre;
    }
    public function setnombre($nom)
    {
        $this->nombre = $nom;
    }
    
    public function Mostrar()
    {
        $resultado=" $this->nombre  ,Codigo Postal: $this->codigoPostal";
        return $resultado;
    }



}

?>
