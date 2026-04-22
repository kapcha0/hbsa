<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ЛЗ №11: Работа с файлами</title>
    <style>
        body { font-family: sans-serif; padding: 20px; line-height: 1.6; }
        h2 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
        .result { 
            background: #f8f9fa; 
            padding: 15px; 
            margin: 10px 0; 
            border-left: 4px solid #2ecc71;
            border-radius: 3px;
        }
        .error { 
            background: #fee; 
            border-left-color: #e74c3c; 
        }
    </style>
</head>
<body>

<h1>Лабораторная работа №11 — Ваша Фамилия</h1>

<?php
// Создаем папку для тестовых файлов
$testDir = __DIR__ . '/test_files/';
if (!file_exists($testDir)) {
    mkdir($testDir, 0775, true);
}

// ==========================================
// ЧАСТЬ 1: Работа с файлами
// ==========================================
echo "<h2>ЧАСТЬ 1: Работа с файлами</h2>";

// Задание 1: Создать файл и записать
echo "<h3>Задание 1: Создание и запись в файл</h3>";
$file = $testDir . 'test.txt';
$f = fopen($file, 'w');
fwrite($f, 'Привет, мир!');
fclose($f);
echo "<div class='result'>✅ Файл test.txt создан и записан.</div>";

// Задание 2: Считать и вывести
echo "<h3>Задание 2: Чтение из файла</h3>";
$content = file_get_contents($file);
echo "<div class='result'>📄 Содержимое файла: <b>$content</b></div>";

// Задание 3: Переименовать
echo "<h3>Задание 3: Переименование файла</h3>";
$newFile = $testDir . 'mir.txt';
rename($file, $newFile);
echo "<div class='result'>✅ Файл переименован в mir.txt</div>";

// Задание 4: Создать папку и переместить
echo "<h3>Задание 4: Создание папки и перемещение файла</h3>";
$folder = $testDir . 'folder/';
if (!file_exists($folder)) {
    mkdir($folder, 0775, true);
}
rename($newFile, $folder . 'mir.txt');
echo "<div class='result'>✅ Папка 'folder' создана, файл перемещен внутрь</div>";

// Задание 5: Копирование
echo "<h3>Задание 5: Копирование файла</h3>";
copy($folder . 'mir.txt', $folder . 'world.txt');
echo "<div class='result'>✅ Создана копия world.txt</div>";

// Задание 6: Размер файла
echo "<h3>Задание 6: Определение размера файла</h3>";
$sizeBytes = filesize($folder . 'world.txt');
$sizeKB = round($sizeBytes / 1024, 2);
$sizeMB = round($sizeBytes / 1024 / 1024, 4);
echo "<div class='result'>
📊 Размер файла world.txt:<br>
• $sizeBytes байт<br>
• $sizeKB Кб<br>
• $sizeMB Мб
</div>";

// Задание 7: Удаление файла
echo "<h3>Задание 7: Удаление файла</h3>";
unlink($folder . 'world.txt');
echo "<div class='result'>🗑️ Файл world.txt удален</div>";

// Задание 8: Проверка существования
echo "<h3>Задание 8: Проверка существования файлов</h3>";
$existsWorld = file_exists($folder . 'world.txt') ? 'существует' : 'не существует';
$existsMir = file_exists($folder . 'mir.txt') ? 'существует' : 'не существует';
echo "<div class='result'>
🔍 Проверка:<br>
• world.txt: $existsWorld<br>
• mir.txt: $existsMir
</div>";

// ==========================================
// ЧАСТЬ 2: Работа с папками
// ==========================================
echo "<hr><h2>ЧАСТЬ 2: Работа с папками</h2>";

// Задание 1: Создать папку test
echo "<h3>Задание 1: Создание папки test</h3>";
$testFolder = $testDir . 'test/';
mkdir($testFolder, 0775);
echo "<div class='result'>✅ Папка test создана</div>";

// Задание 2: Переименовать в www
echo "<h3>Задание 2: Переименование папки</h3>";
$wwwFolder = $testDir . 'www/';
rename($testFolder, $wwwFolder);
echo "<div class='result'>✅ Папка переименована в www</div>";

// Задание 3: Удалить папку
echo "<h3>Задание 3: Удаление папки</h3>";
rmdir($wwwFolder);
echo "<div class='result'>🗑️ Папка www удалена</div>";

// Задание 4: Создать папки из массива
echo "<h3>Задание 4: Создание папок из массива</h3>";
$arrNames = ['group1', 'group2', 'group3'];
mkdir($testFolder, 0775); // Создаем заново
foreach ($arrNames as $name) {
    $folderPath = $testFolder . $name . '/';
    if (!file_exists($folderPath)) {
        mkdir($folderPath, 0775);
    }
}
echo "<div class='result'>✅ Созданы подпапки: " . implode(', ', $arrNames) . "</div>";

// Задание 5: Вывод файлов jpg
echo "<h3>Задание 5: Поиск файлов с расширением jpg</h3>";
// Создадим тестовые файлы
touch($testDir . 'image1.jpg');
touch($testDir . 'image2.jpg');
touch($testDir . 'document.txt');
touch($testDir . 'photo.png');

$jpgFiles = glob($testDir . '*.jpg');
echo "<div class='result'>
📁 Найденные JPG файлы:<br>";
foreach ($jpgFiles as $file) {
    echo "• " . basename($file) . " (размер: " . filesize($file) . " байт)<br>";
}
echo "</div>";

?>

<hr>
<h2>📋 Итог</h2>
<div class="result">
Все операции с файлами и папками выполнены успешно!<br>
Проверьте папку <b>/var/www/larionov.com/test_files/</b> для просмотра созданных файлов.
</div>

</body>
</html>
