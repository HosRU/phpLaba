<?php 
col(25, 64, 31, 45);

function col($num1, $num2, $num3, $num4){
    $sum = $num1 + $num2 + $num3 + $num4;
    $result = $sum / count(func_get_args());
    echo $result;
}

?>