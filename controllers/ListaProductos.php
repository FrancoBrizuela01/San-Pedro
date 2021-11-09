<?php 

// controllers/ListaProductos.php

require '../fw/fw.php';
require '../views/productos.php';
require '../models/Produ.php';
require '../html/partials/session.php';

	$p = new Produ();

	if(count($_POST) > 0 ){

		if(!isset($_POST['eliminar'])){
        	
        	$p->EliminarProducto($_POST['codigo']);

        	echo'<script type="text/javascript">
        	alert("Producto	eliminado con exito");
        	window.location.href="../controllers/ListaEmpleados.php";
        	</script>';

        } else {

		if(!isset($_POST['nombre'])) die('Escribir el nombre');
		if(!isset($_POST['desc'])) die('Escribir descripcion');
		if(!isset($_POST['precio'])) die('Escribir el precio');

		$p->NuevoProducto($_POST['desc'], $_POST['precio'], $_POST['nombre']  );

		echo'<script type="text/javascript">
        alert("Producto agregado con exito");
        window.location.href="../controllers/Listaproductos.php";
        </script>';
        } 

	}
	else {
		$v = new productos();
		$v->productos = $p->getTodosProdu();
	}

	$v->render();

	