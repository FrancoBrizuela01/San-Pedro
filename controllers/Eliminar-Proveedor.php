<?php 

// controllers/Eliminar-Proveedor.php

require '../fw/fw.php';
require '../models/Prove.php';
require '../html/partials/session.php';

	$p = new Prove();
	

	if ( !empty ( $_GET['id'] ) ) {

		$id_prove = $_GET['id'];
		$p->EliminarProveedor($id_prove);


		header('location: ../controllers/Proveedor.php');

	}
