<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require '../html/Partials/Head.php';
    ?>

    <title>Proveedor</title>
</head>

<body>

    <div class="listaEmpleado">
        <?php
        require '../html/Partials/Navbar.php';
        ?>

        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="../controllers/inicio.php">San Pedro</a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="../controllers/inicio.php">Inicio</a></li>
                    <li><a href="../controllers/ListaEmpleados.php">Empleados</a></li>
                    <li><a href="../controllers/ListaAdelantos.php">Adelantos</a></li>
                    <li><a href="../controllers/Proveedor.php">Proveedor</a></li>
                    <li><a href="../controllers/ListaProductos.php">Productos</a></li>
                    <li><a href="../controllers/ListaVentas.php">Registrar ventas</a></li>
                    <li><a href="estadisticas.php">Estadísticas</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

        <div class="Divcontainer">
            <h2>LISTA DE PROVEEDORES:</h2>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Razón Social</th>
                    <th>ACCIONES</th>
                </tr>
                <?php foreach ($this->proveedores as $p) {  ?>
                    <tr>
                        <td><?= $p['nombre'] ?></td>
                        <td><?= $p['razon_social'] ?></td>
                        <td id="">
                            <button class="btn-eliminar">ELIMINAR</button>
                    </tr>
                <?php  } ?>
            </table>
        </div>

        <a href="#new-empleado"><button class="btn-newEmpleado" id="btn-newEmpleado" onclick="mostrarAgregarEmpleado()">NUEVO PROVEEDOR</button></a>

        <!-- <div class="mod-empleados" id="mod-empleados">
            <h2>MODIFICAR PROVEEDOR:</h2>
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>RAZÓN SOCIAL</th>
                    <th>ACCIONES</th>
                    <th></th>
                </tr>
                <tr>
                    <td><input type="text" name="nombre" id="nombre" maxlenght="20" value="aca iria el nombre actual"></td>
                    <td><input type="text" name="nombre" id="nombre" value="aca iria el apellido actual"></td>
                    <td id=""><button class="btn-modificar">CONFIRMAR</button><a href="#Divcontainer"><button class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a></td>
                </tr>
            </table>
        </div>
    </div> -->

        <div class="mod-empleados" id="new-empleado">
            <h2>Nuevo Proveedor:</h2>
            <form method="post">
                <table>
                    <tr>
                        <th>NOMBRE</th>
                        <th>RAZÓN SOCIAL</th>
                        <th>ACCIONES</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input type="text" name="nombre" id="nombre" maxlenght="20" value=""></td>
                        <td><input type="text" name="razon_social" id="razon_social" value=""></td>
                        <td id=""><button class="btn-modificar">CONFIRMAR</button><a href="#Divcontainer"><button class="btn-eliminar" onclick="ocultarModificarEmpleados()">CANCELAR</button></a></td>
                    </tr>
                </table>
            </form>
        </div>

        <?php
        require '../html/Partials/Footer.php';
        ?>

        <script src="../html/js/app.js"></script>
</body>

</html>