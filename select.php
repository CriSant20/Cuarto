<?php

include 'conexion.php';

$sqlSelect="SELECT * FROM estudiantes WHERE EST_ESTADO='0'";
$respuesta=$conn->query($sqlSelect);
$result=array();
if($respuesta->num_rows>0){
    while($filaestudiante=$respuesta->fetch_array()){
        array_push($result,$filaestudiante);
    }
    
}
else{
    $result="no hay estudiantes";
}

echo json_encode($result);

?>