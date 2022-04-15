<?php

include("../../includes/db.php");

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $query = "SELECT * FROM do WHERE ID = $ID";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $DO = $row['DO'];
        $IMPORTADOR = $row['IMPORTADOR'];
        $NIT = $row['NIT'];
        $BL = $row['BL'];
        $TIPO_DE_CARGAS = $row['TIPO_DE_CARGAS'];
        $MODALIDAD = $row['MODALIDAD'];
        $ALIADO = $row['ALIADO'];
        $ESTADO_DE_OPERACION = $row['ESTADO_DE_OPERACION'];
        $EJECUTIVO_RESPONSABLE = $row['EJECUTIVO_RESPONSABLE'];
        $FECHA_DE_APERTURA = $row['FECHA_DE_APERTURA'];
        $FACTURADO = $row['FACTURADO'];
    }
}

if (isset($_POST['editar'])) {
    $ID = $_GET['ID'];
    $DO = $_POST['DO'];
    $IMPORTADOR = $_POST['Importador'];
    $NIT = $_POST['NIT'];
    $BL = $_POST['BL'];
    $TIPO_DE_CARGAS = $_POST['Tipo_de_cargas'];
    $MODALIDAD = $_POST['Modalidad'];
    $ALIADO = $_POST['Aliado'];
    $ESTADO_DE_OPERACION = $_POST['Estado_de_operacion'];
    $EJECUTIVO_RESPONSABLE = $_POST['Ejecutivo_responsable'];
    $FECHA_DE_APERTURA = $_POST['Fecha_de_apertura'];
    $FACTURADO = $_POST['Facturado'];

    $query = "UPDATE do SET DO = '$DO', IMPORTADOR = '$IMPORTADOR', NIT = '$NIT', BL = '$BL', TIPO_DE_CARGAS = '$TIPO_DE_CARGAS', MODALIDAD = '$MODALIDAD', ALIADO = '$ALIADO', ESTADO_DE_OPERACION = '$ESTADO_DE_OPERACION', EJECUTIVO_RESPONSABLE = '$EJECUTIVO_RESPONSABLE', FECHA_DE_APERTURA = '$FECHA_DE_APERTURA', FACTURADO = '$FACTURADO' WHERE ID = $ID";
    $result = mysqli_query($conn, $query);

    $_SESSION['message'] = "El registro se actualizo correctamente";
    $_SESSION['message-type'] = "success";
    header("Location: ../../index.php");
}
?>

<?php include("../../includes/_header.php"); ?>

<div class="container mt-5">
    <div class="col border">
        <p class="display-6 mt-2" style="text-align: center;">EDITANDO: <?php echo $DO; ?></p>
    </div>
    <form action="editar_do.php?ID=<?php echo $_GET['ID']; ?>" method="POST">
        <div class="row mb-4">
            <div class="col">
                <input type="text" class="form-control" name="DO" placeholder="DO" aria-label="DO" value="<?php echo $DO; ?>" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="Importador" placeholder="Importador" aria-label="Importador" value="<?php echo $IMPORTADOR; ?>" required>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <input type="number" class="form-control" name="NIT" placeholder="NIT" aria-label="NIT" value="<?php echo $NIT; ?>" required>
            </div>
            <div class="col">
                <input type="text" class="form-control" name="BL" placeholder="BL" aria-label="BL" value="<?php echo $BL; ?>" required>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <select class="form-control" name="Tipo_de_cargas" id="Tipo_de_cargas" required>
                    <option value="Carga suelta">Carga suelta</option>
                    <option value="Contenedor">Contenedor</option>
                </select>
            </div>
            <div class="col">
                <select class="form-control" name="Modalidad" id="Modalidad" required>
                    <option value="Import">Import</option>
                    <option value="Export">Export</option>
                    <option value="DTA">DTA</option>
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <input type="text" class="form-control" name="Aliado" placeholder="Aliado" aria-label="Aliado" value="<?php echo $ALIADO; ?>" required>
            </div>
            <div class="col">
                <select class="form-control" name="Estado_de_operacion" id="Estado_de_operacion" required>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <select class="form-control" name="Ejecutivo_responsable" id="Ejecutivo_responsable" required>
                    <option value="Haner">Haner</option>
                </select>
            </div>
            <div class="col">
                <input type="date" class="form-control" name="Fecha_de_apertura" aria-label="Fecha de apertura" value="<?php echo $FECHA_DE_APERTURA; ?>" required>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <select class="form-control" name="Facturado" id="Facturado" required>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <input class="form-control btn-primary" name="editar" id="editar" type="submit" value="Guardar">
    </form>
</div>
</div>


<?php include("../../includes/_footer.php"); ?>