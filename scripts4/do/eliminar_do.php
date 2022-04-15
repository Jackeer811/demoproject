<?php

include('../../includes/db.php');

if(isset($_GET['ID'])){
    $ID = $_GET['ID'];
    $query = "DELETE FROM do WHERE ID = $ID";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("El registro no se elimino");
    }else{
        $_SESSION['message'] = "El registro se elimino correctamente";
        $_SESSION['message-type'] = "success";
        header("Location: ../../index.php");
    }
}

?>