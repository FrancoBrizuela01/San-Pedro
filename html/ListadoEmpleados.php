<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require '../html/Partials/Head.php';
    ?>
</head>

<body>

    <div class="listaEmpleado">

        <?php
        require '../html/Partials/Navbar.php';
        ?>

        <div class="Divcontainer" id="Divcontainer">
            <h2>LISTA DE EMPLEADOS:</h2>
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DNI</th>
                    <th>ACCIONES</th>
                </tr>
                <tr>
                    <?php foreach ($this->empleados as $e) { ?>
                <tr>
                    <td><?= $e['nombre'] ?></td>
                    <td><?= $e['apellido'] ?></td>
                    <td><?= $e['dni'] ?></td>
                    <td>
                        <button class="btn-eliminar"><a href="../controllers/Eliminar-Empleado.php?id=<?= $e['codigo_empleado'] ?>">ELIMINAR </a></button>
                    </td>
                <?php } ?>
                </tr>
            </table>

        </div>

        <a href="#new-empleado"><button class="btn-newEmpleado" id="btn-newEmpleado" onclick="mostrarAgregarEmpleado()">NUEVO EMPLEADO</button></a>

        <div class="mod-empleados" id="new-empleado">
            <h2>Nuevo empleado:</h2>
            <form method="post">
                <table>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>DNI</th>
                        <th>ACCIONES</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="nombre" id="nombre" maxlenght="20" value=""></td>
                        <td><input type="text" name="apellido" id="apellido" value=""></td>
                        <td><input type="number" name="dni" id="dni" value=""></td>
                        <td>
                            <button type="submit" class="btn-modificar">CONFIRMAR</button>
                            <a href="#Divcontainer"><button type="submit" name="cancelar" value="Cancelar" class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

    </div>
    <script src="../html/js/app.js"></script>
</body>

</html>