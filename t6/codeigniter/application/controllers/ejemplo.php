<?php 

class Ejemplo extends CI_Controller{
	
	 public function accion(){
		$this->load->model('ejemplo_model');
		$this->ejemplo->crear('lo que sea que te pasemos');
		enmarcar($this, 'prueba/hola');
		header('location:'.base_url('ejemplo/salidaPRG'));
		
	}
		
	function salidaPRG(){
		enmarcar($this, 'prueba/hola');
	}
	
}
?>