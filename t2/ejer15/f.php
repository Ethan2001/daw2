<?php

$contraseņa=$_POST['p'];
$nombre=$_POST['nombre'];

if($nombre ==' '){
	echo "esta vacia";
}
else{
	echo  'hola '.$nombre;
}

if (strlen($contraseņa)>=6 || strlen($contraseņa)>=12) {
	echo ' tu contraseņa es '.$contraseņa;
	
}
else{
	echo "es menor";
}


?>