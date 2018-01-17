<?php
require_once '../rb/rb.php';
R::setup('mysql:host=localhost;dbname=cdcol', 'root', '');
//$aviones=R::dispense('avion',4);
/* $aviones[0]->velocidad=100;
$aviones[1]->velocidad=200;
$aviones[2]->velocidad=300;
$aviones[3]->velocidad=400;
 R::storeAll($aviones); */
$aviones=R::find('avion','velocidad=300');
/* //saco el elemento que esto buscando por pantalla
echo current($aviones)->velocidad; */
current($aviones)->velocidad=666;
//R::store($aviones);
R::store(current($aviones));
 R::close();