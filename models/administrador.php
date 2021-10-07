<?php 

// models/administrador.php

class administrador extends Model {

	public function getTodos(){

		session_start();


		if(count($_POST) > 0){

			// validacion del email

			if(!isset($_POST['email'])) die ("no existe");
			if(strlen($_POST['email']) < 1) die ("pocas letras");
			if(strlen($_POST['email']) > 150 );
			// $_POST['email'] = mysqli_escape_string($cn, $_POST['email']); // la validacion que haciamos antes.
			// $_POST['email'] = $this->db->escape();						// la validacion con la bse de datos del fw.
			$email = $_POST['email'];

			// validacion de la password "string".

			if(!isset($_POST['passwd'])) die ("no existe");
			if(strlen($_POST['passwd']) < 1 ) die ("Contraseña muy corta");
			if(strlen($_POST['passwd']) > 40);
			//$_POST['passwd'] = mysqli_escape_string($cn, $_POST['passwd']); // la validacion que haciamos antes.
			// $_POST['passwd'] = $this->db->escape();						 // la validacion con la bse de datos del fw.

			$passwd = sha1($_POST['passwd']);

			 $this->db->query ("SELECT *
								FROM administrador
								WHERE email = '$email' and password = '$passwd'
								LIMIT 1");

		//	if (mysqli_num_rows ($res) == 1 ){
		//	$_SESSION ['logueado'] = true;
		//	$fila = mysqli_fetch_assoc ($res);
		//	$_SESSION ['nombre'] = $fila ['nombre'];
		//	header("Location: home.php");
		//	exit;

			if ($this->db->numRows($this) == 1 ){
			$_SESSION ['logueado'] = true;
			$fila = $this->db->fetch($this);
			$_SESSION ['nombre'] = $fila ['nombre'];
			header("Location: home.php");
			exit;
			}
		}
	}
}