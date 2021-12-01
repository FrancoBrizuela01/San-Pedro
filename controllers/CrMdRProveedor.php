<?php

// ..controllers/Proveedor.php

require '../fw/fw.php';
require '../models/Prove.php';
require '../views/Provider.php';
require '../html/partials/session.php';

$p = new Prove();

if (isset($_POST['cancelar'])) {
    header('Location: ../controllers/CrMdRProveedor.php');
}

if (isset($_POST['Modificar'])) {

    $p->ModificarProveedor($_POST['razon_social'], $_POST['nombre'], $_POST['id']);
    header('Location: ../controllers/CrMdRProveedor.php');
}

if (isset($_POST['nuevo'])) {

    if (!isset($_POST['nombre'])) die('Ingrese el nombre');
    if (!isset($_POST['razon_social'])) die('Ingrese la razón social');

    $p->NuevoProveedor($_POST['razon_social'], $_POST['nombre']);

    header('location: ../controllers/CrMdRProveedor.php');
} else {
    $v = new Provider();
    $v->proveedores = $p->GetProve();
}

$v->render();
