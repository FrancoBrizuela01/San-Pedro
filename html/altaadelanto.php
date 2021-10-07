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
            <h2>AGREAGAR ADELANTO:</h2>
            <form action="">
                <table>
                    <tr>
                        <th>SELECCIONE UN EMPLEADO</th>
                        <th>FECHA</th>
                        <th>MONTO</th>
                        <th>ACCIONES</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="empleado" id="empleado">
                                <option value="">emp1</option>
                                <option value="">emp2</option>
                                <option value="">emp3</option>
                            </select>
                        </td>
                        <td><input type="date" name="nombre" id="nombre" value="41589456"></td>
                        <td>$ <input type="number" name="nombre" id="nombre" value=""></td>
                        <td id=""><button class="btn-modificar">CONFIRMAR</button>
                    </tr>
                    </tr>
                </table>
            </form>

        </div>

        <a href="adelantos.php"><button class="btn-newEmpleado" id="btn-newEmpleado" onclick="">VER LISTA DE ADELANTOS</button></a>

    </div>

    <script src="js/app.js"></script>
</body>

</html>