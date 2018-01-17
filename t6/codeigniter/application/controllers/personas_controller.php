<?php
/* require_once("../models/personas_model.php");
$pro=new personas_model();
$datos=$pro->get_personas(); */

//Llamada a la vista

class personas_controller extends CI_Controller {

	
	public function index()
	{   $this->load->models('personas_model');
		$this->load->view('personas_view');
	}
}
?>