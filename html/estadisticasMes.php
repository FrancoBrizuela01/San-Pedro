<?php

/*  OBTENER NOMBRE DEL DIA  */
function NombreDia($fecha)
{
    $fechats = strtotime($fecha);
    //el parametro w en la funcion date indica que queremos el dia de la semana
    //lo devuelve en numero 0 domingo , 1 lunes , ...
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
$DiaMin  = substr($this->diaMin['fecha'], 8, 2);
$DiaMax  = substr($this->diaMax['fecha'], 8, 2);
$anio = date('Y');
$mesAcutal = date('n');
$anioActual = date('Y');
$cantDias = date('t');

if (isset($_POST['anio']))
    $anio = $_POST['anio'];

$cont = 0;
foreach ($this->lista as $l) :
    $cont += 1;
endforeach
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
        <h2 class="h2Initial">ESTADISTICAS DEL MES</h2>

        <form action="" method="post">
            <div class="divSelect">
                <select name="mes" class="select">
                    <option value="1">Enero</option>
                    <option value="2">Febrero</option>
                    <option value="3">Marzo</option>
                    <option value="4">Abril</option>
                    <option value="5">Mayo</option>
                    <option value="6">Junio</option>
                    <option value="7">Julio</option>
                    <option value="8">Agosto</option>
                    <option value="9">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
                <select name="anio" class="select">
                    <?php for ($i = 2021; $i < $anioActual + 10; $i++) { ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="Buscar" class="btn-search">
            </div>

        </form>
        <?php if ($this->totalMes['cantidad']) : ?>
            <table>
                <tr>
                    <th>TOTAL</th>
                    <th>PROMEDIO</th>
                    <th>VENTA MINIMA</th>
                    <th>VENTA MAXIMA</th>
                </tr>
                <tr>
                    <td>$<?= $this->totalMes['cantidad'] ?></td>
                    <td>$<?= round($this->totalMes['cantidad'] / $cont) ?></td>

                    <td><?= NombreDia($this->diaMin['fecha']) ?> <?= $DiaMin ?></td>
                    <td>$<?= $this->diaMin['cantidad'] ?></td>

                    <td><?= NombreDia($this->diaMax['fecha']) ?> <?= $DiaMax ?></td>
                    <td>$<?= $this->diaMax['cantidad'] ?></td>
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