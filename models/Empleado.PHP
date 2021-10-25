<?php

//models/Empleado.php

class Empleado extends model {


	public function getTodos(){
		$this->db->query ("SELECT * 
							From empleados");
		return $this->db->fetchAll();
	}

	public function getListaAdelantos(){
		$this->db->query ("SELECT e.nombre, e.apellido, e.dni, a.fecha, a.cantidad
							FROM empleados e
							LEFT JOIN adelantos a ON a.codigo_empleado = e.codigo_empleado");
		return $this->db->fetchAll();
	}

	public function existeEmpleado($eid){

		if(!ctype_digit($eid)) return false;
		if($eid < 1) return false;

		$this->db->query ("SELECT * FROM  empleados
							WHERE codigo_empleado = $eid");
		
		if($this->db->numRows() != 1) return false;

		return true;

	}

	public function NuevoEmpleado($nombre, $apellido, $dni){

		$this->db->query("INSERT INTO empleados
						(nombre, apellido, dni)	VALUES	
						($nombre, $apellido, $dni) ");

	}

}