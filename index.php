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
