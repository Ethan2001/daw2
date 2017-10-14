<?php
function limpiarPantalla() {
	for ($i=0;$i<30;$i++)  {
		echo "\n";
	}
}

//===========================
function continuar($mensaje) {
	echo $mensaje.'. Pulsa INTRO para continuar';
	fscanf(STDIN,"%s\n",$kk);
}

//===========================
function menu() {
	echo "\n\n======================\n";
	echo "1. Crear departamento\n";
	echo "2. Consultar departamento por ID\n";
	echo "3. Listar todos los departamentos\n";
	echo "4. Modificar departamento\n";
	echo "5. Borrar departamento\n";

	echo "6. Crear empleado\n";
	echo "7. Consultar empleado por ID\n";
	echo "8. Listar todos los empleados\n";
	echo "9. Modificar empleado\n";
	echo "10. Borrar empleado\n";

	echo "f. Finalizar\n";
	
	echo "\n\n";
	
	// Seleción de opción
	$terminar = false;
	$opcion = '';
	while (! $terminar) {
		echo 'Introduce una opcion: ';
		fscanf(STDIN, "%s\n", $opcion);
		$terminar = in_array($opcion, ['1','2','3','4','5','6','7','8','9','10','f']);
		
	}
	
	return $opcion; // Devuelve la opción elegida
}

//========================

function crearDepartamento() {
	limpiarPantalla();
	echo 'NUEVO DEPARTAMENTO';
	echo "\n";
	echo '==================';

	echo "\nId. departamento: ";
	fscanf(STDIN,"%d\n",$id);
	echo "\nNombre departamento: ";
	fscanf(STDIN,"%s\n",$nombre);
	echo "\nDescripcion departamento: ";
	fscanf(STDIN,"%s\n",$descripcion);
	
	global $bbdd;
	global $d;
	$bbdd['departamento'][$d]['id'] = $id;
	$bbdd['departamento'][$d]['nombre'] = $nombre;
	$bbdd['departamento'][$d]['descripcion'] = $descripcion;
	
	$d++;
	
	continuar('Departamento creado');
	
	
}

//===========

function existeIdDpto($id) {
	$existe = 0;
	$i=1;
	global $bbdd;
		
	foreach ($bbdd['departamento'] as $k => $departamento) {
		if ($departamento ['id'] == $id) {
			$existe = $k;
		}
	}
	
	return $existe;
}
//========================

function consultarDepartamentoPorId() {
	limpiarPantalla();
	echo 'CONSULTAR DEPARTAMENTO POR ID';
	echo "\n";
	echo "==================\n";
	
	echo 'ID. del dpto.: ';
	fscanf(STDIN,"%d\n",$id);
	
	$existeDpto = existeIdDpto($id);
	
	global $bbdd;
	if ($existeDpto) {
		echo "NOMBRE departamento: {$bbdd['departamento'][$existeDpto]['nombre']}\n";
		echo "DECSIPCION departamento: {$bbdd['departamento'][$existeDpto]['descripcion']}\n";
		echo "\n\n------------\n";
		$terminar = true;
	}
	else {
		echo 'ID. de departamento INCORRECTA';
	}
	
	continuar('');
	
}

//========================

function listarTodosDepartamentos() {
	limpiarPantalla();
	echo 'LISTA de DEPARTAMENTOS';
	echo "\n";
	echo "==================\n";
	
	echo "ID\t\tNOMBRE\t\tDESCRIPCION\n";
	echo "============================================\n";
	
	global $bbdd;
	
	foreach ($bbdd['departamento'] as $departamento) {
		echo "{$departamento['id']}\t\t{$departamento['nombre']}\t\t{$departamento['descripcion']}\n";
	}
	continuar('FIN de lista');
}

//===========================

function devuelveIdDepartamento($nombreDepartamento) {
	$id = 0;
	global $bbdd;
	foreach ($bbdd['departamento'] as $k => $departamento) {
		if ($departamento['nombre'] == $nombreDepartamento) {
			$id = $k;
		}
	}
	return $id;
}

