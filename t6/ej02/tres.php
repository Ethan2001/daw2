<?php
$nombre=isset($_GET['nombre'])? $_GET['nombre'] : null;
$precio=isset($_GET['precio'])? $_GET['precio'] : null;

 echo $nombre ." " . $precio;
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
	$resultado->execute( [':name' => $nombre,':price'=> $precio]);
	
	//print ('esta bien');
} catch (PDOException $e) {
	print ('dio error');
}
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
?>