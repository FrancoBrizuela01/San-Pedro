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

    <?php
    $anioActual = date('Y');
    ?>

    <div class="Divcontainer" id="Divcontainer">
        <h2 class="h2Initial">ESTADISTICAS DEL AÑO</h2>

        <form action="" method="post">
            <div class="divSelect">
                <select name="anio" id="inputAño" class="select">
                    <?php for ($anio = 2021; $anio < $anioActual + 10; $anio++) { ?>
                        <option value="<?= $anio ?>"><?= $anio ?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="buscar" class="btn-search">
            </div>
        </form>

        <table>
            <tr>
                <th>TOTAL</th>
                <th>PROMEDIO</th>
                <th>MES MENOS VENDIDO</th>
                <th>MES MÁS VENDIDO</th>
                <th>VENTA RECORD</th>
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