<?php 
session_start();
//echo " has creado una sesion";
$nombre =$_GET['nombre'];
$nentero=$_GET['entero'];
$n=$_GET['real'];
$texto=$_GET['texto'];
$fecha=$_GET['fecha'];
$todo;
if (isset($_GET['nombre'])){
	//$_SESSION['contador']++;
	echo "nombre ".$nombre;
	
}
else{
	echo ' no hay  usuarios';
	$_GET['nombre']=$nombre;

}
?>
<form>
 nombre<input type="text" name='nombre'></br>
entero <input type="number" name='entero'></br>
real <input type="number" name='real'></br>
texto <input type="text" name='texto'></br>
 fecha<input type="date"name='fecha'></br>
 semaforo
 <?php
 $semaforo=['r'=>'rojo', 'a'=>'amarillo','v'=>'verde'];
 
  
 ?>
 <input type="semaforo" name='semaforo'></br>
  imagen<input type="image" name='imagen'></br>
  <input type="submit" value= 'enviar'></br>
</form>