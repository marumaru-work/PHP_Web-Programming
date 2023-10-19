<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai28.php 作者 藤波 和丸(I21I079)</h1>\n";
//入力部分ラジオボタンの設定
$tbl_list[0] = "tbl_syouhin";
$tbl_list[1] = "tbl_hanbai";

print "表の選択<br> \n";
print "<form action=\"http://localhost:8080/project/kadai28.php\" method=\"post\"> \n";
foreach($tbl_list as $id =>$value){
	print "<input type =\"radio\" name = \"table\" value = \"{$value}\" ";
	if($id ==0){
		print "checked";
	}
	print "/>";
	print "{$value}";
}
print "<input type = \"submit\" value=\"送信\"/>";
print "</form>";

$dbs = 'mysql:dbname=supermarket_db1;host=localhost';
$user = 'root';
$password="";

$pdo = new PDO($dbs, $user, $password);

// データベースからデータを取得する
//sqlの命令の文字列を設定
//入力チェック

if(!isset($_POST["table"])){ // 最初開いた時には「table」変数はNULLだから
	$tbl = "tbl_syouhin";
}else{
	$tbl=$_POST["table"];
}

$query = "SELECT * FROM {$tbl}";

//sql($queryの文字列)を実行
$stmt = $pdo->prepare($query);
$stmt -> execute();

//取得したデータの行数を取得
$num1 = $stmt->rowCount();
//print("行数{$num1}<br>\n");

//取得したデータのカラム数(フィールド数)を取得
$num2 =  $stmt->columnCount();
//print("カラム数{$num1}<br>\n");

//フィールド名を$num3に入れる
for ($i = 0; $i < $num2; $i++) {
    $meta = $stmt->getColumnMeta($i);
    $num3[] = $meta['name'];
}

//表の出力
print "<table border=\"2\">\n";
//項目部の表示
print "<tr bgcolor=\"#BBBBBB\">";
//(4)配列$num3に項目名を順に格納、表の１行目として表示
for ($i = 0; $i < $num2; $i++) {
    print("<th>{$num3[$i]}</th>");
}
print "</tr>\n";

//データを１行ずつ取得
while($info = $stmt -> fetch(PDO::FETCH_ASSOC)){
		print "<tr>";
	for($i=0;$i<$num2; $i++){
		//(6)表の１行分のデータを項目ごとに区切って出力
		print ("<td> {$info[$num3[$i]]} </td>");
	}
	print "</tr>\n";
}
print "</table>";

?>
</body>
</html>


