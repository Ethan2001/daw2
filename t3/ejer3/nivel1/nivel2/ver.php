lista de cookies de nivel 2
<table border=1px solid black >
<tr><td >nombre</td><td> contenido</td></tr>


<?php
foreach ($_COOKIE as $k => $v){

	echo "
	<tr>
	<td>$k</td>
	<td>$v</td>
	</tr>" ;
}
?>
</table>