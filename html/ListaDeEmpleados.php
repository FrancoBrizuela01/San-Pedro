<!-- /html/ListaDeEmpleados.php (Tiene que tener el mismo nombre que en views)-->

<!-- Aca necesito una pantalla para mostrar el detalle de los empleados -->
<!-- Tiene que tener un boton para volver al home -->
<!-- Necesito un boton para agregar un adelanto (me tiene que llevara otra pantalla)-->
<!-- Y supongo que otro boton para poder ver los adelantos que se hicieron (me tiene que llevar a otra pantalla) -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>

    <title></title>
</head>

<body>

    <div class="listaEmpleado">
        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="#">San Pedro</a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="fas fa-times"></i>
                    </div>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Staff</a></li>
                    <li><a href="#">Supplier</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Register sale</a></li>
                    <li><a href="#">Statistics</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>




        <div class="Divcontainer">
            <h2>Lista de empleados:</h2>
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DNI</th>
                    <th>ADELANTOS</th>
                </tr>

                <tr>
                    <td>nombre</td>
                    <td>apellido</td>
                    <td>DNI</td>
                    <td>adelantos</td>
                </tr>
            </table>
        </div>
    </div>



    <script src="js/app.js"></script>
</body>

</html>