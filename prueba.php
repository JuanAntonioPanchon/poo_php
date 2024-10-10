<?php
//Para importar el archivo se usa esta linea de codigo
require_once 'Cliente.php';

$c1 = new Cliente("Juan Antonio");
$c2 = new Cliente ("Maite Lopez");


?>

<!-- Esto sirve para que  te muestre una lista con los dos nombres para acceder al php pones el inicio de script php pero con el = accedes solo al valor que quieras-->
<ol>
    <li> <?= $c1->getNombre() ?> </li>
    <li> <?= $c2->getNombre() ?> </li>
</ol>