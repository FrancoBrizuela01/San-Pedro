<?php

// controllers/ListaVentas.php;

require '../fw/fw.php';
require '../models/venta.php';
require '../models/Produ.php';
require '../views/ventas.php';
require '../html/partials/session.php';

	$ven = new venta ();
	$p = new Produ();

	if(count($_POST) > 0){

		$ven->AgregarVenta($_POST['fecha'], $_POST['total']);
		$p->VentaRealizada ($_POST['codigo'], $_POST['cantidad']);

		header('location: ../controllers/CrRVentas.php');


	}
	else{
		$v = new ventas();
		$v->vendido = $ven->GetVentas();
		$v->productos = $p->getTodosProdu();
	}

	$v->render();