<?php 
 function siguiente($caracter){
 	
 	switch ($caracter) {
 		case '+':
 			$sol= "-";
 			break;
 		case '-':
 			$sol= ".";
 			break;
 		case '.':
 		$sol="+";
 			break;
 	}
  return	$sol;
 }
echo 'introduce in numero :';
fscanf (STDIN, "%d\n",$numero);
$caracter= '+';

for ($i=$numero; $i>=1 ; $i--) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo $caracter;
		$caracter = siguiente($caracter);

	}
	echo "\n";
}

  ?>