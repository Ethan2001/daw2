<?php 
echo 'introduce un numero';
 fscanf(STDIN, '%d\n' ,$numero);
 echo 'el numero  '.$numero;
 $max=$numero;
$min=$numero;
 while  ($numero != 0){
 	fscanf(STDIN, '%d\n' ,$numero);
 	if ($numero!=0 && $numero > $max){
 		$max =$numero;
 	}if ($numero!=0 && $numero < $min){
 		$min =$numero;
 	}
 }
 echo " Maxima " .$max;
 echo " Minimo " .$min;
 ?>