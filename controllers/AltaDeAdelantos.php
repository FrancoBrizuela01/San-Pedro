<?php

// controllers/AltaDeAdelantos.php

require '../fw/fw.php';
require '../models/Empleado.PHP';
require '../views/adelantos.php';

$a = new Empleado();
$todos = $a->getListaAdelantos();

var_dump($todos);

$v = new adelantos();
$v->empleados = $todos;
$v->render();