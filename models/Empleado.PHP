<?php

// models/Empleado.php

class Empleados extends Model {			// usar el mismo nombre de la clase con el archivo!

	public function getTodos(){

		//aca tienen que ir las validaciones!!!!!!

		$this->db->query("SELECT * FROM empleados");
		return $this->db->fetchAll();
	}

}