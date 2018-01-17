<?php
class Ejemplo_model extends CI_Model{
	
	function existe(){
		$res='';
		
		if('comprobamos'){
			
		$res=true;	
		}else{
			$res=false;
		}
		
		return $res;
	}
	
	public function crear($pasado){
		$bean=R::dispense('bean');
		$bean->campo='lo que sea';
		
		R::store();
		R::close();
		//comprobamos
		
		$this->existe();
	}
}