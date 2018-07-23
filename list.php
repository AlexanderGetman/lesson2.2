<?php
header('Content-Type: text/html; charset=utf-8');
$dir = __DIR__.'/test';

$list = array_diff(scandir($dir), array('..', '.'));
$counter = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список тестов</title>
</head>
<body>
<h1>Список тестов</h1>
<?php foreach ($list as $tests): ?>
<li><?php echo '<a href="test.php?test='.$tests.'">Тест #'.$counter++.'</a>'.'</br>';?></li>
<?php endforeach;?>
    <p>Перейти на страницу <a href="admin.php">загрузки теста</a></p>
</body>
</html>


