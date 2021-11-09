<?php 

//controllers/Estadistica-Mes.php

	require '../fw/fw.php' ;
	require '../views/estadisticasMes.php' ;
	require '../models/venta.php' ;
	require '../models/meses.php' ;

	$v = new venta ;
	$m = new meses ;
	$e = new estadisticasMes ;

	if ( isset ( $_POST['mes'] ) ) {
		$mes  = $_POST['mes'] ;
		$anio = $_POST['anio'] ;
	}

	if ( !isset ( $_POST['mes'] ) ) {
		$mes  = date ('m') ;
		$anio = date ('Y') ;
	}

	$e->totalMes = $v->totalMes ( $mes , $anio ) ;
	$e->promedioDia = $v->promedioDia ( $mes , $anio ) ;
	$e->diaMax = $v->diaMax ( $mes , $anio ) ;
	$e->diaMin = $v->diaMin ( $mes , $anio ) ;	
	$e->nombreMes = $m->nombreMes ( $mes ) ;

	$e-> render() ;