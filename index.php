<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации — Ларионов</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Лабораторная работа №10 — Ларионов</h1>
        
        <h2>Форма регистрации</h2>
        <form action="action.php" method="POST">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" placeholder="Введите ваше имя" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="example@mail.com" required>
            </div>
            
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" placeholder="Минимум 6 символов" required minlength="6">
            </div>
            
            <div class="form-group">
                <label for="confirm_password">Подтвердите пароль:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Повторите пароль" required>
            </div>
            
            <div class="form-group">
                <label for="gender">Пол:</label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Выберите пол</option>
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                    <option value="other">Другой</option>
                </select>
            </div>
            
            <div class="form-group checkbox">
                <label>
                    <input type="checkbox" name="agree" required>
                    Я согласен с условиями обработки данных
                </label>
            </div>
            
            <button type="submit" name="register">Зарегистрироваться</button>
        </form>
        
        <hr>
        
        <h2>Калькулятор</h2>
        <form action="action.php" method="POST">
            <div class="form-group">
                <label for="num1">Первое число:</label>
                <input type="number" id="num1" name="num1" step="any" required>
            </div>
            
            <div class="form-group">
                <label for="num2">Второе число:</label>
                <input type="number" id="num2" name="num2" step="any" required>
            </div>
            
            <div class="form-group buttons">
                <button type="submit" name="add" class="btn-calc">+</button>
                <button type="submit" name="subtract" class="btn-calc">−</button>
                <button type="submit" name="multiply" class="btn-calc">×</button>
                <button type="submit" name="divide" class="btn-calc">÷</button>
            </div>
        </form>
    </div>
</body>
</html>
<hr>
<h2>Калькулятор</h2>
<form action="action.php" method="POST">
    <div class="form-group">
        <label for="num1">Первое число:</label>
        <input type="number" id="num1" name="num1" step="any" required>
    </div>
    
    <div class="form-group">
        <label for="num2">Второе число:</label>
        <input type="number" id="num2" name="num2" step="any" required>
    </div>
    
    <div class="form-group buttons">
        <button type="submit" name="add">+</button>
        <button type="submit" name="subtract">−</button>
        <button type="submit" name="multiply">×</button>
        <button type="submit" name="divide">÷</button>
    </div>
</form>
