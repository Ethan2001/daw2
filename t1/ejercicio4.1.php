<?php 
echo 'introduce un numero';
fscanf(STDIN, '%d\n' ,$numero);

while($numero !=0){
 	echo 'introduce un numero';
 	
 fscanf(STDIN, '%d\n' ,$numero);

$primero = array( &$numero );
echo "\n";
for ($i=0; $i <10 ; $i++) { 
	print_r($primero);
}
print_r($primero);
}


 ?>
