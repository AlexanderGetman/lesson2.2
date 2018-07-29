<?php
header('Content-Type: text/html; charset=utf-8');
$filename = __DIR__.DIRECTORY_SEPARATOR.'test'.DIRECTORY_SEPARATOR.$_GET["test"];
$json = file_get_contents($filename);
$contents = json_decode($json, true);
$tests = $_GET["test"];

$correct = [];
foreach ($contents as $item)
{
    $correct[]=$item['correct'] ;
}


if ($_POST == $correct)
{
    echo 'Вы правильно ответили на вопросы теста';
} else {
    echo 'Попытайтесь ещё раз';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тест</title>
</head>
<body>
<h1>Тест</h1>
<form action=<?php echo '"test.php?test='.$tests.'"'?> method="POST">
<?php foreach ($contents as $item) :?>
    <fieldset>
        <legend><?php echo $item['question']?></legend>
        <?php foreach ($item['answers'] as $variant) :?><label><input type="radio" value="<?php echo $variant;?>" name="<?php echo $item['number']?>"><?php echo $variant;?></label><?php endforeach;?>
    </fieldset>
<?php endforeach;?>
<input type="submit" placeholder="Отправить"/>
</form>
</body>
</html>
