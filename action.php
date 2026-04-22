// Обработка калькулятора
if (isset($_POST['add']) || isset($_POST['subtract']) || 
    isset($_POST['multiply']) || isset($_POST['divide'])) {
    
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $result = 0;
    $operation = '';
    $error = '';
    
    if (isset($_POST['add'])) {
        $result = $num1 + $num2;
        $operation = '+';
    } elseif (isset($_POST['subtract'])) {
        $result = $num1 - $num2;
        $operation = '−';
    } elseif (isset($_POST['multiply'])) {
        $result = $num1 * $num2;
        $operation = '×';
    } elseif (isset($_POST['divide'])) {
        if ($num2 == 0) {
            $error = "❌ Деление на ноль невозможно!";
        } else {
            $result = $num1 / $num2;
            $operation = '÷';
        }
    }
    
    // Вывод результата
    if ($error) {
        echo "<div class='error'>$error</div>";
    } else {
        echo "<div class='success'>Результат: $num1 $operation $num2 = <strong>$result</strong></div>";
    }
}
