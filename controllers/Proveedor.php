<?php 

// ..controllers/Proveedor.php

require '../fw/fw.php';
require '../models/Prove.php';
require '../views/Provider.php';
require '../views/ProveOk.php';


	session_start();

	if(!isset($_SESSION['logueado'])){
		header("Location: ListaAdministradores.php");
		exit;
	}

	$p = new Prove();

	if(count($_POST) > 0 ){

		if(!isset($_POST['nombre'])) die ('Ingrese el nombre');
		if(!isset($_POST['razon_social'])) die ('Ingrese la razón social');

		$p->NuevoProveedor($_POST['razon_social'], $_POST['nombre']);
		$v = new ProveOk();
	}
	else{
		$v = new Provider();
		$v->proveedores = $p->GetProve();
	}
	
	$v->render();
