<?php
//RELACION DE UNO A MUCHOS
require_once '../rb/rb.php';
R::setup('mysql:host=localhost;dbname=cdcol', 'root', '');

// estoy creando las tablas con valores dentro en este caso
//es el nombre 
 $indiana = R::dispense('pelicula');
$indiana -> nombre='Indiana Jones';
$starwars = R::dispense('pelicula');
$starwars -> nombre='Star Wars';
$et = R::dispense('pelicula');
$et -> nombre='E.T. el extraterrestre';

$lucas = R::dispense('cineasta');
$lucas -> nombre = 'George Lucas';
$kurtz = R::dispense('cineasta'); 
$kurtz -> nombre = 'Gary Kurtz';
$spielberg  = R::dispense('cineasta');
$spielberg -> nombre = 'Steven Spielberg';

// Ej. Construcción y almacenamiento desde el lado MANY TO ONE
$indiana -> director=$spielberg; 
$indiana -> productor = $lucas;
$starwars -> director=$lucas; 
$starwars -> productor = $kurtz;
$et -> director=$spielberg; 
$et ->productor = $spielberg;
// esto es la subida a la base de datos
R::storeAll( [ $indiana,$starwars, $et] );
 
$peli =R::load('pelicula', 1);
echo "<h2>".$peli->nombre."//(d)".$peli->fetchAs("cineasta")->director->nombre."//(p)".$peli->fetchAs("cineasta")->productor->nombre."</h2>";
echo "<hr>";
$cine =R::load('cineasta', 1);
echo $cine->nombre."ha dirigido :";
foreach ($cine->alias("director")->ownPeliculaList as $peli){
	echo $peli->nombre."<br/>";
}
echo "<hr>";
echo $cine->nombre."ha producido :";
foreach ($cine->alias("productor")->ownPeliculaList as $peli){
	echo $peli->nombre."<br/>";
}
echo "<hr>";


R::close();
?>