<?php
if (isset($_POST['btn'])) {
    $num = $_POST['num'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $operators = array('+', '-', '*', '/', '%',);
    $sum = 0;
    $sub = 0;
    $mul = 0;
    $div = 0;
    $mod = 0;
    switch ($operator) {
        case '+':
            $sum = $num + $num2;
            break;
        case '-':
            $sub = $num - $num2;
            break;
        case '*':
            $mul = $num * $num2;
            break;
        case '/':
            $div = $num / $num2;
            break;
        case '%':
            $mod = $num % $num2;
            break;
        default:
            echo "Wrong operator";
    }
}
?>