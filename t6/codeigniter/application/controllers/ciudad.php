<?php
class ciudad extends CI_Controller{
	
	public  function crear(){
	 	enmarcar($this, 'ciudad/crearciudad');
	 }
	public  function crearpost(){
	 	$nombre=$_GET['nombre'];
	 	$this->load->model('ciudad_model');
	    $this->ciudad_model->crear ($nombre);
	 }
	 public function listar(){
	 	$this->load->model('ciudad_model');
	 	$this->ciudad_model->listar();
	 	
	 }
	
	
	
}


?>