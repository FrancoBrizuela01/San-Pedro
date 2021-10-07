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

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>

    <title></title>
</head>

<body>

    <div class="listaEmpleado">
        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="home.php">San Pedro</a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="home.php">Inicio</a></li>
                    <li><a href="listaDeEmpleados.php">Empleados</a></li>
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

        <div class="Divcontainer" id="Divcontainer">
            <h2>LISTA DE ADELANTOS:</h2>
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DNI</th>
                    <th>FECHA</th>
                    <th>CANTIDAD</th>
                </tr>
                <tr>
                    <td>nombre</td>
                    <td>apellido</td>
                    <td>DNI</td>
                    <td>fecha</td>
                    <td>cantidad</td>           
                </tr>
            </table>
        </div>

        <a href="altaadelanto.php"><button class="btn-newEmpleado" id="btn-newEmpleado" onclick="mostrarAgregarEmpleado()">ALTA DE ADELANTOS</button></a>

    </div>

    <script src="js/app.js"></script>
</body>

</html>