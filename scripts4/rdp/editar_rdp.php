<?php

include("../../includes/db.php");

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $query = "SELECT * FROM radicacion_de_poderes WHERE ID = $ID";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $DO = $row['DO'];
        $NIT = $row['NIT'];
        $PUERTO = $row['PUERTO'];
        $FECHA_DE_RADICACION = $row['FECHA_DE_RADICACION'];
        $PLAZO_DIAS_1 = $row['PLAZO_DIAS_1'];
        $FECHA_DE_AUTENTICACION = $row['FECHA_DE_AUTENTICACION'];
        $PLAZO_DIAS_2 = $row['PLAZO_DIAS_2'];
    }
}

if (isset($_POST['editar'])) {
    $ID = $_GET['ID'];
    $DO = $_POST['DO'];
    $NIT = $_POST['NIT'];
    $Puerto = $_POST['Puerto'];
    $Fecha_de_radicacion = $_POST['fecha_de_radicacion'];

    $HOY = date("d-m-Y");

    $Plazo_dias_1 = $_POST['plazo_dias_1'];

    $Fecha_de_vencimiento_1 = strtotime($Fecha_de_radicacion . "+ " .  $Plazo_dias_1 . " day");
    $Fecha_de_vencimiento_1 = date("d-m-Y", $Fecha_de_vencimiento_1);

    $Fecha_de_hoy = new DateTime($HOY);
    $Fecha_de_hoy->format("d-m-Y");

    $Fecha_de_vencimiento = new DateTime($Fecha_de_vencimiento_1);
    $Fecha_de_vencimiento->format("d-m-Y");

    $Dias_faltantes_1 = $Fecha_de_hoy->diff($Fecha_de_vencimiento);
    $Dias_faltantes_1 = $Dias_faltantes_1->days;

    $Fecha_de_autenticacion = $_POST['fecha_de_autenticacion'];

    $Plazo_dias_2 = $_POST['plazo_dias_2'];

    $Fecha_de_vencimiento_2 = strtotime($HOY . "+ " .  $Plazo_dias_2 . " day");
    $Fecha_de_vencimiento_2 = date("d-m-Y", $Fecha_de_vencimiento_2);

    $Fecha_de_vencimiento2 = new DateTime($Fecha_de_vencimiento_2);
    $Fecha_de_vencimiento2->format("d-m-Y");

    $Dias_faltantes_2 = $Fecha_de_hoy->diff($Fecha_de_vencimiento2);
    $Dias_faltantes_2 = $Dias_faltantes_2->days;


    $query = "UPDATE radicacion_de_poderes SET DO = '$DO', NIT = '$NIT', PUERTO = '$Puerto', FECHA_DE_RADICACION = '$Fecha_de_radicacion', FECHA_DE_VENCIMIENTO_1 = '$Fecha_de_vencimiento_1', PLAZO_DIAS_1 = '$Plazo_dias_1', DIAS_FALTANTES_1 = '$Dias_faltantes_1', FECHA_DE_AUTENTICACION = '$Fecha_de_autenticacion', FECHA_DE_VENCIMIENTO_2 = '$Fecha_de_vencimiento_2', PLAZO_DIAS_2 = '$Plazo_dias_2', DIAS_FALTANTES_2 = '$Dias_faltantes_2' WHERE ID = $ID";
    $result = mysqli_query($conn, $query);

    $_SESSION['message'] = "El registro se actualizo correctamente";
    $_SESSION['message-type'] = "success";
    header("Location: ../../index.php");
}
?>

<?php include("../../includes/_header.php"); ?>

<div class="container mt-5">
    <div class="col border">
        <p class="display-6 mt-2" style="text-align: center;">EDITANDO: <?php echo $NIT; ?></p>
    </div>
    <form action="editar_rdp.php?ID=<?php echo $_GET['ID']; ?>" method="POST">
        <div class="row mb-4">
            <div class="col">
                <label for="DO" class="form-label">DO</label>
                <input type="text" class="form-control" name="DO" aria-label="DO" value="<?php echo $DO; ?>" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <label for="NIT" class="form-label">NIT</label>
                <input type="number" class="form-control" name="NIT" aria-label="NIT" value="<?php echo $NIT; ?>" required>
            </div>
            <div class="col">
                <label for="Puerto" class="form-label">Puerto</label>
                <select class="form-control" name="Puerto" id="Puerto" required>
                    <option value="SPB">SPB</option>
                    <option value="TCB">TCB</option>
                </select>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="fecha_de_radicacion" class="form-label">Fecha de radicación</label>
                <input type="date" class="form-control" name="fecha_de_radicacion" aria-label="Fecha de radicación" value="<?php echo $FECHA_DE_RADICACION; ?>" required>
            </div>
            <div class="col">
                <label for="plazo_dias_1" class="form-label">Plazo (Días) #1</label>
                <input type="number" class="form-control" name="plazo_dias_1" aria-label="plazos_dias #1" value="<?php echo $PLAZO_DIAS_1; ?>" required>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="fecha_de_autenticacion" class="form-label">Fecha de autenticación</label>
                <input type="date" class="form-control" name="fecha_de_autenticacion" aria-label="Fecha de autenticacion" value="<?php echo $FECHA_DE_AUTENTICACION; ?>" required>
            </div>
            <div class="col">
                <label for="plazo_dias_2" class="form-label">Plazo (Días) #2</label>
                <input type="number" class="form-control" name="plazo_dias_2" aria-label="plazos_dias #2" value="<?php echo $PLAZO_DIAS_2; ?>" required>
            </div>
        </div>
</div>
<div class="container">
    <input class="form-control btn-primary" name="editar" id="editar" type="submit" value="Guardar">
    </form>
</div>

<?php include("../../includes/_footer.php"); ?>