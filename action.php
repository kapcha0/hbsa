<?php
// Обработка формы регистрации
if (isset($_POST['register'])) {
    $errors = [];
    
    // Валидация полей
    if (empty($_POST['name'])) {
        $errors[] = "Имя обязательно для заполнения";
    }
    
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Введите корректный email";
    }
    
    if (empty($_POST['password']) || strlen($_POST['password']) < 6) {
        $errors[] = "Пароль должен быть не менее 6 символов";
    }
    
    if ($_POST['password'] !== $_POST['confirm_password']) {
        $errors[] = "Пароли не совпадают";
    }
    
    if (empty($_POST['gender'])) {
        $errors[] = "Выберите пол";
    }
    
    if (empty($_POST['agree'])) {
        $errors[] = "Необходимо согласие с условиями";
    }
    
    // Вывод результатов
    echo "<!DOCTYPE html>
    <html lang='ru'>
    <head>
        <meta charset='UTF-8'>
        <title>Результат регистрации</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='container'>
            <h1>Результат регистрации</h1>";
    
    if (empty($errors)) {
        echo "<div class='success'>
                <h2>✅ Регистрация успешна!</h2>
                <p><strong>Имя:</strong> " . htmlspecialchars($_POST['name']) . "</p>
                <p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>
                <p><strong>Пол:</strong> " . htmlspecialchars($_POST['gender']) . "</p>
              </div>";
    } else {
        echo "<div class='error'>
                <h2>❌ Ошибки:</h2>
                <ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul></div>";
    }
    
    echo "<a href='index.php' class='back-link'>← Вернуться к форме</a>
        </div>
    </body>
    </html>";
}

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
    
    echo "<!DOCTYPE html>
    <html lang='ru'>
    <head>
        <meta charset='UTF-8'>
        <title>Результат вычислений</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='container'>
            <h1>Результат вычислений</h1>";
    
    if ($error) {
        echo "<div class='error'><h2>$error</h2></div>";
    } else {
        echo "<div class='success'>
                <h2>✅ Результат:</h2>
                <p class='calculation'>$num1 $operation $num2 = <strong>$result</strong></p>
              </div>";
    }
    
    echo "<a href='index.php' class='back-link'>← Вернуться к форме</a>
        </div>
    </body>
    </html>";
}
?>
