<?php
//Tengo que hacer el include para hacer la herencia
include_once 'Producto.php';
class ProductoFisico extends Producto{
    private $peso;

    public function __construct($nombre, $precio, $peso){
        //Con esta linea llamo al constructor del padre es como el super. aquí es parent:: y el método.
        parent::__construct($nombre, $precio);
        $this->peso = $peso;
    }

    public function calculaPrecioFinal(){
        return $this-> precio * ($this->peso * 0.1);
    }
}


?>