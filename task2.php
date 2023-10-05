<?php

$textFile = 'data.txt';

if ($_POST)
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $comment = $_POST['comment'];

    $result = "$email $name $rate $comment \n";

    file_put_contents($textFile, $result,FILE_APPEND);
}

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
    <style>
        .form-field {
            margin-bottom: 3px;
        }
    </style>
</head>
<body>
    <form action="task2.php" method="post">
        <label for="email">Введите email</label>
        <input required name="email" id="email" type="email" class="form-field">
        <br>
        <label for="name">Введите Имя</label>
        <input required name="name" id="name" type="text" maxlength="20" class="form-field">
        <br>
        <label for="rate">Оценка страницы</label>
        <input onkeypress="return event.charCode >= 48" required name="rate" id="rate" type="number" min="0" max="10" class="form-field">
        <br>
        <label for="comment">Комментарий</label>
        <input required name="comment" id="comment" maxlength="500" type="text" class="form-field">
        <br>
        <input type="submit" name="submit" value="добавить ">
    </form>
</body>
</html>
