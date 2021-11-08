<!-- /html/ListaDeEmpleados.php (Tiene que tener el mismo nombre que en views)-->

<!-- Aca necesito una pantalla para mostrar el detalle de los empleados -->
<!-- Tiene que tener un boton para volver al home -->
<!-- Necesito un boton para agregar un adelanto (me tiene que llevara otra pantalla)-->
<!-- Y supongo que otro boton para poder ver los adelantos que se hicieron (me tiene que llevar a otra pantalla) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require '../html/Partials/Head.php';
    ?>

    <title>Empleados</title>
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
                <?php foreach ($this->empleados as $e) { ?>
                    <tr>
                        <td><?= $e['nombre'] ?></td>
                        <td><?= $e['apellido'] ?></td>
                        <td><?= $e['dni'] ?></td>
                        <td id="">
                            <button class="btn-eliminar">ELIMINAR</button>
                        </td>
                    <?php } ?>
                    </tr>
            </table>
        </div>

        <a href="#new-empleado"><button class="btn-newEmpleado" id="btn-newEmpleado" onclick="mostrarAgregarEmpleado()">NUEVO EMPLEADO</button></a>

        <!-- <div class="mod-empleados" id="mod-empleados">
            <h2>MODIFICAR EMPLEADO:</h2>
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
                    <td id=""><button class="btn-modificar">CONFIRMAR</button><a href="#Divcontainer"><button class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a></td>
                </tr>
            </table>
        </div> -->



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