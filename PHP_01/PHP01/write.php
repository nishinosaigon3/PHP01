<?php

//フォームから送られたデータを受け取る。
$name = $_POST['name'];
$mail = $_POST['mail'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];

//日付を取得
$time = date("Y-m-d H:i:s");

//文字作成(日付)
$str = $time . '/'. $name. '/' .$mail. '/'. $question1. '/'. $question2.'/'. $question3;

//File書き込み
$file = fopen('data/data.txt','a');//ファイルを開いて読み込み。fopenはfile open。
fwrite($file,$str."\n");//ファイルへの書き込み
fclose($file);//ファイルを閉じる。



?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>