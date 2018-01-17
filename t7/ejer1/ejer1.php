<?php
require_once '../rb/rb.php';
//require_once ('../beans/Cliente.php');
R::setup('mysql:host=localhost;dbname=cdcol', 'root', '');

echo "<p>conectado con cdcol</p>";
//$cliente=new Cliente('alberto','paseo');
$cliente=R::dispense('cliente');

echo '<p>cliente creado</p>';
$cliente->nombre='ana';
$cliente->direccion='paseo';
echo "<p>nombre ".$cliente->nombre."</p>";
echo "<p>direccion ".$cliente->direccion."</p>";
//-------
// se utiliza para la insercion de datos en una base de datos
//$cliente['nombre']="ramon";

//para guardar lo introducido
R::store($cliente);
R::close();
echo "adios";
?>