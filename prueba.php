<?php
//Para importar el archivo se usa esta linea de codigo
require_once 'Cliente.php';
require_once 'ProductoFisico.php';
//Prueba de cliente
$c1 = new Cliente("Juan Antonio");
$c2 = new Cliente ("Maite Lopez");


//Prueba de Producto
$productoFisico = new ProductoFisico("Telefono", 1000, 0.5);
echo "Nombre: " . $productoFisico->getNombre() . ", Precio " . $productoFisico->getPrecio() . " Precio Final: " . $productoFisico->calculaPrecioFinal();

?>

<!-- Esto sirve para que  te muestre una lista con los dos nombres para acceder al php pones el inicio de script php pero con el = accedes solo al valor que quieras-->
<ol>
    <li> <?= $c1->getNombre() ?> </li>
    <li> <?= $c2->getNombre() ?> </li>
</ol>