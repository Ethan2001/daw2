<?php
class lenguaje_model extends CI_Model{
	public function crear($nombre){
		$lenguaje=R::dispense('lenguaje');
		$lenguaje->nombre=$nombre;
		R::store($lenguaje);
		R::close();
	}
	public function getAll($filtro=''){
		//esto conecta con la base de datos
		return R::find('lp', 'nombre like ?',['%'.$filtro.'%']);
		
		
}

public function borrar($id){
	$lp= R::load('lp',$id);
    if($lp->id !=0){
    	R::trash($lp);
    }
    R::close();
}
public function getId($id){
	return R::load('lp',$id);
}
public function editar($id,$nombre){
	$lp = R::load ( 'lp', $id );
	
	$lp->nombre = $nombre;
	
	R::store($lp);
	R::close();
}
}
	?>