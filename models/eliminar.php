<?php
include 'conexion.php';
$cedula=$_POST["est_cedula"];
$sqlUpdate = "DELETE FROM estudiantesU WHERE est_cedula = '$cedula'";
if ($mysqli->query($sqlUpdate)===TRUE) {
    console_log("Se eliminó correctamente");
    echo json_encode("Se eliminó correctamente");
} else {
    console_log("Error no se eliminó: ".$sqlUpdate.$mysqli->error);
    echo json_encode("Error no se eliminó: ".$sqlUpdate.$mysqli->error);
}
$mysqli->close();
?>

<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}