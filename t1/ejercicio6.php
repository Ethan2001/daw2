<?php 
echo "  dime un nombre :";
fscanf(STDIN,"%s\n",$nombre);

while ($nombre != "fin"){
echo (" dime  edad :");
fscanf(STDIN,"%d\n",$edad);
$tnombre [$nombre]=$edad ;
echo "  dime un nombre :";
fscanf(STDIN,"%s\n",$nombre);
 }

foreach ($tnombre as $nombre => $edad) {
echo $nombre."(".$edad.")". "\n";
}

echo "\n";
 echo "ordenar el array por medio de la clave";
 
echo "\n";
 ksort($tnombre);
foreach ($tnombre as $nombre => $edad) {
echo $nombre."(".$edad.")". "\n";
}
echo "\n";
 echo "ordenar el array por medio de la edad";
 
echo "\n";
 asort($tnombre);
foreach ($tnombre as $nombre => $edad) {
echo $nombre."(".$edad.")". "\n";
}

 ?>