<?php
include 'conexion.php';
$sql="SELECT * from estudiantesu";
$respuesta=$conn->query($sql);
$result=array();
if($respuesta->num_rows>0){
while($estudiantes=$respuesta->fetch_assoc()){
array_push($result,$estudiantes);
}
} else{
    $result="no hay estudiantes";
}
echo json_encode($result);
?>
