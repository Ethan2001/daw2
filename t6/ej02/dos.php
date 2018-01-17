<!-- 2. Mejorar el programa anterior introduciendo una interfaz sencilla (formulario) para  insertar cada fila de datos. 
Debajo del formulario se mostrarán las filas ya insertadas en la Base de datos. -->
<?php

/* $db =conectarMySql();
$consulta ="select * from productos";
$sentencia=$db->prepare($consulta);
$sentencia->execute();
$resultado=$sentencia->fetchAll();
echo "<table>";
echo "<tr><td>nombre</td><td>precio</td><br>";
foreach ($resultado as $k){
 echo "<tr><td>".$k['nombre']."</td>","<td> ".$k['precio']."</td>".'<br>';
};
echo "</table>";	 */
?>
<html>
<head><title>ejer2</title></head>
<body>
<form action="tres.php"  method="get">
 nombre<input type="text" name="nombre"><br>
 precio <input type="text" name="precio">
 <input type="submit" value="enviar">
</form>
</body>
</html>