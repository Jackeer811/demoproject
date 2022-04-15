<?php

include('../includes/db.php');

if (isset($_POST['guardar'])) {
    $DO = $_POST['DO'];
    $Importador = $_POST['Importador'];
    $NIT = $_POST['NIT'];
    $BL = $_POST['BL'];
    $Tipo_de_cargas = $_POST['Tipo_de_cargas'];
    $Modalidad = $_POST['Modalidad'];
    $Aliado = $_POST['Aliado'];
    $Estado_de_operacion = $_POST['Estado_de_operacion'];
    $Ejecutivo_responsable = $_POST['Ejecutivo_responsable'];
    $Fecha_de_apertura = $_POST['Fecha_de_apertura'];
    $Facturado = $_POST['Facturado'];

    $query = "INSERT INTO do(DO, IMPORTADOR, NIT, BL, TIPO_DE_CARGAS, 
                             MODALIDAD, ALIADO, ESTADO_DE_OPERACION, 
                             EJECUTIVO_RESPONSABLE, FECHA_DE_APERTURA, 
                             FACTURADO) VALUES ('$DO', '$Importador', '$NIT', '$BL',
                             '$Tipo_de_cargas', '$Modalidad', '$Aliado',
                             '$Estado_de_operacion', '$Ejecutivo_responsable',
                             '$Fecha_de_apertura', '$Facturado')";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        $_SESSION['message'] = "El registro no se guardado correctamente, compruebe que los valores sean correctos.";
        $_SESSION['message-type'] = "danger";
        header("location: ../index.php");
    } else {
        $_SESSION['message'] = "El resgistro se guardado correctamente";
        $_SESSION['message-type'] = "success";
        header("location: ../index.php");
    }
}
?>