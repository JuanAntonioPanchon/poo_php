<?php

class Cliente{
    private $nombre;
    //Como está privado el nombre para acceder luego tenemos que acceder con el this->
    public function __construct($nombre){
        //para llamar en java era this. aqui en php es this ->
        $this->nombre= $nombre;

    }

    public function getNombre(){
        return $this->nombre;
    }
        
}

?>