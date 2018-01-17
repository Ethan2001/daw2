<?php
class personas_model{
	private $db;
	private $personas;

	 function conexion(){
		$conexion=new mysql("localhost", "root", "", "cdcol");
		$conexion->query("SET personas 'adriana'");
		return $conexion;
	}
	function __construct(){
		$this->db=Conectar::conexion();
		$this->personas=array();
	}
	 function get_productos(){
		$consulta=$this->db->query("select * from personas;");
		while($filas=$consulta->fetch_assoc()){
			$this->personas[]=$filas;
		}
		return $this->personas;
	}
	
	
	
		
	
}
?>