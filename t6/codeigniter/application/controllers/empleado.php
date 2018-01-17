<?php 

class Empleado extends CI_Controller{
	
	 public  function login(){
	 	//$this->load->view('/empleado/empleado_login');
	 	enmarcar($this,'/empleado/empleado_login' );
	 
	 	
	 }
	 public function loginform(){
	 	$nombre=$_POST['nombre'];
	 	$contrasena=$_POST['contrasena'];
	 	$this->load->model('empleado_model');
	 	$ok = $this->empleado_model->verificar ( $nombre, $contrasena );
	 	enmarcar($this,'/empleado/empleado_login',$_REQUEST);
	 }
	 
}


?>