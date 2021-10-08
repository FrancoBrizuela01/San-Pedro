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

}