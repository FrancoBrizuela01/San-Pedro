<?php

//controllers/listaempleados.php

require '../fw/fw.php';
require '../models/Empleado.php';
require '../views/Listadoempleados.php';

$e = new Empleado();
$todos = $e->getTodos();


$v = new ListadoEmpleados();
$v->empleados = $todos;
$v->render();
