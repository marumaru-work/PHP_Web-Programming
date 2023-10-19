<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n";
print "<h1> sample17.php 作者 椎名(IxxIxxxx)</h1>\n";

//入力部分textboxの設定
print "<form action=\"http://localhost:8080/project/sample17.php\" method=\"post\"> \n";
print "商品名: \n";
print "<input type=\"text\" name=\"n\"/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//(1)配列の値の設定
$table["リンゴ"]["price"] = 250;
$table["オレンジ"]["price"] = 100;
$table["メロン"]["price"] = 450;
$table["イチゴ"]["price"] = 380;

$table["リンゴ"]["english"] = "apple";
$table["オレンジ"]["english"] = "orange";
$table["メロン"]["english"] = "melon";
$table["イチゴ"]["english"] = "strawberry";

//(2)キーで並び替え
ksort($table);

//入力チェック
if($_POST["n"] != ""){

//入力を変数に格納
	$n = $_POST["n"];
	
//表の出力
	print "<table border=\"2\">\n";
//項目部の表示
	print "<tr bgcolor=\"#BBBBBB\">";
	print "<th>商品項目</th> <th>キー</th> <th>商品価格</th> <th>キー</th><th>英単語</th>";
	print "</tr>\n";
//(3)配列の各要素を取り出して、キーと値と英単語を表示
	foreach( $table as $product => $array ){
		print "<tr>";
		print "<td>{$product}</td>";
		foreach($array as $key => $value){
			print "<td>{$key}</td><td>{$value}</td>";
		}
		print "</tr>\n";
	}
//表の終りのタグ
	print "</table>\n <br>\n";
}
?>

</body>
</html>
