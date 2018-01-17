<?php
session_start();

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
$valor = $_REQUEST['p'];
//echo $valor;
$datos=$_SESSION ['productos'];
if ($valor=='preparar') {
	preparar();
}
else {
	insertar($datos);
}
function preparar(){
	$bd = conectarMySql();
	$nombre=isset($_REQUEST['nombre'])? $_REQUEST['nombre'] : null;
	$precio=isset($_REQUEST['precio'])? $_REQUEST['precio'] : null;
	// si no esta la sesion productos creada creo un array
	$array=isset($_SESSION['productos'])? $_SESSION['productos'] :[];
	// estoy escribiendo en el array
	 $array[]=[$nombre,$precio];
	 // introduzco en la sesion prpductos los datos que cojo en $array
	 $_SESSION['productos']=$array;
	 //mostrarPreparadas($_SESSION['productos']);
	//var_dump($array);

}
function mostrarPreparadas($datos) {
	$datos=$_SESSION ['productos'];
	echo '<h4>Preparadas para ser insertadas</h4>';
	echo '<table border="1">', PHP_EOL;
	echo <<<ENCABEZADO
	<tr>
	<th>Nombre</th>
	<th>Precio</th>
	</tr>

ENCABEZADO;
	foreach ( $datos as $fila ) {
		echo '<tr>';
		echo '<td>',$fila [0], '</td>';
		echo '<td>', $fila [1], '</td>';
		echo '</tr>', PHP_EOL;
	}
	echo "</table>", PHP_EOL;
}

function insertar($datos) {
	$bd =conectarMySql('cdcol');
	
 $datos=$_SESSION['productos'];
 
 $consulta = <<<SQL
insert into PRODUCTOS(nombre,precio)
values (:name,:price)
SQL;
 //para ver si cogia todo los valores del array session
 //var_dump($datos);
 $resultado = $bd->prepare ( $consulta );
	foreach ( $datos as $producto ) {
		$nombre = $producto [0];
		$precio = $producto [1];
		$resultado->bindParam ( ':name', $nombre );
		$resultado->bindParam ( ':price', $precio );
		try {
			$resultado->execute ();
		} catch ( PDOException $e ) {
			echo "<h4>ERROR al INSERTAR</h4> <p>$e</p>";
		}
	}
}
function mostrar(){
	$db =conectarMySql();
	$consulta ="select * from productos";
	$sentencia=$db->prepare($consulta);
	$sentencia->execute();
	$resultado=$sentencia->fetchAll();
	echo "<table>";
	echo "<tr><td>nombre</td><td>precio</td>";
	foreach ($resultado as $k){
		echo "<tr><td>".$k['nombre']."</td>","<td> ".$k['precio']."</td>";
	};
	echo "</table>";

}
?>
<html>
<head><title>ejer3</title></head>
<body>

<form action="">
 nombre<input type="text" name="nombre"><br>
 precio <input type="text" name="precio"><br>
<input type="submit" value="preparar" name='p'  >
<input type="submit" value="insertar" name='p' >
<?php 
mostrar();
mostrarPreparadas($_SESSION['productos'])?>
</form>
</body>
</html>

