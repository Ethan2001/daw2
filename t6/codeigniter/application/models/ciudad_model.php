<?php
class ciudad_model extends CI_Model{
	 public function crear($nombre){
		$ciudad=R::dispense('ciudad');
		$ciudad->nombre=$nombre;
		R::store($ciudad);
		R::close();
	}
	public function listar(){
		$c=R::findAll('ciudad');
		echo "<table border 1px black>";
		echo "<tr><td>id</td><td>nombre</td></tr>";
		foreach ($c as $cs){
			echo "<tr>";
			echo "<td>".$cs->id."</td>";
			echo "<td>".$cs->nombre."</td>";
			echo "</tr>";
			
		
		}echo "</table>";
		
	}
	
	
}
?>