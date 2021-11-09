<?php 

// controllers/Estadistica-Anio.php
	
	require '../fw/fw.php' ;
	require '../views/EstadisticasAnio.php' ;
	require '../models/venta.php' ;

	$e = new EstadisticasAnio ;
	$v = new venta ;

	if ( isset ( $_POST['anio'] ) ) {
		$anio = $_POST['anio'] ;
	}


	if ( !isset ( $_POST['anio'] ) ) {
		$anio = date ('Y') ;
	}

	$e->totalAño = $v->totalAño ( $anio ) ;
	$e->mesMin = $v->mesMin ( $anio ) ;
	$e->mesMax = $v->mesMax ( $anio ) ;
	$e->record = $v->VentaRecord ( $anio ) ;

	$e->render() ;
