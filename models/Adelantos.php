<?php

// models/Adelanto.php

class Adelantos extends model {

	public function CrearAdelantoFechaHoy($empleadoid, $monto){

		$empleadoaux = new Empleado();
		if(!$empleadoaux->existeEmpleado($empleadoid)) die ('error adelantos 1');
		if(!is_numeric($monto)) die ('error adelantos 2');

		$this->db->query("INSERT INTO adelantos
						(codigo_empleado, cantidad, fecha) VALUES
						($empleadoid, $monto, NOW() ) ");

	}

	public function crearAdelantoFechaDeterminada($empleadoid, $monto, $fecha){

		$empleadoaux = new Empleado();
		if(!$empleadoaux->existeEmpleado($empleadoid)) die ('error adelantos 1');
		if(!is_numeric($monto)) die ('error adelantos 2');

		 $anio = substr($fecha , 0 , 4); //yyyy-mm-dd
         $mes = substr($fecha , 5 , 2);
         $dia = substr($fecha , 8 , 2);

		if(!ctype_digit($dia)) die ('error adelantos 3');
		if($dia < 1 ) die ('error adelantos 4');
		if($dia > 31 ) die ('error adelantos 5');

		if(!ctype_digit($mes)) die ('error adelantos 6');
		if($mes < 1 ) die ('error adelantos 7');
		if($mes > 12 ) die ('error adelantos 8');

		if(!ctype_digit($anio)) die ('error adelantos 9');
		if($anio < date('Y')-1) die ('error adelantos 10');
		if($anio > date('Y')) die ('error adelantos 11');

		if(!checkdate($mes, $dia, $anio)) die ('error adelantos 12');

		$fecha = "$anio-$mes-$dia";

		$this->db->query("INSERT INTO adelantos
						(codigo_empleado, cantidad, fecha) VALUES
						($empleadoid, $monto, $fecha ) ");

	}

}