//===========================

function modificarDepartamento() {
	limpiarPantalla();
	echo 'MODIFICAR DEPARTAMENTO';
	echo "\n";
	echo "==================\n";
	
	echo 'Nombre del dpto. a modificar: ';
	fscanf(STDIN,"%s\n",$nombreDepartamento);
	
	$idDpto = devuelveIdDepartamento($nombreDepartamento);
	
	global $bbdd;
	
	if ($idDpto != 0) {
		echo "\nNombre actual: {$bbdd['departamento'][$idDpto]['nombre']}, ","introduce el nuevo nombre: ";
		fscanf(STDIN,"%s\n",$bbdd['departamento'][$idDpto]['nombre']);

		echo "\nDescripcion actual: {$bbdd['departamento'][$idDpto]['descripcion']}, ","introduce la nueva descripcion: ";
		fscanf(STDIN,"%s\n",$bbdd['departamento'][$idDpto]['descripcion']);
		
	}
	else {
		echo "Departamento inexistente\n";
	}
	continuar('FIN de lista');
	
}

//========================

function borrarDepartamento() {
	limpiarPantalla();
	echo 'BORRAR DEPARTAMENTO';
	echo "\n";
	echo "==================\n";
	
	echo 'Nombre del dpto. a borrar: ';
	fscanf(STDIN,"%s\n",$nombreDepartamento);
	
	$idDpto = devuelveIdDepartamento($nombreDepartamento);
	
	global $bbdd;
	
	$mensaje = "Departamento inexistente";
	
	if ($idDpto != 0) {
		unset($bbdd['departamento'][$idDpto]);
		$mensaje = "Departamento borrado";
	}
	
	continuar($mensaje);
}

//========================

function crearEmpleado() {
	limpiarPantalla();
	echo 'NUEVO EMPLEADO';
	echo "\n";
	echo '==================';

	echo "\nId. empleado: ";
	fscanf(STDIN,"%d\n",$id);
	echo "\nNombre empleado: ";
	fscanf(STDIN,"%s\n",$nombre);
	echo "\nApellido empleado: ";
	fscanf(STDIN,"%s\n",$apellido);
	echo "\nId. dpto. en el que trabaja";
	fscanf(STDIN,"%d\n",$idDpto);
	
	global $bbdd;
	global $e;
	$bbdd['empleado'][$e]['id'] = $id;
	$bbdd['empleado'][$e]['nombre'] = $nombre;
	$bbdd['empleado'][$e]['apellido'] = $apellido;
	$bbdd['empleado'][$e]['idDpto'] = $idDpto;
	
	$e++;
	
	continuar('empleado creado');
	
	
}


//========================

function consultarEmpleadoPorId() {
	limpiarPantalla();
	echo 'CONSULTAR EMPLEADO POR ID';
	echo "\n";
	echo "==================\n";
	
	echo 'ID. del empleado: ';
	fscanf(STDIN,"%d\n",$id);
	
	$existeEmpleado = existeIdEmpleado($id);
	
	global $bbdd;
	if ($existeEmpleado) {
		echo "NOMBRE empleado: {$bbdd['empleado'][$existeEmpleado]['nombre']}\n";
		echo "APELLIDO empleado: {$bbdd['empleado'][$existeEmpleado]['apellido']}\n";
		echo "ID.DPTO. empleado: {$bbdd['empleado'][$existeEmpleado]['idDpto']}\n";
		echo "\n\n------------\n";
		$terminar = true;
	}
	else {
		echo 'ID. de empleado INCORRECTA';
	}
	
	continuar('');
	
}

//===========

function existeIdEmpleado($id) {
	$existe = 0;
	$i=1;
	global $bbdd;
	
	foreach ($bbdd['empleado'] as $k => $empleado) {
		if ($empleado ['id'] == $id) {
			$existe = $k;
		}
	}
	
	return $existe;
}

//========================

