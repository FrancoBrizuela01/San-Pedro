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
                <li><a href="../controllers/inicio.php">Inicio</a></li>
                <li><a href="../controllers/ListaEmpleados.php">Empleados</a></li>
                <li><a href="../controllers/ListaAdelantos.php">Adelantos</a></li>
                <li><a href="../controllers/Proveedor.php">Proveedor</a></li>
                <li><a href="../controllers/ListaProductos.php">Productos</a></li>
                <li><a href="../controllers/ListaVentas.php">Registrar ventas</a></li>
                <li><a href="estadisticas.php">Estadísticas</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="Divcontainer" id="Divcontainer">
        <h2 class="h2Initial">REGISTRAR VENTAS:</h2>
        <form action="" method="post" id="product-form">
            <table>
                <tr>
                    <th>FECHA</th>
                    <th>TOTAL</th>
                </tr>

                <tr>
                <tr>
                    <td><input type="date" name="fecha" id="fecha" value=""></td>
                    <td><input type="number" name="total" id="total" value=""></td>
                    <td><button type="submit" value="AGREGAR" class="btn-modificar" id="btn-limpiar" onclick="agregarVenta()">AGREGAR</button></td>
                </tr>
                </tr>
            </table>
        </form>
    </div>

    <div id="product-list" class="Divcontainer">
        <h2 class="h2Initial">HISTORIAL DE VENTAS:</h2>
        <table>
            <tr>
                <th>FECHA</th>
                <th>TOTAL</th>
            </tr>
            <?php foreach($this->vendido as $v) {?>
            <tr>
                <td><?= $v['fecha'] ?></td>
                <td><?= $v['cantidad'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <script src="../html/js/app.js"></script>
</body>

</html>