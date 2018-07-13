<?php
$dest = __DIR__.'/test'.$_FILES['test']['name'];

if (move_uploaded_file($_FILES['test']['tmp_name'], $dest)) {
    echo "Файл загружен";
} else {
    echo "Файл не загружен";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание</title>
</head>
<body>
<form action="list.php" method="post" enctype="multipart/form-data">
    Отправить: <input name="test" type="file">
    </br>
    <input type="submit" value="Отправить файл">
</form>
</body>
</html>


