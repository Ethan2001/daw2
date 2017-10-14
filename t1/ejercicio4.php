<?php
echo 'Introduce un numero (0 para salir): ';
fscanf(STDIN,"%d\n",$numero);
$suma = 0;
$multiplicacion = 1;
while($numero != 0){
	$suma+= $numero;
	$multiplicacion*= $numero;
	echo 'Introduce un numero (0 para salir): ';
	fscanf(STDIN,"%d\n",$numero);
}

echo 'Escribe sumar o multiplicar: ';
fscanf(STDIN,"%s\n",$operacion);
switch ($operacion){
	case 'sumar': echo "La operacion es $suma";break;
	case 'multiplicar': echo "La multiplicacion es $multiplicacion";break;
	default : "Operacion incorrecta";
}