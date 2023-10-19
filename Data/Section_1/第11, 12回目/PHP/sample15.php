<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n";
print "<h1> sample15.php 作者 藤波 和丸(I21I079)</h1>\n";


//入力部分textboxの設定
print "<form action=\"http://localhost/sample15.php\" method=\"post\"> \n";
print "商品名: \n";
print "<input type=\"text\" name=\"n\"/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//(1)配列の値の設定

$price["ラーメン"] = 410;
$price["きつねうどん"] = 400;
$price["そうめん"] = 350;
$price["そば"] = 390;

//(2)キーで並び替え
ksort($price);

//入力チェック
if(isset($_POST["n"]))
{

	//入力を変数に格納
		$n = $_POST["n"];
		
		print"{$n}は{$price[$n]}円です。";
		
	//表の出力
		print "<table border=\"2\">\n";
	//項目部の表示
		print "<tr bgcolor=\"#BBBBBB\">";
		print "<th>商品項目</th><th>商品価格</th>";
		print "</tr>\n";
	//(3)配列の各要素を取り出して、キーと値を表示

	foreach ($price as $product => $value)
	{
		print "<tr>";
		print "<td>{$product}</td>";
		print "<td>{$value}</td>";
		print "</tr>\n";
	}

	//表の終りのタグ
		print "</table>\n";
}
?>

</body>
</html>
