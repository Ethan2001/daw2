<?php


 $cambio = array("as","dos","tres", "cuatro", "cinco","seis", "siete","sota", "caballo", "rey");			
 	

 echo "introduce un numero";
fscanf(STDIN, '%d\n' ,$n);
for ($i=0; $i<$n ; $i++) { 
echo $cambio[$i%10]." ";	
  
}

?>