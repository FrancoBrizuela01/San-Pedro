<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require '../html/Partials/Head.php';
    ?>
</head>

<body>
    <?php
    require '../html/Partials/Navbar.php';
    ?>

    <div class="content">
        <div class="txt-home">
            <h1>Gestioná tu negocio de la manera más fácil</h1>

            <p class="blink txt">Observe las estadísticas de su negocio</p>
            <a href="../controllers/Estadistica-Mes.php"><button class="btn-stats">VER ESTADÍSTICAS</button></a>
        </div>
        <div class="img-home">
            <img src="../html/img/home.svg" alt="instant analysis">
        </div>
    </div>

    <?php
    require '../html/Partials/Footer.php';
    ?>

    <script src="../html/js/app.js"></script>
</body>

</html>