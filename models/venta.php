<?php 

// models/venta.php


	class venta extends model {


		public function GetVentas(){

			$this->db->query("SELECT *
								FROM codigo_venta ");

			return $this->db->fetchAll();

		}

		public function AgregarVenta($fecha, $cantidad){

			if(strlen($cantidad) < 1 ) throw new ValidacionException('error 1');
			if(strlen($cantidad) > 40) throw new ValidacionException('error 2');
			$cantidad = $this->db->escape($cantidad);

			$anio = substr($fecha , 0 , 4); //yyyy-mm-dd
         	$mes = substr($fecha , 5 , 2);
        	 $dia = substr($fecha , 8 , 2);

			if(!ctype_digit($dia)) throw new ValidacionException('error 3');
			if($dia < 1 ) throw new ValidacionException('error 4');
			if($dia > 31 ) throw new ValidacionException('error 5');

			if(!ctype_digit($mes)) throw new ValidacionException('error 6');
			if($mes < 1 ) throw new ValidacionException('error 7');
			if($mes > 12 ) throw new ValidacionException('error 8');

			if(!ctype_digit($anio)) throw new ValidacionException('error 9');
			if($anio < date('Y')-1) throw new ValidacionException('error 10');
			if($anio > date('Y')) throw new ValidacionException('error 11');

			if(!checkdate($mes, $dia, $anio)) throw new ValidacionException('error 12');

			$fecha = "$anio-$mes-$dia";

			$this->db->query("INSERT INTO codigo_venta
								(fecha, cantidad) VALUES
								('$fecha', $cantidad)	");
		}

	}

	class ValidacionException extends Exception{}