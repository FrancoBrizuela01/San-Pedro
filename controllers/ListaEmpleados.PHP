<?php

//controllers/listaempleados.php

require '../fw/fw.php';
require '../models/Empleado.php';
require '../views/Listadoempleados.php';
require '../html/partials/session.php';


$e = new Empleado();

if (isset($_POST['cancelar'])) {
    header('Location: ../controllers/listaEmpleados.php');
}

if(isset($_POST['Modificar'])){

	$e->ModificarEmpleado($_POST['nombre'], $_POST['apellido'], $_POST['dni'], $_POST['id']);
	header('Location: ../controllers/listaEmpleados.php');
}

if (isset($_POST['nuevo'])) {

    if (!isset($_POST['nombre'])) die('Escribir nombre');
    if (!isset($_POST['apellido'])) die('Escribir apellido');
    if (!isset($_POST['dni'])) die('Escribir dni');


    $e->NuevoEmpleado($_POST['nombre'], $_POST['apellido'], $_POST['dni']);
    header('location: ../controllers/ListaEmpleados.php');
} else {
    $v = new ListadoEmpleados();
    $v->empleados = $e->getTodos();
}

$v->render();
