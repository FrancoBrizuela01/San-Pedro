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
                    <li><a href="home.php">Inicio</a></li>
                    <li><a href="ListadoEmpleados.php">Empleados</a></li>
                    <li><a href="adelantos.php">Adelantos</a></li>
                    <li><a href="provider.php">Proveedor</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="ventas.php">Registrar ventas</a></li>
                    <li><a href="estadisticas.php">Estadísticas</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

        <div class="Divcontainer">
            <h2>LISTA DE PROVEEDORES:</h2>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Razón Social</th>
                    <th>ACCIONES</th>
                </tr>
                <tr>
                    <td>nombre</td>
                    <td>Razón Social</td>
                    <td id="">
                        <button class="btn-eliminar">ELIMINAR</button>
                </tr>
            </table>
        </div>

        <a href="#new-empleado"><button class="btn-newEmpleado" id="btn-newEmpleado" onclick="mostrarAgregarEmpleado()">NUEVO PROVEEDOR</button></a>

        <!-- <div class="mod-empleados" id="mod-empleados">
            <h2>MODIFICAR PROVEEDOR:</h2>
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>RAZÓN SOCIAL</th>
                    <th>ACCIONES</th>
                    <th></th>
                </tr>
                <tr>
                    <td><input type="text" name="nombre" id="nombre" maxlenght="20" value="aca iria el nombre actual"></td>
                    <td><input type="text" name="nombre" id="nombre" value="aca iria el apellido actual"></td>
                    <td id=""><button class="btn-modificar">CONFIRMAR</button><a href="#Divcontainer"><button class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a></td>
                </tr>
            </table>
        </div>
    </div> -->

    <div class="mod-empleados" id="new-empleado">
        <h2>Nuevo Proveedor:</h2>
        <table>
            <tr>
                <th>NOMBRE</th>
                <th>RAZÓN SOCIAL</th>
                <th>ACCIONES</th>
                <th></th>
            </tr>
            <tr>
                <td><input type="text" name="nombre" id="nombre" maxlenght="20" value=""></td>
                <td><input type="text" name="nombre" id="nombre" value=""></td>
                <td id=""><button class="btn-modificar">CONFIRMAR</button><a href="#Divcontainer"><button class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a></td>
            </tr>
        </table>
    </div>



    <script src="../html/js/app.js"></script>
</body>

</html>