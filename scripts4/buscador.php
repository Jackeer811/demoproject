<?php

include('../includes/db.php');

if (isset($_POST['buscar'])) {
    
}

?>

<?php include("../includes/_header.php"); ?>

<div id="TableOne" class="container-fluid mt-3" style="overflow: auto; display: block;">
    <table class="table table-bordered table-hover">
        <caption>Tabla 'DO'</caption>
        <thead class="table-dark">
            <tr>
                <th>DO</th>
                <th>Importador</th>
                <th>NIT</th>
                <th>BL</th>
                <th>Tipo de cargas</th>
                <th>Modalidad</th>
                <th>Aliado</th>
                <th>Estado de operación</th>
                <th>Ejecutivo responsable</th>
                <th>Fecha de apertura</th>
                <th>Facturado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $keyword = $_POST['keyword'];
            $query_do = "SELECT * FROM do WHERE DO LIKE '%$keyword'";
            $result_do = mysqli_query($conn, $query_do);

            while ($row = mysqli_fetch_array($result_do)) { ?>

                <tr>
                    <td><?php echo $row['DO'] ?></td>
                    <td><?php echo $row['IMPORTADOR'] ?></td>
                    <td><?php echo $row['NIT'] ?></td>
                    <td><?php echo $row['BL'] ?></td>
                    <td><?php echo $row['TIPO_DE_CARGAS'] ?></td>
                    <td><?php echo $row['MODALIDAD'] ?></td>
                    <td><?php echo $row['ALIADO'] ?></td>
                    <td><?php echo $row['ESTADO_DE_OPERACION'] ?></td>
                    <td><?php echo $row['EJECUTIVO_RESPONSABLE'] ?></td>
                    <td><?php echo $row['FECHA_DE_APERTURA'] ?></td>
                    <td><?php echo $row['FACTURADO'] ?></td>
                    <td>
                        <a href="do/editar_do.php?ID=<?php echo $row['ID'] ?>" class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="do/eliminar_do.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>

<div id="TableTwo" class="container-fluid mt-3" style="overflow: auto; display: block;">
    <table class="table table-bordered table-hover">
        <caption>Tabla 'Radicación de poderes'</caption>
        <thead class="table-dark">
            <tr>
                <th>DO</th>
                <th>NIT</th>
                <th>Puerto</th>
                <th>Fecha de radicación</th>
                <th>Fecha de vencimiento</th>
                <th>Plazo de días</th>
                <th>Días faltantes #1</th>
                <th>Fecha de autenticación</th>
                <th>Fecha de vencimiento #2</th>
                <th>Plazo de días #2</th>
                <th>Días faltantes #2</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $keyword = $_POST['keyword'];
            $query_rdp = "SELECT * FROM radicacion_de_poderes WHERE DO LIKE '%$keyword'";
            $result_rdp = mysqli_query($conn, $query_rdp);

            while ($row = mysqli_fetch_array($result_rdp)) { ?>

                <tr>
                    <td><?php echo $row['DO'] ?></td>
                    <td><?php echo $row['NIT'] ?></td>
                    <td><?php echo $row['PUERTO'] ?></td>
                    <td><?php echo $row['FECHA_DE_RADICACION'] ?></td>
                    <td><?php echo $row['FECHA_DE_VENCIMIENTO_1'] ?></td>
                    <td><?php echo $row['PLAZO_DIAS_1'] ?></td>
                    <td><?php echo $row['DIAS_FALTANTES_1'] ?></td>
                    <td><?php echo $row['FECHA_DE_AUTENTICACION'] ?></td>
                    <td><?php echo $row['FECHA_DE_VENCIMIENTO_2'] ?></td>
                    <td><?php echo $row['PLAZO_DIAS_2'] ?></td>
                    <td><?php echo $row['DIAS_FALTANTES_2'] ?></td>
                    <td>
                        <a href="rdp/editar_rdp.php?ID=<?php echo $row['ID'] ?>" class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="rdp/eliminar_rdp.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>

<div id="TableThree" class="container-fluid mt-3" style="overflow: auto; display: block;">
    <table class="table table-bordered table-hover">
        <caption>Tabla 'Andinas'</caption>
        <thead class="table-dark">
            <tr>
                <th>DO</th>
                <th>DAV</th>
                <th>Aliado</th>
                <th>Importador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query_andinas = "SELECT * FROM andinas WHERE DO LIKE '%$keyword'";
            $result_andinas = mysqli_query($conn, $query_andinas);

            while ($row = mysqli_fetch_array($result_andinas)) { ?>

                <tr>
                    <td><?php echo $row['DO'] ?></td>
                    <td><?php echo $row['DAV'] ?></td>
                    <td><?php echo $row['ALIADO'] ?></td>
                    <td><?php echo $row['IMPORTADOR'] ?></td>
                    <td>
                        <a href="andinas/editar_andinas.php?ID=<?php echo $row['ID'] ?>" class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="andinas/eliminar_andinas.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>


<?php include("../includes/_footer.php"); ?>