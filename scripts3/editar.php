<?php

include("../includes/db.php");

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $query = "SELECT * FROM andinas WHERE ID = $ID";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $DAV = $row['DAV'];
        $ALIADO = $row['ALIADO'];
        $DO = $row['DO'];
        $IMPORTADOR = $row['IMPORTADOR'];
    }
}

if (isset($_POST['editar'])) {
    $ID = $_GET['ID'];
    $Dav = $_POST['DAV'];
    $Aliado = $_POST['Aliado'];
    $Do = $_POST['DO'];
    $Importador = $_POST['Importador'];

    $query = "UPDATE andinas SET DAV = '$Dav', ALIADO = '$Aliado', DO = '$Do', IMPORTADOR = '$Importador' WHERE ID = $ID";
    $result = mysqli_query($conn, $query);

    $_SESSION['message'] = "El registro se actualizo correctamente";
    $_SESSION['message-type'] = "success";
    header("Location: ../index.php");
}
?>

<?php include("../includes/_header.php"); ?>

<div class="container mt-5">
    <div class="col border">
        <p class="display-6 mt-2" style="text-align: center;">EDITANDO: <?php echo $DAV; ?></p>
    </div>
    <form action="editar.php?ID=<?php echo $_GET['ID']; ?>" method="POST">
        <div class="row mb-4">
            <div class="col">
                <label for="DAV" class="form-label">DAV</label>
                <input type="text" class="form-control" name="DAV" aria-label="DAV" placeholder="DAV" value="<?php echo $DAV; ?>" required>
            </div>
            <div class="col">
                <label for="Aliado" class="form-label">Aliado</label>
                <input type="text" class="form-control" name="Aliado" aria-label="Aliado" placeholder="Aliado" value="<?php echo $ALIADO; ?>" required>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
                <label for="DO" class="form-label">DO</label>
                <input type="text" class="form-control" name="DO" aria-label="DO" placeholder="DO" value="<?php echo $DO; ?>" required>
            </div>
            <div class="col">
                <label for="Importador" class="form-label">Importador</label>
                <input type="text" class="form-control" name="Importador" aria-label="Importador" placeholder="Importador" value="<?php echo $IMPORTADOR; ?>" required>
            </div>
        </div>
</div>
<div class="container">
    <input style="width: 1120px;" class="form-control btn-primary" name="editar" type="submit" value="Guardar">
    </form>
</div>

<?php include("../includes/_footer.php"); ?>