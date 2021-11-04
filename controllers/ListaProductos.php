<?php 

// controllers/ListaProductos.php

require '../fw/fw.php';
require '../views/productos.php';
require '../models/Produ.php';

	session_start();

	if(!isset($_SESSION['logueado'])){
		header("Location: ListaAdministradores.php");
		exit;
	}

	$p = new Produ();

	if(count($_POST) > 0 ){

		if(!isset($_POST['nombre'])) die('Escribir el nombre');
		if(!isset($_POST['desc'])) die('Escribir descripcion');
		if(!isset($_POST['precio'])) die('Escribir el precio');

		$p->NuevoProducto($_POST['desc'], $_POST['precio'], $_POST['nombre']  );

		echo'<script type="text/javascript">
        alert("Adelanto realizado con exito");
        window.location.href="../controllers/Listaproductos.php";
        </script>';

	}
	else {
		$v = new productos();
		$v->productos = $p->getTodosProdu();
	}

	$v->render();

	