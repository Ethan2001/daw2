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
				
};

function insertar() {
	$nombre=isset($_REQUEST['nombre'])? $_REQUEST['nombre'] : null;
	$precio=isset($_REQUEST['precio'])? $_REQUEST['precio'] : null;
	echo $nombre ." " . $precio;
	 
	try {
		$db =conectarMySql();
		$consulta ="insert into productos(nombre,precio) values (:name,:price)";
		$resultado=$db->prepare($consulta);
		$resultado->execute( [':name' => $nombre,':price'=> $precio]);

		//print ('esta bien');
	} catch (PDOException $e) {
		print ('dio error');
	}
	
function mostrar(){	
	$db =conectarMySql();
	$consulta ="select * from productos";
	$sentencia=$db->prepare($consulta);
	$sentencia->execute();
	$resultado=$sentencia->fetchAll();
	echo "<table>";
	echo "<tr><td>nombre</td><td>precio</td><br>";
	foreach ($resultado as $k){
		echo "<tr><td>".$k['nombre']."</td>","<td> ".$k['precio']."</td>".'<br>';
	};
	echo "</table>";

}}
conectarMySql();
insertar();
mostrar();
?>

