<?php 

// models/Produ.php

	Class Produ extends model {

		public function getTodosProdu(){

			$this->db->query("SELECT produ.descripcion, produ.precio_costo, prove.nombre
							FROM productos produ
							LEFT JOIN proveedor prove ON prove.nombre = produ.nombre_prove");

			return $this->db->fetchAll();

		}

		public function NuevoProducto($desc, $precio, $nombre){

			if(!isset($desc)) throw new ValidacionException('error 1');
	    	if(strlen($desc) < 1 ) throw new ValidacionException('error 2');
	     	if(strlen($desc) > 20 ) throw new ValidacionException('error 3');
	     	$desc = $this->db->escape($desc);
	     	$desc = $this->db->escapeWildcards($desc);

	   		if(!isset($nombre)) throw new ValidacionException('error 4');
	    	if(strlen($nombre) < 1 ) throw new ValidacionException('error 5');
	     	if(strlen($nombre) > 20 ) throw new ValidacionException('error 6');
	     	$nombre = $this->db->escape($nombre);
	     	$nombre = $this->db->escapeWildcards($nombre);

	     	if(strlen($precio) < 1 ) throw new ValidacionException('error 7');
			if(strlen($precio) > 40) throw new ValidacionException('error 8');
			$precio = $this->db->escape($precio);

			$this->db->query("INSERT INTO productos
								(descripcion, precio_costo, nombre_prove) VALUES
								('$desc', $precio, '$nombre' )");

		}

		

	}

	class ValidacionException extends Exception{}