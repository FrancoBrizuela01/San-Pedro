<?php 

// ..controllers/Proveedor.php

require '../fw/fw.php';
require '../models/Prove.php';
require '../views/Provider.php';
require '../html/partials/session.php';

	$p = new Prove();

	if(count($_POST) > 0 ){

		if(!isset($_POST['nombre'])) die ('Ingrese el nombre');
		if(!isset($_POST['razon_social'])) die ('Ingrese la razón social');

		$p->NuevoProveedor($_POST['razon_social'], $_POST['nombre']);
		
		header('location: ../controllers/Proveedor.php');

	}
	else{
		$v = new Provider();
		$v->proveedores = $p->GetProve();
	}
	
	$v->render();
