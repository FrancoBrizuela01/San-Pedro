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

			$this->db->query("INSERT INTO productos
								(descripcion, precio_costo, nombre_prove) VALUES
								('$desc', $precio, '$nombre' )");

		}

		

	}