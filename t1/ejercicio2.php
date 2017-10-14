<?php  
echo 'introduce un numero';
 fscanf(STDIN, '%d\n' ,$numero);
$caracter = '+';
 for ($i=$numero ;$i>0 ; $i--) {
	for ($j=0; $j < $i ; $j++) { 
		echo $caracter;

		if ($caracter == '+') {
			$caracter = '_';
		}elseif ($caracter == '_') {
			$caracter = '.';
		}else
			$caracter = '+';
	}
	echo "\n";
}


?>