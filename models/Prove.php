<?php 

// ../models/Prove.php

class Prove extends model {


	public function GetProve(){

		$this->db->query("SELECT * 
							FROM proveedor");

		return $this->db->fetchAll();

	}

	public function NuevoProveedor($razonsocial, $nombre){




		$this->db->query("INSERT INTO proveedor
							(razon_social, nombre) VALUES
							('$razonsocial', '$nombre') ");


	}

}