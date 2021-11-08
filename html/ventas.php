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
                <th>PRODUCTO</th>
                <th>FECHA</th>
                <th>CANTIDAD</th>
                <th>TOTAL</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>

    <?php
    require '../html/Partials/Footer.php';
    ?>

    <script src="../html/js/app.js"></script>
</body>

</html>