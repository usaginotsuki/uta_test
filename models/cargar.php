<?php
include 'conexion.php';
$sql="select * from estudiantesu";
$respuesta=$conn->query($sql);
$result=array();

while($estudiantes=$respuesta->fetch_assoc()){
    array_push($result,$estudiantes);
}

echo json_encode($result);
?>
