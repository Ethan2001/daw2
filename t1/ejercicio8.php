
<?php
echo "dime un dia";
fscanf(STDIN, '%d\n' ,$d);
echo "dime un mes";
fscanf(STDIN, '%d\n' ,$m);
echo "dime un anyo";
fscanf(STDIN, '%d\n' ,$a);

$fdate = strtotime($d."-".$m."-".$a);
$fs=time()-$fdate;
const sanyio=(60*60*24*365);
$tanyios=(int)($fs/ sanyio);


$tm=$fs%sanyio;
const smeses =(60*60*24*30);
$tmeses=(int)($tm /smeses);


$ts=$tm%smeses;
const ss =(60*60*24*7);
$tsemana=(int)($ts/ss);


$th=$ts%ss;
const sdias=(60*60*24);
$tdias=(int)($th/sdias);

$thoras=(int)($tdias/$tsemana);


echo $tanyios." anyos  \n";
echo $tmeses." meses\n";
echo $tsemana."semanas\n";
echo $th."\n";
echo $tdias."  son los dias \n";
echo $thoras."  son los horas \n";
echo $tm."minutos \n";




$fecha1 = new DateTime("1980-08-19 01:15:52");
$fecha2 = new DateTime("2017-09-25 02:33:45");
$fecha = $fecha1->diff($fecha2);
printf('%d anyios, %d meses, %d dias, %d horas, %d minutos', $fecha->y, $fecha->m, $fecha->d, $fecha->h, $fecha->i);

 
?>