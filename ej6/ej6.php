<?php

function division($num1, $num2){
    if ($num2 == 0) {
        throw new Exception("El divisor no puede ser 0");
    }else {
        $resul = $num1 / $num2;
        return "Division-> ".$num1."/".$num2." = " . $resul;
    }
}


try {
    echo division(6,2);
    echo "<br>";
    echo division(34,7);
    echo "<br>";
    echo division(3, 0);
}catch(Exception $e){
    echo "¡ERROR!" . $e->getMessage();
}