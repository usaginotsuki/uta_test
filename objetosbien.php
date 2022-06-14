<?php
class Automovil{
    public $marca;
    public $modelo;

    public function mostrar(){
        echo "hola soy un auto $this->marca, modelo $this->modelo";
    }

}

$au1 = new Automovil();
$au1->marca = "toyota1";
$au1->modelo = "yaris1";
$au1->mostrar();
echo "<br>";
$au2 = new Automovil();
$au2->marca = "ford";
$au2->modelo = "f150";
$au2->mostrar();
?>

