<?php
// conociendo el id 
require_once '../rb/rb.php';
//require_once ('../beans/Cliente.php');
R::setup('mysql:host=localhost;dbname=cdcol', 'root', '');
 
/* $cliente=R::load('cliente', 1); 
 * echo "<p>".$cliente->id."</p>";
 echo "<p>".$cliente->nombre."</p>";
 echo "<p>".$cliente->direccion."</p>";
 //para cambiar el nombre o algun atributo 
 $cliente->nombre="pepe";
 R::store($cliente); */
 /*para borrar alguno de sus valores
 R::trash($cliente);*/
/* para que me liste toda la informacion que esta en la tabla
 $cliente=R::findAll('cliente');
 foreach ($cliente as $cliente){
 	echo "<p>{$cliente->id} // {$cliente->nombre} // {$cliente->direccion} </p>";
 }*/

//busco unos valores específicos  por medio de like 
$cliente =R::find('cliente','nombre like :patronNombre and direccion like :patrondir',[':patronNombre'=>'a%',':patrondir' => '%a%']);
foreach ($cliente as $cliente){
	echo "<p>{$cliente->id} // {$cliente->nombre} // {$cliente->direccion} </p>";
}
 R::close();

?>