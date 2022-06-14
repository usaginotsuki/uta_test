<?php
$a=5;
$b=5;
if($a<$b){
    echo "a es mayor";
} 
    else if($a==$b){
        echo "a y b son iguales";
    } else {
        echo "b es mayor";
    }
    echo "<br>";
    $op= "lunes";
    switch($op){
        case 'sabado':
            echo "voy a estudiar";
            break;
            case 'viernes':
                echo "voy a bailar";
                break;
                default: echo "voy a clases";
    }
    echo "<br>";
$n=0;
    while($n<5){
        echo $n;
        $n++;
    }
    echo "<br>";
    for($i=0;$i<5;$i++){
        echo "El incremento de ".$i-1."es: ".$i;
        echo "<br>";
    }
    ?>


