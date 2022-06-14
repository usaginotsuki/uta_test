<?php
$numero=2;
echo "esto es una variable numérica: $numero";
echo "</br>";
var_dump($numero);
echo "</br>";
$palabra= "hola";
echo "esto es una variable string: $palabra";
echo "</br>";
var_dump($palabra);
echo "</br>";
$boolean= true;
echo "esto es una variable booleana: $boolean";
echo "</br>";
var_dump($boolean);
echo "</br>";

$colores= array("rojo","amarillo","verde");
echo "esto es una variable de tipo array $colores[1]";
echo "</br>";
var_dump($colores);
echo "</br>";

$verduras= array("verdura1"=>"lechuga","verdura2"=>"tomate");
echo "$verduras[verdura1]";
echo "</br>";
echo "</br>";

$frutas = (object)["fruta1" => "pera", "frita2" => "manzana"];
echo "</br>".$frutas -> fruta1;
var_dump($frutas);
?>