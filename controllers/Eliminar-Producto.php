<?php 

//controllers/Eliminar-Producto.php

require '../fw/fw.php';
require '../models/Produ.php';
require '../html/partials/session.php';

	$p = new Produ();

	if ( !empty ( $_GET['id'] ) ) {

		$id_produ = $_GET['id'];
		$p->EliminarProducto($id_produ);

		header('location: ../controllers/CrMdRProductos.php');

	}

