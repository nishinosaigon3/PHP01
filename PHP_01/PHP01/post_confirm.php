<?php

// フォームから送られてきたデータを取得し変数に代入
$name = $_POST['name'];
$mail = $_POST['mail'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];

?>

<html>
<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>

    <ul>
        <li> お名前：<?= $name ?> </li>
        <li> Mail：<?= $mail ?> </li>
        <li> お問合せ1: <?= $question1 ?> </li>
        <li> お問合せ2: <?= $question2 ?> </li>
        <li> お問合せ3: <?= $question3 ?> </li>
    </ul>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>