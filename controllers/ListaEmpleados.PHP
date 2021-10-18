<?php

//controllers/listaempleados.php

require '../fw/fw.php';
require '../models/Empleado.php';
require '../views/Listadoempleados.php';

	session_start();

	if(!isset($_SESSION['logueado'])){
		header("Location: ListaAdministradores.php");
		exit;
	}

	$e = new Empleado ();
	$todos = $e->getTodos();


	$v = new ListadoEmpleados();
	$v->empleados = $todos;
	$v->render(); 				