<?php

//controllers/listaempleados.php

require '../fw/fw.php';
require '../models/Empleado.php';
require '../views/Listadoempleados.php';

<<<<<<< HEAD
$e = new Empleado();
$todos = $e->getTodos();
=======
	session_start();
>>>>>>> 29bc4761468f5e09e355fd6d1fa31c68ea5d8e2b

	if(!isset($_SESSION['logueado'])){
		header("Location: ListaAdministradores.php");
		exit;
	}

<<<<<<< HEAD
$v = new ListadoEmpleados();
$v->empleados = $todos;
$v->render();
=======
	$e = new Empleado ();
	$todos = $e->getTodos();


	$v = new ListadoEmpleados();
	$v->empleados = $todos;
	$v->render(); 				
>>>>>>> 29bc4761468f5e09e355fd6d1fa31c68ea5d8e2b
