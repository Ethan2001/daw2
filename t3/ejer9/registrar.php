<?php
session_start();
//compruebo si el usuario existe
if(isset($_REQUEST['usuario'])){
      if(isset($_SESSION['usuarios'] [$_REQUEST['usuario']])){
   	      echo '<h3> ya existe el usuario</h3>';
   }
   // compruebbo si  ha  contraseña esta vacia
   else if(empty($_REQUEST['password'])){
   	echo '<h3>  no tiene contraseña</h3>';
   }
	else{
		 $usu=isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : null;
		 $pss=isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
		 $_REQUEST ['usuario']=$_REQUEST ['usuario'];
		 // creo el array usuarios que tiene el nombre y los mensajes
		 $_SESSION['usuarios'][$usu]=['pwd'=>$pss,'mensajes'=>[]];
		 echo 'se ha creado un usuario';
	}
}

?>
<h1>nuevo usuario</h1>
<form  action=''>
<h3>nombre</h3><input type="text" name='usuario'/>
<h4>password</h4><input type="text" name='password'/><br>
<input type='submit' value='enviar'/>
</form>
<a href="login.php">Volver</a>