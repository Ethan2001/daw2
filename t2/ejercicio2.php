<form action="ejercicio2.2.php"  method="get">
<?php
$n=['uno',
	'dos',
	'tres',
	'cuatro',
	'cinco',
	'seis',
	'siete',
	'ocho',
    'nueve',
	'diez',
	'once',
	'doce',
	'trece',
	'catorce',
	'quince'
];
$numero=isset($_GET['numero'])?$_GET['numero']:'1';
for($i=1;$i<=$numero;$i++){
	echo "<input type='radio' name='numero' value='$i'
	echo $i==1? checked='cheched';
	echo  />{$n[$i-1]}<br>";
	
}

?>	
<input type="submit">
</form>