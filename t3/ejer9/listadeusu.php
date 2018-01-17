<?php
session_start();
//el usuario es incorrecto pero no lo muestro
if (!isset($_SESSION['usuarios'][$_REQUEST['usuario']] )) {
	 echo 'el usuario o contraseña son erroneos';
}else{
	//la contraseña es incorrecta pero no lo muestro
	if ($_SESSION['usuarios'][$_REQUEST['usuario']]['pwd'] != $_REQUEST['password']){
			echo 'el usuario o contraseña son erroneos';
	}
	else{
		//el usuario a hecho login correctamente
		 //echo "hola usuario actual ".$_REQUEST['usuario'];
	 if(isset($_REQUEST['recordar'])){
	 	$_SESSION['recordar']=$_REQUEST['recordar']
	 	=='recordar' ? 'si' : 'no';
	 }
	 else if (! isset($_REQUEST['recordar'])){
	 	if (!isset($_SESSION['_activo'])  || $_SESSION['_activo'] != $_REQUEST['usuario']) {
	 		$_SESSION['recordar']='no';
	 	}
	 	elseif ($_SESSION['_activo']==$_REQUEST['usuario']){
	 		$_SESSION['recordar']='no';
	 	}elseif ($_SESSION ['_activo'] == $_REQUEST ['usuario']) {
			}
	 	
	      }
	      //cololo en el activo el nombre de ususario conectado
	   $_SESSION['_activo']=$_REQUEST['usuario'];
	  
	     
	      if(isset($_REQUEST['mensaje'])&& isset($_REQUEST['fecha'] )){
	      	// creamos el array mensaje que contiene todo estos valores
	      	$sms =[
	      		'remitente' => $_SESSION['_activo'],
	      	     'fecha' => $_REQUEST['fecha'],
	      		'texto' => $_REQUEST['mensaje']	
	      			
	      	];
	      	//para subir todo el contenido nuevo al array $sms
	      	array_push ($_SESSION['usuarios'][$_REQUEST['destinatario']]['mensajes'],$sms);
	      	
	      	
	      }
	      echo 'el usuario activo es  '.$_SESSION['_activo'];
	      echo '<table>';
	      echo "<tr><td>listado de usuarios</td><td>leer/ escribir</td></tr>";		
	      foreach ($_SESSION['usuarios'] as $nombre=>$cont){
	      	//digo que en la variable nombre contiene el nombre del usuario activo
	      	if ($nombre==$_SESSION['_activo']) {
	      		// no me muestro  a mi  mismo en los usuarios para enviar un mensaje
	      		continue;
	      		
	      	}
	      	else{
	      		$numMen=0;
	      		if(isset($_SESSION['usuarios'][$_SESSION['_activo']] ['mensajes'] )){
	      			//recorro los usuarios y muestro los mensajes y si tiene alguno sumo uno
	      	foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] as $mensaje){
	      		if ($mensaje['remitente']==$nombre) {
	      			$numMen+=1;
	      		 }
	      	  }
	      			
	      }
	      // aqui indico que si no hay mensajes no muestro el enlace de leer
	      $leer=$numMen==0 ? '': '<a href="leer.php?remitente='.$nombre.'">leer</a>';
	      //aqui le envio en nombre de destinatario como en el metodo get
	      $escribir ='<a href="escribir.php?destinatario='.$nombre.'"> escribir</a>';
	       // muestro el nombre del usuario y el numero de mensajes que tiene
	      echo "<tr><td>$nombre ($numMen)</td><td>$leer</td><td>$escribir</td></tr>";
	      	}
	      }
	      echo '</table>';
	      echo '<a href="login.php">Volver a login</a>';
   
		 
	}
	
	
}




?>
