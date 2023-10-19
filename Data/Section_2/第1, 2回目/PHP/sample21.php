<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>サンプル</title>
</head>
<body>
<?php
print "<h1> sample21.php 作者 椎名(IxxIxxxx)</h1>\n";

//入力部分textboxの設定
print "<form action=\"http://localhost:8080/project/sample21.php\" method=\"post\"> \n";
print "商品名: \n";
print "<input type=\"text\" name=\"n\"/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//(1)配列の値の設定
$table = array(
	"リンゴ"   => array("price" => 250,"english" => "apple" ), 
	"オレンジ" => array("price" => 100,"english" => "orange"),
	"イチゴ"   => array("price" => 380,"english" => "strawberyy" ), 
	"メロン"   => array("price" => 450,"english" => "melon" )
);

//入力チェック
if(isset($_POST["n"]))
{
	//入力を変数に格納
	$n = $_POST["n"];

	// (2) 表の表示の関数
	table_print1($table);
	table_print2($table);
	// table_print3($table);
}	

function head_print($h)
{
	print "<h{$h}>果物の価格と英単語の表</h{$h}>";
}

function table_print1($table1)
{
	//表題の出力
	head_print(2);
	//表の出力
	print "<table border=\"2\">\n";
	//項目部の表示
	print "<tr bgcolor=\"#BBBBBB\">";
	print "<th>商品項目</th> <th>キー</th> <th>商品価格</th> <th>キー</th><th>英単語</th>";
	print "</tr>\n";
	//(3)配列の各要素を取り出して、キーと値と英単語を表示
	foreach( $table1 as $product => $array )
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

function table_print2(&$table2)
{
	//表題の出力
	head_print(2);
	//表の出力
	print "<table border=\"2\">\n";
	//項目部の表示
	print "<tr bgcolor=\"#BBBBBB\">";
	print "<th>商品項目</th> <th>キー</th> <th>商品価格</th> <th>キー</th><th>英単語</th>";
	print "</tr>\n";
	//(3)配列の各要素を取り出して、キーと値と英単語を表示
	foreach($table2 as $product => $array)
	{
		print "<tr>";
		print "<td>{$product}</td>";
		foreach($array as $key => $value)
		{
			print "<td>{$key}</td><td>{$value}</td>";
			if ($product == "メロン" && $key == "price")
			{
				$table2[$product][$key] = 500;
			}
		}
		print "</tr>\n";
	}
	//表の終りのタグ
	print "</table>\n <br>\n";
}

?>

</body>
</html>

