<h3>
<?php
$num=$_GET['numero'];
if(is_numeric($num)){
echo $num . "+ 2 = ". ($num+2);}
else{
echo $num ."no es un numero";	
}
?>
</h3>