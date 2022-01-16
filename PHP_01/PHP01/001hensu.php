<html>
    <head>
        <meta charset="utf-8">
        <title>変数</title>
    </head>
<body>

<!-- 以下にPHPを記述 -->
<?php
//変数
$name = '中野';
$last_name = '憲一';
echo($name);
echo($last_name);

echo $name;
echo $last_name;
echo $name + $last_name;
//数値の変数
$age = 28;
echo $age;
//改行
echo '<br>';
//簡単なおみくじ
$num = rand(1,2);
if ( $num == 1){
    echo 'あたり';
}else{
    echo 'はずれ';
}
echo '<br>';

?>












<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>