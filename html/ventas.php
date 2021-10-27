<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../html/css/style.css">
    <link rel="stylesheet" href="../htmlcss/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Ventas</title>
</head>

<body>
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

    <div class="Divcontainer" id="Divcontainer">
        <h2>REGISTRAR VENTAS</h2>
        <form action="" method="post" id="product-form">
            <table>
                <tr>
                    <th>PRODUCTO</th>
                    <th>FECHA</th>
                    <th>CANTIDAD</th>
                    <th>TOTAL</th>
                </tr>

                <tr>
                <tr>
                    <td><input type="text" name="producto" id="producto"></td>
                    <!--aca estaria bueno poner un select para q elija directamente el producto q quiera-->
                    <td><input type="date" name="fecha" id="fecha" value=""></td>
                    <td><input type="number" name="cantidad" id="cantidad" value=""></td>
                    <td><input type="number" name="total" id="total" value=""></td>
                    <td><button type="button" value="AGREGAR" class="btn-modificar" id="btn-limpiar" onclick="mostrarVenta()">AGREGAR</button></td>
                </tr>
                </tr>
            </table>
        </form>
    </div>

    <div id="product-list" class="Divcontainer">
        <table>
            <tr>
                <th>PRODUCTO</th>
                <th>FECHA</th>
                <th>CANTIDAD</th>
                <th>TOTAL</th>
            </tr>
        </table>

    </div>

    <script src="../html/js/app.js"></script>
</body>

</html>