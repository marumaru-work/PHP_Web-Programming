<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai18.php 作者 藤波 和丸(I21I079)</h1>\n";

//入力部分textboxの設定
print "<form action=\"http://localhost/kadai18.php\" method=\"post\"> \n";
print "変更する商品名: \n";
print "<input type=\"text\" name=\"a\"/>\n";
print "変更する商品価格: \n";
print "<input type=\"text\" name=\"b\"/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//(1)配列の値の設定
$table = array(
	"テレビ"   => array("price" => 150000,"english" => "TV"), 
	"スマートフォン" => array("price" => 100000,"english" => "smartphone"),
	"ノートパソコン" => array("price" => 250000,"english" => "laptop"), 
	"ラジオ" => array("price" => 5500,"english" => "radio")
);

//入力チェック
if (isset($_POST["a"])&& isset($_POST["b"]))
{
	//入力を変数に格納
	$pro = $_POST["a"];
	$pri = $_POST["b"];
	updateprice($table, $pro, $pri);
}
else
{
	table_print($table);
}

//表題を引数$hの値に従って出力する関数
function head_print($h)
{
	print "<h{$h}>電化製品の価格と英単語の表</h{$h}>";
}

// 引数$tableを表示する
function table_print($table)
{
	//表題の出力
	head_print(2);
	//表の出力
	print "<table border=\"2\">\n";
	//項目部の表示
	print "<tr bgcolor=\"#BBBBBB\">";
	print "<th>商品項目</th> <th>キー</th> <th>商品価格</th> <th>キー</th> <th>英単語</th>";
	print "</tr>\n";
	//(3)配列の各要素を取り出して、キーと値と英単語を表示
	foreach($table as $product => $array)
	{
		print "<tr>";
		print "<td>{$product}</td>";
		foreach($array as $key => $value)
		{
			print "<td>{$key}</td><td>{$value}</td>";
		}
		print "</tr>\n";
	}
	//表の終りのタグ
	print "</table>\n <br>\n";
}
//引数の商品$proの価格を$priに変更
function updateprice(&$table2, $product, $price)
{
	$flag = 0;
	foreach ($table2 as $key => $value)
	{
		if ($key == $product)
		{
			$flag = 1;
		}
	}
	if ($flag)
	{
		$table2[$product]["price"] = $price;
		print "商品の金額が変更されました。<br>\n";
	}
	else
	{
		print "商品が見つかりませんでした。<br>\n";
	}
	table_print($table2);
}
?>

</body>
</html>

