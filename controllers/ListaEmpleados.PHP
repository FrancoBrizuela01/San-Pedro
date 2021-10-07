<?php

// controllers/ListaEmpleados.php

require '../fw/fw.php'
require '../models/Empleado.php'		// esto seria como los include
require '../views/ListaDeEmpleados.php'

$e = new Empleado();					// models
$todos = $e->getTodos();

$v = new ListaDeEmpleados();			// views
$v->empleados = $todos;
$v->render();