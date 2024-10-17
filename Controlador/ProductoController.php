<?php

class ProductoController{

    //private $Servicio;

    public function __construct(){
        //Aquí creamos la construccion al objeto del Servicio
        
    }

    public function listarProductos(){
        // Usar el atributo servicio y traerse los datos de la BBDD para mostrarlo en la lista
    }

    public function ejecuta(){
        $productos = $this->listarProductos();
        //Cargar la vista y guarda los productos
        require_once("Vista/Main.php");
    }




}




?>