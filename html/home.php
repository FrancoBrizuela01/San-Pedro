<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <title>Panaderia San Pedro</title>
</head>

<body>
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
                <li><a href="provider.php">Proveedor</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Registrar ventas</a></li>
                <li><a href="#">Estadísticas</a></li>
            </ul>
            <div class="icon menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="txt-home">
            <h1>Hola @nombre</h1>
            <h2>Gestioná tu negocio de la manera más fácil</h2>

            <p class="blink txt">Observe las estadísticas de su negocio</p>
            <button class="btn-stats">See stats</button>
        </div>
        <div class="img-home">
            <img src="img/home.svg" alt="instant analysis">
        </div>
    </div>

    <footer class="footer">
        <p>
            Copyright © 2021. <a href="#">@SanPedro</a> <br />
            All Rights Reserved
        </p>
    </footer>

    <script src="js/app.js"></script>
</body>

</html>