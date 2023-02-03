<?php
    include 'conexion.php';
    $cedula = $_POST['EST_CEDULA'];
    $sqlInsertar = "UPDATE estudiantes SET EST_ESTADO='1' WHERE EST_CEDULA='$cedula'";
    if($conn->query($sqlInsertar) == TRUE){
        echo json_encode("Se elimino el registro de estudiante correctamente");
    }else{
        echo json_encode("No se elimino los datos de estudiante".$conn->error);
    }
    $conn->close();
?>