<?php
session_start();
$remitente = $_REQUEST['remitente'];
$usuario=$_SESSION['_activo'];
$psw =$_SESSION['usuarios'][$usuario]['pwd'];
$recordar=$_SESSION['recordar']=='si' ? 'recordar' :'';
echo 'Usuario actual ' . $_SESSION ['_activo'] . "<br>\n";

echo '<h1>Lista de mensajes de '.$remitente.'</h1>' . "<br>\n";

echo "<table>\n<tr><th>Fecha</th><th>Texto</th></tr>";

//cogemos los mensajes y los imprimimos

foreach ($_SESSION['usuarios'][$_SESSION ['_activo']]['mensajes'] as $mensaje){

	//fecha texto
	if( $mensaje['remitente']==$remitente){
		$fecha=$mensaje['fecha'];
		$text=$mensaje['texto'];
		echo "<tr><td>$fecha</td><td>$text</td></tr>"."\n";
	}

}
echo '</table>';
echo '<a href="listadeusu.php?usuario='.$usuario.'&password='.$psw.'&recordar='.$recordar.'">Volver a lista usuarios</a>';
?>