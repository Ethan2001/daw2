<?php
require_once '../rb/rb.php';
R::setup('mysql:host=localhost;dbname=cdcol', 'root', '');

$rey=R::load("colegio", 1);

$x =R::dispense("alumno");
$x->nombre="manolo";

$rey->ownAlumnoList[]=$x;

R::close();
?>