<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require '../html/Partials/Head.php';
    ?>

    <title>Adelantos</title>
</head>

<body>

    <div class="listaEmpleado">
        <?php
        require '../html/Partials/Navbar.php';
        ?>

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
                    <?php foreach ($this->empleados as $a) { ?>
                        <td><?= $a['nombre'] ?></td>
                        <td><?= $a['apellido'] ?></td>
                        <td><?= $a['dni'] ?></td>
                        <td><?= $a['fecha'] ?></td>
                        <td><?= $a['cantidad'] ?></td>
                </tr>
            <?php } ?>
            </table>
        </div>

        <a href="../controllers/AltaAdelantos.php"><button class="btn-newEmpleado" id="btn-newEmpleado" onclick="mostrarAgregarEmpleado()">ALTA DE ADELANTOS</button></a>

    </div>

    <?php
    require '../html/Partials/Footer.php';
    ?>

    <script src="../html/js/app.js"></script>
</body>

</html>