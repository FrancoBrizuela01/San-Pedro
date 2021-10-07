<?php 

// controllers/ListaAdministradores.php

require '../fw/fw.php'
require '../models/administrador.php'
require '../views/login.php'

$a = new administrador();		//models
$todos = $a->getTodos();

$v = new login();				//views
$v->admin = $todos;
$v->render();