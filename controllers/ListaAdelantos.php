<?php

// controllers/ListaAdelantos.php

require '../fw/fw.php';
require '../models/Empleado.PHP';
require '../views/adelantos.php';

//	if(!isset($_SESSION['logueado'])){
//		header("Location: ListaAdministradores.php");
//		exit;
//	}

	$a = new Empleado();
	$todos = $a->getListaAdelantos();

	$v = new adelantos();
	$v->empleados = $todos;
	$v->render();