<?php
// relacion de mucho a muchos
/* PERSONAS(AFICIONES
 * DAVID-->ADORA (BALONCESTO Y CORRER) DISGUSTA(PÁDEL)
 * LORENA--> DISGUSTA(PADEL, BALONCESTO,CORRER)
 * Y LISTAR LO QUE LE GUSTA  Y NO A DAVID Y LORENA
 * Y AQUIEN LE GUSTA  Y NO  EN LAS AFICIONES
 */
require_once '../rb/rb.php';
R::setup('mysql:host=localhost;dbname=cdcol', 'root', '');
/*  $david = R::dispense('personas');
$david -> nombre='David';

$Lorena = R::dispense('personas');
$Lorena -> nombre='Lorena';

$padel = R::dispense('aficiones');
$padel -> nombre='padel';

$balon = R::dispense('aficiones');
$balon -> nombre='baloncesto';

$correr = R::dispense('aficiones');
$correr -> nombre='correr';

$d_c=R::dispense('adora');$d_c->personas=$david;$d_c->aficiones=$correr;
$d_b=R::dispense('adora');$d_b->personas=$david;$d_b->aficiones=$balon;
$d_p=R::dispense('aborrece');$d_p->personas=$david;$d_p->aficiones=$padel;

$l_c=R::dispense('aborrece');$l_c->personas=$Lorena;$l_c->aficiones=$correr;
$l_b=R::dispense('aborrece');$l_b->personas=$Lorena;$l_b->aficiones=$balon;
$l_p=R::dispense('aborrece');$l_p->personas=$Lorena;$l_p->aficiones=$padel;
R::storeAll( [$d_c, $d_b, $d_p, $l_c, $l_b, $l_p] ); */ 
 
echo "lista de aficiones de personas </br>";
$personas =R::findAll('personas');
foreach ($personas as $p){
echo $p->nombre ."</br>";
echo"ama </br>";
foreach ($p->aggr("ownAdoraList","aficiones") as $a){
	echo "<h3>".$a->nombre."</h3>";
}
echo"odia </br>";
foreach ($p->aggr("ownAborreceList","aficiones") as $a){
	echo "<h3>".$a->nombre."</h3>";
}
}

R::close();
?>