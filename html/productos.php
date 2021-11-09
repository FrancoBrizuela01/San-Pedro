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
                <th>PROVEEDOR</th>
                <th>ACCIONES</th>
            </tr>
            <?php foreach ($this->productos as $p) { ?>
                <tr>
                    <td><?= $p['descripcion'] ?></td>
                    <td><?= $p['precio_costo'] ?></td>
                    <td><?= $p['nombre'] ?></td>
                    <td id="">
                        <button class="btn-eliminar">ELIMINAR</button>
                    </td>
                </tr>
            <?php   } ?>
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
                    <th>ACCIONES</th>
                </tr>
                <tr>
                    <td><input type="text" name="desc" id="desc"></td>
                    <td><input type="number" name="precioo" id="precio" value=""></td>
                    <td><input type="text" name="nombre" id="nombre" value=""></td>
                    <td id=""><button type="submit" class="btn-modificar">CONFIRMAR</button><a href="#Divcontainer"><button class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a></td>
                </tr>
            </table>
        </form>
    </div>

    </div>
    <?php
    require '../html/Partials/Footer.php';
    ?>
    <script src="../html/js/app.js"></script>
</body>

</html>