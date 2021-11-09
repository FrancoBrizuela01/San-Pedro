<?php

function NombreDia($fecha)
{

    $fechats = strtotime($fecha);

    switch (date('w', $fechats)) {
        case 0:
            return "Domingo";
            break;
        case 1:
            return "Lunes";
            break;
        case 2:
            return "Martes";
            break;
        case 3:
            return "Miércoles";
            break;
        case 4:
            return "Jueves";
            break;
        case 5:
            return "Viernes";
            break;
        case 6:
            return "Sábado";
            break;
    }
}

?>

<?php
$anioActual = date('Y');

if (!isset($_POST['anio'])) {
    $anio = date('Y');

    $mesActual = date('n');
    $promedio  = $this->totalAño['precio'] / $mesActual;
}

if (isset($_POST['anio'])) {
    $anio = $_POST['anio'];

    if ($anio < $anioActual)
        $promedio = $this->totalAño['precio'] / 12;

    if ($anio == $anioActual) {
        $mesActual = date('n');
        $promedio  = $this->totalAño['precio'] / $mesActual;
    }
}

?>


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
        <?php if ($this->totalAño['precio']) : ?>
            <table>
                <tr>
                    <th>TOTAL</th>
                    <th>PROMEDIO</th>
                    <th>MES MENOS VENDIDO</th>
                    <th>MES MÁS VENDIDO</th>
                    <th>VENTA RECORD</th>
                </tr>
                <tr>
                    <td>$<?= $this->totalAño['precio'] ?></td>
                    <td>$<?= round($promedio) ?></td>

                    <td><?= $this->mesMin['nombre'] ?>  $<?= $this->mesMin['total'] ?></td>

                    <td><?= $this->mesMax['nombre'] ?>  $<?= $this->mesMax['total'] ?></td>

                    <td><?= NombreDia($this->record['fecha']) ?> <?= $this->record['fechaRecord'] ?> <?= $this->record['mes'] ?>  $<?= $this->record['precio'] ?></td>
 
                </tr>
            </table>
        <?php endif ?>
    </div>

    <?php
    require '../html/Partials/Footer.php';
    ?>
    <script src="../html/js/app.js"></script>
</body>

</html>