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
        <h2>LISTA DE PRODUCTOS:</h2>
        <table>
            <tr>
                <th>DESCRIPCIÓN</th>
                <th>PRECIO COSTO</th>
                <th>STOCK</th>
                <th>ACCIONES</th>
            </tr>
            <?php foreach ($this->productos as $p) { ?>
                <tr>
                    <td><?= htmlentities($p['descripcion']) ?></td>
                    <td><?= htmlentities($p['precio_costo']) ?></td>
                    <td><?= htmlentities($p['stock']) ?></td>
                    <td>
                        <button class="btn-eliminar"><a href='../controllers/Eliminar-Producto.php?id=<?= htmlentities($p['codigo_producto']) ?> '>ELIMINAR </a></button>
                    </td>
                <?php } ?>
                </tr>

        </table>
    </div>

    <a href="#new-empleado"><button class="btn-newEmpleado" id="btn-newEmpleado" onclick="mostrarAgregarEmpleado()">AGREGAR PRODUCTO</button></a>

    <div class="mod-empleados" id="new-empleado">
        <h2>Nuevo producto:</h2>
        <form method="post">
            <table>
                <tr>
                    <th>DESCRIPCIÓN</th>
                    <th>PRECIO COSTO</th>
                    <th>PROVEEDOR</th>
                    <th>STOCK</th>
                    <th>ACCIONES</th>
                </tr>
                <tr>
                    <td><input type="text" name="desc" id="desc"></td>
                    <td><input type="number" name="precio" id="precio" value=""></td>
                    <td>
                        <select name="nombre" id="nombre">
                            <?php foreach ($this->prove as $p) {  ?>
                            <option><?= htmlentities($p['nombre']) ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td><input type="number" name="stock" id="stock"></td>
                    <td>
                        <button type="submit" class="btn-modificar">CONFIRMAR</button>
                        <a href="#Divcontainer"><button type="submit" name="cancelar" value="Cancelar" class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>


    <script src="../html/js/app.js"></script>
</body>

</html>