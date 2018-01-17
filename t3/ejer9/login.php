<?php
session_start ();
if (isset($_SESSION['recordar'])&& $_SESSION['recordar']=='si') {
	$activo=$_SESSION['recordar'] ? $_SESSION['_activo'] :'';
	$check =$_SESSION['recordar']=='si'?'checked':'';
}
else{
	$activo='';
	$check='';
}

?>

<form action='listadeusu.php' >
login  <br>
 nombre <input type="text" name='usuario'value=<?php $activo?>></input><br><br>
password  <input type="text" name='password'></input><br><br>
recordar  <input type="checkbox" name='recordar' value='recordar' 
<?php $check?>></input><br><br>
<input type='submit' value='enviar'></input>
</form>
<a href="registrar.php"> pincha aqui para volver</a>