function obtenerNombreDptoPorId($id) {
	global $bbdd;
	$nombre = '';
	foreach ($bbdd['departamento'] as $departamento) {
		if ($departamento['id'] == $id) {
			$nombre = $departamento['nombre'];
		}
	}
	return $nombre;
}

//========================

function listarTodosEmpleados() {
	limpiarPantalla();
	echo 'LISTA de EMPLEADOS';
	echo "\n";
	echo "==================\n";
	
	echo "ID\t\tNOMBRE\t\tAPELLIDO\t\tDEPARTAMENTO\n";
	echo "=============================================================================0\n";
	
	global $bbdd;
	
	foreach ($bbdd['empleado'] as $empleado) {
		$nombreDpto = obtenerNombreDptoPorId($empleado['idDpto']);
		echo "{$empleado['id']}\t\t{$empleado['nombre']}\t\t{$empleado['apellido']}\t\t\t{$nombreDpto}\n";
	}
	continuar('FIN de lista');
}
//===================================
function modificarEmpleado() {
	limpiarPantalla();
	echo 'MODIFICAR Empleado';
	echo "\n";
	echo "==================\n";
	
	echo 'Nombre del empleado a modificar: ';
	$nombre = trim(fgets(STDIN));
	
	$id = devuelveIdEmpleado($nombre);
	
	global $bbdd;
	
	if ($id != 0) {
		echo "\nNombre actual: {$bbdd['empleado'][$id]['nombre']}, ","introduce el nuevo nombre: ";
		fscanf(STDIN,"%s\n",$bbdd['empleado'][$id]['nombre']);

		echo "\nApellido actual: {$bbdd['empleado'][$id]['apellido']}, ","introduce la nueva apellido: ";
		fscanf(STDIN,"%s\n",$bbdd['empleado'][$id]["apellido"]);
		echo "\idDepartamento actual: {$bbdd['empleado'][$id]['idDpto']}, ","introduce la nueva idDpto: ";
		fscanf(STDIN,"%s\n",$bbdd['empleado'][$id]["idDpto"]);
		
		
	}
	else {
		echo "Empleado inexistente\n";
	}
	continuar('FIN de lista');
	
}
//===================================
function devuelveIdEmpleado($nombre) {
	$id = 0;
	global $bbdd;
	foreach ($bbdd['empleado'] as $k => $empleado) {
		if ($empleado['nombre'] == $nombre) {
			$id = $k;
		}
	}
	return $id;
}

///============================
function borrarEmpleado() {
	limpiarPantalla();
	echo 'BORRAR DEPARTAMENTO';
	echo "\n";
	echo "==================\n";
	
	echo 'Nombre del empleado. a borrar: ';
	$nombre = trim(fgets(STDIN));// para que no coja los esoacion realizo un trim <<<<<------ OJO
	
	$id = devuelveIdEmpleado($nombre);
	
	global $bbdd;
	
	$mensaje = "Empleado inexistente";
	
	if ($id != 0) {
		unset($bbdd['empleado'][$id]);
		$mensaje = "Empleado borrado";
	}
	
	continuar($mensaje);
}



//========================
// PROGRAMA PRINCIPAL
//========================

$bbdd = ['empleado' => [], 'departamento' => []]; // Inicializo la Base de datos
$d = 1; // Índice del siguiente dpto. a introducir
$e = 1; //  Índice del siguiente empleado a introducir

$terminar = false;

while (! $terminar) {
	switch (menu()) {
		case '1':crearDepartamento();break;
		case '2':consultarDepartamentoPorId();break;
		case '3':listarTodosDepartamentos();break;
		case '4':modificarDepartamento();break;
		case '5':borrarDepartamento();break;

		case '6':crearEmpleado();break;
		case '7':consultarEmpleadoPorId();break;
		case '8':listarTodosEmpleados();break;
		case '9':modificarEmpleado();break;
		case '10':borrarEmpleado();break;

		case 'f':$terminar=true;break;
	}
	print_r($bbdd); // TODO DEBUG
}

echo 'ADIOS';
?> 