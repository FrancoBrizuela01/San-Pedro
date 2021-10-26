<?php

//controllers/listaempleados.php

require '../fw/fw.php';
require '../models/Empleado.php';
require '../views/Listadoempleados.php';
require '../views/EmpleadoCreadoOk.php';


	session_start();


	if(!isset($_SESSION['logueado'])){
		header("Location: ListaAdministradores.php");
		exit;
	}


	$e = new Empleado();

	if(count($_POST) > 0){

		if(!isset($_POST['nombre'])) die ('Escribir nombre');
		if(!isset($_POST['apellido'])) die ('Escribir apellido');
		if(!isset($_POST['dni'])) die ('Escribir dni');


		$e->NuevoEmpleado($_POST['nombre'], $_POST['apellido'], $_POST['dni']);
		$v = New EmpleadoCreadoOk();
	}
	else{
		$v = new ListadoEmpleados();
		$v->empleados = $e->getTodos();
	}

	$v->render();


