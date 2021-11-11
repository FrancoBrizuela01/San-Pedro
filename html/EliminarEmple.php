<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

					<div class="">
						<p>Nombre: <?= $this->result['nombre'] ?></p>
						<p>APELLIDO: <?= $this->result['apellido'] ?></p>
						<p>DNI: <?= $this->result['dni'] ?></p>
					</div>	
					<h5>¿Estas seguro de eliminar este empleado?</h5>
					<br/>
					<form action="" method="post">
					<div class="">					
						<input type="submit" name="aceptar" value="Aceptar" class="">
						<br/>
						<input type="submit" name="cancelar" value="Cancelar" class="">
					</div>
					</form>

</body>
</html>