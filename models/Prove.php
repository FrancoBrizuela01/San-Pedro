<?php 

// ../models/Prove.php

class Prove extends model {


	public function GetProve(){

		$this->db->query("SELECT * 
							FROM proveedor");

		return $this->db->fetchAll();

	}

	public function NuevoProveedor($razonsocial, $nombre){

		if(!isset($razonsocial)) throw new ValidacionException('error 1');
	    if(strlen($razonsocial) < 1 ) throw new ValidacionException('error 2');
	    if(strlen($razonsocial) > 20 ) throw new ValidacionException('error 3');
	    $razonsocial = $this->db->escape($razonsocial);
	    $razonsocial = $this->db->escapeWildcards($razonsocial);

	   	if(!isset($nombre)) throw new ValidacionException('error 4');
	    if(strlen($nombre) < 1 ) throw new ValidacionException('error 5');
	    if(strlen($nombre) > 20 ) throw new ValidacionException('error 6');
	   	$nombre = $this->db->escape($nombre);
	    $nombre = $this->db->escapeWildcards($nombre);

		$this->db->query("INSERT INTO proveedor
							(razon_social, nombre) VALUES
							('$razonsocial', '$nombre') ");


	}

}

class ValidacionException extends Exception{}