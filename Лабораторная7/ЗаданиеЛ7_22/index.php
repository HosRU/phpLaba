<?php 
$result = op(25, 26, "-");
echo $result;

function op($num1, $num2, $operator){
    switch($operator){
        case "+": return $num1 + $num2;
            break;
        case "-": return $num1 - $num2;
            break;
        case "/": return $num1 / $num2;
            break;
    }
}

?>