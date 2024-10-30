<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    
    switch ($operation) {
        case 'stepen':
            $result = $num1 ** $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            $result = $num2 != 0 ? $num1 / $num2 : 'Ошибка: деление на ноль';
            break;
        default:
            $result = 'АААА!!! ЧТОЖ ВЫ ДЕЛАЕТЕ-ТО????????';
    }
}
?>