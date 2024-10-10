<?php

class Cliente{
    private $nombre;

    public function __construct($nombre){
        //para llamar en java era this. aqui en php es this ->
        $this->nombre= $nombre;

    }

    public function getNombre(){
        return $this->nombre;
    }
        
}

?>