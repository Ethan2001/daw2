<?php
session_start();
//echo " has creado una sesion";
if (isset($_SESSION['contador'])){
	//$_SESSION['contador']++;
	echo "numero de visitas".$_SESSION['contador']."";
	$_SESSION['contador']++;
}
else{
	echo ' no hay  visitas';
	$_SESSION['contador']='0';
	

ini_set(session.use_trans_sid, 1);
ini_set(session.use_cookie, 0);
ini_set(session.use_only_cookies, 0);
}


?>