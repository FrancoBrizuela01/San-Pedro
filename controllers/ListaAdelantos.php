<?php

// controllers/ListaAdelantos.php

require '../fw/fw.php';
require '../models/Empleado.PHP';
require '../views/adelantos.php';
require '../html/partials/session.php';


	$a = new Empleado();
	$todos = $a->getListaAdelantos();

	$v = new adelantos();
	$v->empleados = $todos;
	$v->render();