<?php 
echo 'introduce un numero';
 fscanf(STDIN, '%d\n' ,$nveces);
 echo "el numero final es ";
fscanf(STDIN, '%d\n' ,$final );
  
for ($i=0 ;$i<$nveces ; $i++) {
	
   for ($j=0; $j <=$final-1 ; $j++) { 
		echo ' '. $j.' ';
		
	}
}
?>