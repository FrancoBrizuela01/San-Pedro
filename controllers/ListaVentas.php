<?php

// controllers/ListaVentas.php;

require '../fw/fw.php';
require '../models/venta.php';
require '../views/ventas.php';

	$ven = new venta ();

	if(count($_POST) > 0){

		$ven->AgregarVenta($_POST['fecha'], $_POST['total']);

		echo'<script type="text/javascript">
        alert("Venta agregado con exito");
        window.location.href="../controllers/ListaVentas.php";
        </script>';

	}
	else{
		$v = new ventas();
		$v->vendido = $ven->GetVentas();
	}

	$v->render();