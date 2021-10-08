<?php 

// models/administrador.php

class administrador extends model {

	public function getAdm(){


			// validacion del email

			if(!isset($_POST['email'])) die ("no existe");
			if(strlen($_POST['email']) < 1) die ("pocas letras");
			if(strlen($_POST['email']) > 150 );
			// $_POST['email'] = mysqli_escape_string($cn, $_POST['email']); // la validacion que haciamos antes.
			 $_POST['email'] = $this->db->escape($_POST['email']);			// la validacion con la bse de datos del fw.
			$email = $_POST['email'];

			// validacion de la password "string".

			if(!isset($_POST['passwd'])) die ("no existe");
			if(strlen($_POST['passwd']) < 1 ) die ("Contraseña muy corta");
			if(strlen($_POST['passwd']) > 40);
			//$_POST['passwd'] = mysqli_escape_string($cn, $_POST['passwd']); // la validacion que haciamos antes.
			$_POST['passwd'] = $this->db->escape($_POST['passwd']);			 // la validacion con la bse de datos del fw.

			$passwd = sha1($_POST['passwd']);

			 $this->db->query ("SELECT *
								FROM administrador
								WHERE email = '$email' and password = '$passwd'
								LIMIT 1");
			
	}
}