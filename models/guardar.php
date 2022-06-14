<?php
include 'conexion.php';
$cedula=$_POST["est_cedula"];
$nombre=$_POST["est_nombre"];
$apellido=$_POST["est_apellido"];
$direccion=$_POST["est_direccion"];
$telefono=$_POST["est_telefono"];
$sqlInsert="INSERT INTO estudiantesU(est_cedula,est_nombre,est_apellido,est_direccion,est_telefono) VALUES('$cedula','$nombre','$apellido','$direccion','$telefono')";
if($mysqli->query($sqlInsert)===TRUE)
{
    echo json_encode("Se guardó correctamente");
} else{
    echo json_encode("Error no se guardó: ".$sqlInsert.$mysqli->error);
}
$mysqli->close();
?>

