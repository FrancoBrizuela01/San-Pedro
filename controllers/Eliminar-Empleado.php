<?php

//controllers/Eliminar-Empleado.php

require '../fw/fw.php';
require '../models/Empleado.php';
require '../models/Adelantos.php';
require '../html/partials/session.php';

	$e = new Empleado (); 
	$v = new EliminarEmple();
	$a = new Adelantos();

	if ( !empty ( $_GET['id'] ) ) {

		$id_emple = $_GET['id'];
		$v->result = $e->BuscarEmpleado($id_emple);
		$e->EliminarEmpleado($id_emple);
		$a->EliminarAdelanto($id_emple);

		header('location: ../controllers/ListaEmpleados.php');

	}


