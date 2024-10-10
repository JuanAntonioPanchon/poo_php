<?php
//Tengo que hacer el include para hacer la herencia
include_once 'Producto.php';
class ProductoDigital extends Producto{
    //No necesita nada más porque al llamar a este buscará al padre. Y lo hace todo desde ahí
    public function calculaPrecioFinal(){
        return $this-> precio;
    }
}


?>