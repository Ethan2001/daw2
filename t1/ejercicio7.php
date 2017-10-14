<?php 
echo "introduce linea de texto : ";
fscanf(STDIN,"%s\n",$frase);
echo "introduce n :";
fscanf(STDIN,"%d\n",$nu);
	for ($j=1; $j<=$nu ; $j++) { 
      echo "<h$j>"."$frase"."<h$j>"."\n";	
	};
		for ($i=$nu-1; $i>=1 ; $i--) { 
			echo "<h$i>"."$frase"."<h$i>"."\n";	
		};	
	
 ?>