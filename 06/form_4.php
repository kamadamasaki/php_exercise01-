<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

switch ($_GET['operator']) {
    case 'addition':
        echo $num1. ' + '. $num2. ' = '. $num1 + $num2;
        break;
    case 'subtraction':
        echo $num1. ' - '. $num2. ' = '. $num1 - $num2;
        break;
    case 'multiplication':
        echo $num1. ' * '. $num2. ' = '. $num1 * $num2;
        break;
    case 'division':
        echo $num1. ' / '. $num2. ' = '. $num1 / $num2;
        break;
    default:
        echo '正しい演算子を指定して下さい';
        break;
}
