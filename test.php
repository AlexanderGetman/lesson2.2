<?php
header('Content-Type: text/html; charset=utf-8');
$filename = __DIR__.DIRECTORY_SEPARATOR.'test'.DIRECTORY_SEPARATOR.$_GET["test"].'.json';
$json = file_get_contents($filename);
$contents = json_decode($json, true);
//print_r($json);
$counter = 1;
$inputName = 'q';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тест</title>
</head>
<body>
<h1>Тест</h1>
<form action="" method="post">
<?php foreach ($contents as $item) :?>
    <fieldset>
        <legend><?php echo $item['question']?></legend>
        <?php foreach ($item['answers'] as $variant) :?><label><input type="radio" name="<?php echo $inputName.$counter++?>"><?php echo $variant;?></label><?php endforeach;?>
    </fieldset>
<?php endforeach;?>
</form>
<input type="submit" placeholder="Отправить"/>
</body>
</html>