<?php

$contraseña=$_POST['p'];
$nombre=$_POST['nombre'];

if($nombre ==' '){
	echo "esta vacia";
}
else{
	echo  'hola '.$nombre;
}

if (strlen($contraseña)>=6 || strlen($contraseña)>=12) {
	echo ' tu contraseña es '.$contraseña;
	
}
else{
	echo "es menor";
}


?>