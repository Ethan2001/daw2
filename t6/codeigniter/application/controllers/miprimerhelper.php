<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Miprimerhelper extends CI_Controller{
	function _construct(){
		parent::_construct();
		
	}
	function index(){
		$this->load->helper('elhelper');
		$this->load->view('mihelper/bienvenido');
		
	}
		
}
?>