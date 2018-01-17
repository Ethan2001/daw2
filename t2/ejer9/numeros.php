<?php require_once 'impares.php';
for( $i=1;$i<=50;$i++){
	if ($i%2==0) {
		echo $i;
	}
	else {
		echo resaltar($i)."</br>";
	}
};
?>