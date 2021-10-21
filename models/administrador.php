<?php 

// models/administrador.php

class administrador extends model {

	public function getAdm($email, $passwd){


			// validacion del email

			if(!isset($email)) die ("no existe");
			if(strlen($email) < 1) die ("pocas letras");
			if(strlen($email) > 150 );
			$email = $this->db->escape($email);// la validacion con la bse de datos del fw.

			// validacion de la password "string".

			if(!isset($passwd)) die ("no existe");
			if(strlen($passwd) < 1 ) die ("Contraseña muy corta");
			if(strlen($passwd) > 40);
			$passwd = $this->db->escape($passwd);// la validacion con la bse de datos del fw.

			$passwd = sha1($passwd);

			 $this->db->query ("SELECT *
								FROM administrador
								WHERE email = '$email' and password = '$passwd'
								LIMIT 1");

			 return $this->db;
			
	}
}