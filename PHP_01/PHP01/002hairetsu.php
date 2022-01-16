<html>
<head>
    <meta charset="utf-8">
    <title>配列</title>
</head>
<body>

<!-- 以下にPHPを記述 -->
<?php

//配列
$city_names = array('渋谷','原宿','表参道');
echo $city_names;
echo '<br>';
var_dump($city_names);
echo '<br>';
//↑こうするとarrayとしか表示されない
//都市名を表示させるためには↓
echo $city_names[0];
echo '<br>';
echo $city_names[1];
echo '<br>';
echo $city_names[2];

?>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>