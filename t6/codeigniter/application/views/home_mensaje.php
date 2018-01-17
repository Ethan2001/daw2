<html>
<head>
<title>hola
</title></head>
<body>
<div align="center">
 <!-- por medio de las etiquetas llamo a lo que necesite
  de php y recorro el array y lo muestro por pantallas
  -->
  <table border="1 px solid black">
<tr><td>nombre</td><td>apellido</td></tr>

<?php 
foreach ($consulta->result()  as $fila) {
  echo "<tr><td>". $fila->nombre."</td><td>". $fila->apellido."</td></tr>";
} ?>
</table>
</div>
</body>

</html>