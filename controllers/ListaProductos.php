<?php 

// controllers/ListaProductos.php

require '../fw/fw.php';
require '../views/productos.php';
require '../models/Produ.php';
require '../html/partials/session.php';

	$p = new Produ();

	if(count($_POST) > 0 ){

		if(!isset($_POST['nombre'])) die('Escribir el nombre');
		if(!isset($_POST['desc'])) die('Escribir descripcion');
		if(!isset($_POST['precio'])) die('Escribir el precio');

		$p->NuevoProducto($_POST['desc'], $_POST['precio'], $_POST['nombre'], $_POST['stock']  );

		header('location: ../controllers/ListaProductos.php');

    } else {
		$v = new productos();
		$v->productos = $p->getTodosProdu();
	}

	$v->render();

	