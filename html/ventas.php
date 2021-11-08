<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require '../html/Partials/Head.php';
    ?>

    <title>Ventas</title>
</head>

<body>
    <?php
    require '../html/Partials/Navbar.php';
    ?>
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
            <?php foreach ($this->vendido as $v) { ?>
                <tr>
                    <td><?= $v['fecha'] ?></td>
                    <td><?= $v['cantidad'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <?php
    require '../html/Partials/Footer.php';
    ?>

    <script src="../html/js/app.js"></script>
</body>

</html>