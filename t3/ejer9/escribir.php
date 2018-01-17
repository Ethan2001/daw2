<?php
session_start();

 $activo = $_SESSION['_activo'];
 $psw =$_SESSION['usuarios'][$activo]['pwd'];
 $destinatario= $_REQUEST['destinatario'];
 $fe=time();
 $fecha =date('d m y h:m',$fe);
 $recordar=$_SESSION['recordar']=='si' ? 'recordar' :'';
 echo'<form action ="listadeusu.php">'."\n";
 echo '<input type="hidden" name="usuario" value="'.$activo.'">';
 echo '<input type="hidden" name="password" value="'.$psw.'">';
 echo '<input type="hidden" name="fecha" value="'.$fecha.'">';
 echo '<input type="hidden" name="destinatario" value="'.$destinatario.'">';
 echo '<input type="hidden" name="recordar" value="'.$recordar.'">';
 
 echo '<label for="remi">De: </label>'."\n";
 echo '<input type="text" value="'.$activo.'" readonly="true" id="remi"><br>'."\n";
 
 echo '<label for="dest">Para: </label>'."\n";
 echo '<input type="text" value="'.$destinatario.'" readonly="true" id="dest"><br>'."\n";
 
 echo '<label for="txt">Escribe mensaje</label>'."<br>\n";
 echo '<textarea name="mensaje" cols="50" rows="10" id="txt"></textarea><br>'."\n";
 
 echo '<input type="submit" value="Enviar">'."\n";
 
 echo'</form>'."\n";
  

?>