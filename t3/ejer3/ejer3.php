<!DOCTYPE html>
<html>
<head>
<title>formulario ejercicio3 cookie</title>
</head>
<body>
<h3>Listado de cookies por nivel </h3>
nivel 0 -->listado de cookies <a href="ver.php"> nivel 0</a>
nivel 0 -->nivel 1  <a href="nivel1/ver.php"> nivel0 1</a>
nivel 0 --> nivel 1 -->nivel 2 <a href="nivel1/nivel2/ver.php">  vel las cookies</a>

<h5> creacion de cookies en diferentes niveles(directorios) por un scritp
ubicado en / . Se permire fijar nombre y contenido de la cookie, asi como el nivel</h5>
<label>creacion de cookies
<form action = 'crear.php' method= 'GET'>
 nombre <input type="text" name='nombre' >
 contenido <input type="text" name='contenido' ></br>
 nivel <select name="nivel">
  <option value='0'>0</option>
 <option value='1' selected="selected">1</option>
 <option value ='2'>2</option>
 </select>
 <input type="submit" value='crear cookie'>
</form>
</label>
</body>
</html>

