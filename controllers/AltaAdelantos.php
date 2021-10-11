<?php 

// controllers/AltaAdelantos.php

require '../fw/fw.php';
require '../models/Empleado.php';
require '../models/Adelantos.php';
require '../views/altaadelantos.php';
require '../views/altaAdelantoOk.php';

$m = new Empleado();

if(count($_POST) > 0 ){

	$ma = new Adelantos();

	if(!isset($_POST['empleado'])) die ("error validacion 1");	// estas variables las saco
	if(!isset($_POST['monto'])) die ("error validacion 2");		// del id que tengo en html

	if(!isset($_POST['hoy'])) $ma->CrearAdelantoFechaHoy($_POST['empleado'], $_POST['monto']); //hoy es el
																								//checkbox
	else{

		if(!isset($_POST['fecha'])) die ("error validacion 3");	
		

		$ma->crearAdelantoFechaDeterminada($_POST['empleado'], $_POST['monto'], $_POST['fecha']);
	}
	$v = new altaAdelantosOk();	// este llama a la vista que da el mensaje que salio bien!
}
else {
	$v = new altaadelantos();	// este llama a la vista de alta de adelantos.
	$v->empleados = $m->getTodos();
}

$v->render();