
<?php
$lines = file('data/data.txt');
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST['submit'])){
$time = date("Y/m/d H:i:s");
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$email = htmlspecialchars($_POST['mail'], ENT_QUOTES);
$question1 = htmlspecialchars($_POST['question1'], ENT_QUOTES);
$question2 = htmlspecialchars($_POST['question2'], ENT_QUOTES);
$question3 = htmlspecialchars($_POST['question3'], ENT_QUOTES);
$data = "$time,$name,$mail,$question1,$question2,$question3\n";
array_unshift($lines, $data);
}
}

?>
<html>
<body>
<form method="POST" action="<?=$_SERVER['SCRIPT_NAME']?>">
名前：<input type="text" name="name" /><br />
Email：<input type="text" name="mail" /><br />
問合せ1：<input type="text" name="question1" /><br />
問合せ2：<input type="text" name="question2" /><br />
問合せ3：<input type="text" name="question3" /><br />
<input type="submit" name="submit" value="送信" />
<input type="reset" value="リセット" />(6)
</form>

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
$fp = fopen('data/data.txt', "r");
foreach($lines as $line){
$item = explode(",", $line);
print"<tr>";
for($i=0; $i<=sizeof($item); $i++){
print"<td>{$item[$i]}</td>";
}
print"</tr>";
}
fclose($fp);
?>
</table>

<?php
$fp = fopen('data/data.txt', "w");
flock($fp, LOCK_EX);
foreach($lines as $line){
fputs($fp, $line);
}
flock($fp, LOCK_UN);
fclose($fp);
?>
</body>
</html>