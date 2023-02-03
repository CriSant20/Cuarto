<?php

include 'conexion.php';
$cedula=$_POST["EST_CEDULA"];
$nombre=$_POST["EST_NOMBRE"];
$apellido=$_POST["EST_APELLIDO"];
$telefono=$_POST["EST_TELEFONO"];
$direccion=$_POST["EST_DIRECCION"];

$SqlInsertar="INSERT INTO estudiantes(EST_CEDULA,EST_NOMBRE,EST_APELLIDO,EST_TELEFONO,EST_DIRECCION,EST_ESTADO)
 VALUES('$cedula','$nombre','$apellido','$telefono','$direccion','0')";
 if($conn->query($SqlInsertar)==TRUE){
echo json_encode ("se inserto correctamente");
 }else{
   echo json_encode("no se inserto correctamente".$conn->error);
 }
 $conn->close();
?>