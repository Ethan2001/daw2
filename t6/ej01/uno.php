<?php
 function conectarMySql($schema='cdcol',$usu='root',
 		 $pwd='', $host='localhost'){
 	try {
 		$dsn="mysql:host=$host;dbname=$schema";
 		$db= new PDO($dsn,$usu,$pwd);
 		return $db;
 	} catch (PDOException $e) {
 		print ('error de conexion');
 		die();
 	}
 }
 
 try {
 	$db =conectarMySql();
 	$consulta ="insert into productos(nombre,precio) values (:name,:price)";
 	$resultado=$db->prepare($consulta);
 	$resultado->execute( [':name' => 'cocacola',':price'=> 1.2]);
 	$resultado->execute( [':name' => 'mejillones',':price'=> 3.23]);
 	$resultado->execute( [':name' => 'abrelatas',':price'=> 4.34]);
 	print ('esta bien');
 } catch (PDOException $e) {
 	print ('dio error');
 }
 
?>