<?php
echo "introduce n :";
fscanf(STDIN,"%d\n",$nu);
echo"formato ;";
fscanf(STDIN,"%s\n",$fnombre);
 $cambios= [
 			"romano" => ["i","ii","iii","iv","v","vi","vii" ,"viii","ix","x"],
          	"nombre" => ["uno","dos" ,"tres","cuatro","cinco","seis","siete" ,"ocho","nueve","diez"]
         ];
 
 for ($i=0; $i <$nu ; $i++) { 
 echo $cambios[$fnombre][$i%10]." ";
 }
 
 ?>