<?php

include('../includes/db.php');

if(isset($_POST['guardar'])){
    $DAV = $_POST['DAV'];
    $Aliado = $_POST['Aliado'];
    $DO = $_POST['DO'];
    $Importador = $_POST['Importador'];

    $query = "INSERT INTO andinas(DAV, ALIADO, DO, IMPORTADOR) VALUES ('$DAV', '$Aliado', '$DO', '$Importador')";

    $result = mysqli_query($conn, $query);
    if(!$result){
        $_SESSION['message'] = "El registro no se guardado correctamente, compruebe que los valores sean correctos.";
        $_SESSION['message-type'] = "danger";
        header("location: ../index.php");
    }else{
        $_SESSION['message'] = "El resgistro se guardado correctamente";
        $_SESSION['message-type'] = "success";
        header("location: ../index.php");
    }
}

?>