<?php 

// controllers/ListaAdministradores.php

require '../fw/fw.php';
require '../models/administrador.php';
require '../views/login.php';

$a = new administrador();		//models
$todos = $a->getAdm($email, $passw);

// aca iria la funcion y recibo del models

$v = new login();				//views
$v->admin = $todos;
$v->render();


	session_start();

	if(count($_POST) > 0){
		if ($this->db->numRows($this->db) == 1 ){
			$_SESSION ['logueado'] = true;
			$fila = $this->db->fetch($this->db);
			$_SESSION ['nombre'] = $fila ['nombre'];
			header("Location: home.php");
			exit;
	}