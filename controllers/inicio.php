<?php

// controllers/inicio.php

require '../fw/fw.php';
require '../views/home.php';

	session_start();

	if(!isset($_SESSION['logueado'])){
			header("Location: ListaAdministradores.php");
			exit;
	}

	$v = new home();
	$v->render();