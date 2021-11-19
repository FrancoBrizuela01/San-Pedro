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
        <h2 class="h2Initial">ESTADISTICAS DEL AÑO:</h2>

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

        <?php if (!$this->totalAño['precio']) : ?>
            <h2>AÑO SELECCIONADO: <?= $_POST['anio'] ?></h2>
            <table>
                <tr>
                    <th>TOTAL</th>
                    <th>MES MENOS VENDIDO</th>
                    <th>MES MÁS VENDIDO</th>
                    <th>VENTA RECORD</th>
                </tr>
                <tr>
                    <td>-</td>

                    <td>-</td>

                    <td>-</td>

                    <td>-</td>

                </tr>
            </table>
        <?php endif ?>

        <?php if ($this->totalAño['precio']) : ?>
            <h2>AÑO SELECCIONADO: <?=  $anio - 10 ?></h2>
            <table>
                <tr>
                    <th>TOTAL</th>
                    <th>MES MENOS VENDIDO</th>
                    <th>MES MÁS VENDIDO</th>
                    <th>VENTA RECORD</th>
                </tr>
                <tr>
                    <td>$<?= $this->totalAño['precio'] ?></td>

                    <td><?= $this->mesMin['nombre'] ?> $<?= $this->mesMin['total'] ?></td>

                    <td><?= $this->mesMax['nombre'] ?> $<?= $this->mesMax['total'] ?></td>

                    <td><?= $this->NombreDia($this->record['fecha']) ?> <?= $this->record['fechaRecord'] ?> <?= $this->record['mes'] ?> $<?= $this->record['precio'] ?></td>

                </tr>
            </table>
        <?php endif ?>
    </div>

    <script src="../html/js/app.js"></script>
</body>

</html>