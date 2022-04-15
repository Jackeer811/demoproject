<?php

date_default_timezone_set("America/Bogota"); // Zona de tiempo America/Bogota

include('../includes/db.php');

if (isset($_POST['guardar'])) {

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

    $query = "INSERT INTO radicacion_de_poderes(DO, PUERTO, NIT, FECHA_DE_RADICACION, FECHA_DE_VENCIMIENTO_1,
                                                PLAZO_DIAS_1, DIAS_FALTANTES_1, FECHA_DE_AUTENTICACION, FECHA_DE_VENCIMIENTO_2,
                                                PLAZO_DIAS_2, DIAS_FALTANTES_2) VALUES ('$DO', '$Puerto', '$NIT', '$Fecha_de_radicacion',
                                                                     '$Fecha_de_vencimiento_1', '$Plazo_dias_1', '$Dias_faltantes_1',
                                                                     '$Fecha_de_autenticacion', '$Fecha_de_vencimiento_2',
                                                                     '$Plazo_dias_2', '$Dias_faltantes_2')";

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