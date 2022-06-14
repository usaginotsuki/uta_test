<?php
include "conexion.php";
$consulta="select * from estudiantesU";
echo $consulta;
$resultado = $conn->query($consulta);
while($fila=$resultado->fetch_array()){
print_r($fila);
}
?>
