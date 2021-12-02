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

    <div class="Divcontainer" id="Divcontainer">
        <h2>COMPRA DE INSUMOS:</h2>
        <form method="post">
            <table>
                <tr>
                    <th>PRODUCTO</th>
                    <th>STOCK</th>
                    <th>ACCIONES</th>
                </tr>
                <tr>
                    <td>
                        <select id="codigo" name="codigo">
                            <?php foreach ($this->insu as $a) {  ?>
                                <option value="<?= $a['codigo_producto'] ?>"><?= $a['descripcion'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td><input type="number" name="stock" id="stock"></td>
                    <td id=""><button type="submit" class="btn-modificar">CONFIRMAR</button></td>
                </tr>
            </table>
        </form>
    </div>

    <script src="../html/js/app.js"></script>
</body>

</html>