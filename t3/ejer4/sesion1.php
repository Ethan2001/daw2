<?php
session_start();
echo " has creado una sesion";
if (isset($_SESSION['nombre'])){
   echo "hola".$_SESSION['nombre']."";
}
   else{
   	echo ' no hay nombre';
   	$_SESSION['nombre']='pepe';
   	
   	
   }
?>