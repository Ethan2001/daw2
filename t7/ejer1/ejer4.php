<?php
require_once '../rb/rb.php';
R::setup('mysql:host=localhost;dbname=cdcol', 'root', '');
 $alumno1=R::dispense('alumno');
$alumno2=R::dispense('alumno');

$alumno1->nombre='pepe';
$alumno2->nombre='ana';

$colegio1=R::dispense('colegio');
$colegio2=R::dispense('colegio');

$colegio1->nombre='Fernando';
$colegio2->nombre='Gaudi'; 

//asocio alumno y colegios desde el lado "muchos"
 $alumno1->colegio=$colegio1;
$alumno2->colegio=$colegio1; 
//array de objetos de alumno
$alumno=R::findAll('alumno');
echo "<table border 1px black>";
echo "<tr><td>nombre</td><td>colegio</td></tr>";
foreach ($alumno as $alumno){
	
	echo "<tr>";
	echo "<td>".$alumno->nombre."</td>";
	echo "<td>".$alumno->colegio->nombre."</td>";
    echo "</tr>";
    
}echo "</table>";

 R::store($alumno1);
R::store($alumno2);


 
R::close();

