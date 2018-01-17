<?php
 class Cliente{
 	private $nombre;
 	private $direccion;
 	public function _construct($nombre,$direccion){
 		$this->nombre=$nombre;
 		$this->direccion=$direccion;
 		
 	}
 	
  public  function getNombre(){
  	return $this->nombre;
  }
 
 public  function setNombre($nombre){
 	$this->nombre=$nombre;
 }
 public  function getDireccion(){
 	return $this->direccion;
 }
 
 public  function setDireccion($direccion){
 	$this->direccion=$direccion;
 }
 }
?>