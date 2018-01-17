<!-- 

1. Hacer un script que la primera vez que se le llame muestre un mensaje “Hola
desconocido. A partir de ahora te recordaré”. En ese momento se generará una cadena
aleatoria (utilizando la función que se adjunta aquí, llamándola sin parámetros) y se
colocará una cookie llamada “UID” con el valor devuelto por la función. Las siguientes
veces que se conecte el usuario se mostrará un mensaje que diga. “Hola de nuevo. Te
conozco como UID = <UID>”. Observar los “response-headers” y “request-headers” en
cada consulta. Probar a borrar la cookie y rehacer la ejecución del script.

 -->

<?php

function generaCadenaAleatoria($longitud = 5) {
	$charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	$base = strlen($charset);
	$result = '';
	$now = explode(' ', microtime())[1];
	while ($now >= $base){
		$i = $now % $base;
		$result = $charset[$i] . $result;
		$now /= $base;
	}
	return substr($result, -5);
}

if(isset($_COOKIE['UID'])){
  echo "Hola de nuevo. Te conozco como UID =".$_COOKIE['UID'];
}
else {
	echo "hola desconocido,A partir de ahora de recordare";
	setcookie('UID',generaCadenaAleatoria());
}

?>