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
                    <li><a href="ListaDeEmpleados.php">Empleados</a></li>
                    <li><a href="#">Adelantos</a></li>
                    <li><a href="provier.php">Proveedor</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="#">Registrar ventas</a></li>
                    <li><a href="#">Estadísticas</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>




        <div class="Divcontainer">
            <h2>Lista de proveedores:</h2>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Razón Social</th>
                    <th>ACCIONES</th>
                </tr>

                <tr>
                    <td>nombre</td>
                    <td>Razón Social</td>
                    <td id=""><button class="btn-modificar">MODIFICAR</button><button class="btn-eliminar">ELIMINAR</button></td>
                </tr>
            </table>
        </div>
    </div>



    <script src="js/app.js"></script>
</body>

</html>