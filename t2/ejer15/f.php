<?php

$contrase�a=$_POST['p'];
$nombre=$_POST['nombre'];

if($nombre ==' '){
	echo "esta vacia";
}
else{
	echo  'hola '.$nombre;
}

if (strlen($contrase�a)>=6 || strlen($contrase�a)>=12) {
	echo ' tu contrase�a es '.$contrase�a;
	
}
else{
	echo "es menor";
}


?>