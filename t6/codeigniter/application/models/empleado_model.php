<?php
class Empleado_model extends CI_Model {

public function verificar($nombre,$contrasena) {
	//tiene un id por esom dadba error en rb--> ojo con esto<--
	
		$ok = false;
		$empleado = R::findOne('empleado','nombre =?',[$nombre]);
		if ($empleado!=null && $empleado->contraseña == $contrasena) {
			$ok = true;
			
		}
		
		return $nombre;
	}
}
	?>