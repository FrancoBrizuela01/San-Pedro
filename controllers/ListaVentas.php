<?php

// controllers/ListaVentas.php;

require '../fw/fw.php';
require '../models/venta.php';
require '../views/ventas.php';
require '../html/partials/session.php';

	$ven = new venta ();

	if(count($_POST) > 0){

		$ven->AgregarVenta($_POST['fecha'], $_POST['total']);

		header('location: ../controllers/ListaVentas.php');


	}
	else{
		$v = new ventas();
		$v->vendido = $ven->GetVentas();
	}

	$v->render();