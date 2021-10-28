<!-- /html/ListaDeEmpleados.php (Tiene que tener el mismo nombre que en views)-->

<!-- Aca necesito una pantalla para mostrar el detalle de los empleados -->
<!-- Tiene que tener un boton para volver al home -->
<!-- Necesito un boton para agregar un adelanto (me tiene que llevara otra pantalla)-->
<!-- Y supongo que otro boton para poder ver los adelantos que se hicieron (me tiene que llevar a otra pantalla) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="../html/css/style.css">
    <link rel="stylesheet" href="../htmlcss/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>

    <title></title>
</head>

<body>

    <div class="listaEmpleado">
        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="../controllers/inicio.php">San Pedro</a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="../controllers/inicio.php">Inicio</a></li>
                    <li><a href="../controllers/ListaEmpleados.php">Empleados</a></li>
                    <li><a href="../controllers/ListaAdelantos.php">Adelantos</a></li>
                    <li><a href="../controllers/Proveedor.php">Proveedor</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="ventas.php">Registrar ventas</a></li>
                    <li><a href="estadisticas.php">Estadísticas</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

        <div class="Divcontainer" id="Divcontainer">
            <h2>LISTA DE EMPLEADOS:</h2>
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DNI</th>
                    <th>ACCIONES</th>
                </tr>
                    <?php foreach ($this->empleados as $e) { ?>
                <tr>
                        <td><?= $e['nombre'] ?></td>
                        <td><?= $e['apellido'] ?></td>
                        <td><?= $e['dni'] ?></td>
                    <td id="">
                        <button class="btn-eliminar">ELIMINAR</button>
                    </td>
                    <?php } ?>
                </tr>
            </table>
        </div>

        <a href="#new-empleado"><button class="btn-newEmpleado" id="btn-newEmpleado" onclick="mostrarAgregarEmpleado()">NUEVO EMPLEADO</button></a>

        <!-- <div class="mod-empleados" id="mod-empleados">
            <h2>MODIFICAR EMPLEADO:</h2>
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DNI</th>
                    <th>ACCIONES</th>
                </tr>
                <tr>
                    <td><input type="text" name="nombre" id="nombre" maxlenght="20" value=""></td>
                    <td><input type="text" name="apellido" id="apellido" value=""></td>
                    <td><input type="number" name="dni" id="dni" value=""></td>
                    <td id=""><button class="btn-modificar">CONFIRMAR</button><a href="#Divcontainer"><button class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a></td>
                </tr>
            </table>
        </div> -->



        <div class="mod-empleados" id="new-empleado">
            <h2>Nuevo empleado:</h2>
            <form method="post">
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DNI</th>
                    <th>ACCIONES</th>
                </tr>
                <tr>
                    <td><input type="text" name="nombre" id="nombre" maxlenght="20" value=""></td>
                    <td><input type="text" name="apellido" id="apellido" value=""></td>
                    <td><input type="number" name="dni" id="dni" value=""></td>
                    <td id=""><button  type="submit" class="btn-modificar">CONFIRMAR</button><a href="#Divcontainer"><button class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a></td>
                </tr>
            </table>
            </form>
        </div>

    </div>

    <script src="../html/js/app.js"></script>
</body>

</html>