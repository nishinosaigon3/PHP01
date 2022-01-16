<html>

<table border="1">
<tr>
<th>日時</th>
<th>名前</th>
<th>Email</th>
<th>問合せ1</th>
<th>問合せ2</th>
<th>問合せ3</th>
</tr>
<?php

$lines = file('data/data.txt');
$file = fopen('data/data.txt', 'r');
foreach($lines as $line){
$item = explode(",", $line);
print"<tr>";
for($i=0; $i<=sizeof($item); $i++){
print"<td>{$item[$i]}</td>";
}
print"</tr>";
}
fclose($file);
?>
</table>
</html>


<?php

// ファイルを開く
// $file = fopen('data/data.txt','r');

// // ファイル内容を1行ずつ読み込んで出力
// //whileはデータの数だけ処理を繰り返す
// while ( $str = fgets($file) ){
//     echo nl2br($str);
// }


// ファイルを閉じる
//fclose($file);


?>