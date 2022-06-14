<?php
function saludo(){
    echo "hola cómo estás<br>";
}
saludo();

function despedida($adios){
    echo $adios;
}
despedida("hasta luego<br>");

function retorno($retornar){
    return $retornar;
}
echo retorno("retornar");
?>
