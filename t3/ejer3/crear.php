<?php
$nombre="";
$contenido="";
$nivel="";
// $n=array($nombre=>$contenido);
if(isset($_GET['nombre'])){
	$nombre=($_GET['nombre']);
	//echo $nombre;
}
if(isset($_GET['contenido'])){
	$contenido=($_GET['contenido']);
	//echo $contenido;
}
if(isset($_GET['nivel'])){
	$nivel=($_GET['nivel']);
	//echo $nivel;
	;
}
if ($nombre!="" && $contenido!="" && $nivel!=""){
	$ruta;
	$rutacompleta = pathinfo($_SERVER ['REQUEST_URI'])['dirname'];
	if($nivel==0){
		$ruta="/";
	}
	else if ($nivel==1){
		$ruta=$rutacompleta."/nivel1/";
		
	}
	else if ($nivel==2){
		$ruta=$rutacompleta."/nivel1/nivel2";
		
	}
	setcookie($nombre,$contenido,0,$ruta);
}
else {
	echo "algun campo está vacio";
}

//echo $rutacompleta;
?>
<a href="ejer3.php"> pincha aqui para volvel</a>