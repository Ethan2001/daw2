<?php 
$i=0;
$j=0;
$z=0;
function numeros($i) {
	for ($i=0;$i<=250;$i++){
		echo $i."</br>";
	};}
function ascii($j) {
		for ($j=0;$j<=250;$j++){
			echo chr($j)."</br>";
		};}
function unicode($z) {
 for ($z=0;$z<=250;$z++){
	echo urldecode($z)."</br>";
			};}	 
	
?>