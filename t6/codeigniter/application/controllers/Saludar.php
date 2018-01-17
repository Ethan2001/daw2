<?php
class Saludar extends CI_Controller {
 
	public function index()
	{   $this->get();
	}
	public function get()
	{  
	$this->load->view('saludo/hola');
	}
	public function post() {
		//$datos['nombre'] = isset ($_REQUEST['nombre'])?$_REQUEST['nombre']:'desconocido';
		$this->load->view('saludo/saludar',$_REQUEST);
	}
	public function despedirse() {
		$this->load->view('saludo/adios');
	}
	
}
?>