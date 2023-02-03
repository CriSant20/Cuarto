<?php
    include "conexion.php";

    $cedula =$_POST["EST_CEDULA"];
    $nombre=$_POST["EST_NOMBRE"];
    $apellido =$_POST["EST_APELLIDO"];
    $direccion=$_POST["EST_DIRECCION"];
    $telefono =$_POST["EST_TELEFONO"];
    
    $Sqlactualizar="UPDATE estudiantes set EST_NOMBRE='$nombre',EST_APELLIDO='$apellido',EST_DIRECCION='$direccion',EST_TELEFONO='$telefono' WHERE EST_CEDULA='$cedula'";
    if($mysqli->query($Sqlactualizar)===TRUE){
        echo json_encode("se edito correctamente");
    }else{
        echo json_encode("Error no se edito".$Sqlactualizar.$mysqli->error);
    }
    $mysqli->close();

?>