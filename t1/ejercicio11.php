<?php
 $c = <<<TEXTO
 Adriana:Lara:67412542//Adriana:Lara:67412542 
TEXTO;
 echo $c;
 $d = explode('//',$c);
 print_r($d);
 for ($i=0; $i <sizeof($d) ; $i++) { 
  $p = explode(':',$d[$i]);
  echo "nombre :".$p[0]."\n ";
  echo "apellido:".$p[1]."\n ";
  echo "telefono:".$p[2]."\n ";
    echo "//////\n";}
 
 ?>