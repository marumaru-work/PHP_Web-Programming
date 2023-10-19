<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai18.php 作者 椎名(IxxIxxxx)</h1>\n";

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
	"リンゴ"   => array("price" => 250,"english" => "apple" ), 
	"オレンジ" => array("price" => 100,"english" => "orange"),
	"イチゴ"   => array("price" => 380,"english" => "strawberyy" ), 
	"メロン"   => array("price" => 450,"english" => "melon" )
);

//入力チェック
if(isset($_POST["a"])&& isset($_POST["b"] )){

//入力を変数に格納
	$pro = $_POST["a"];
	$pri = $_POST["b"];
	
	//項目の修正
	if( table_print2($table,$pro, $pri) == 1){
		print "商品の金額が変更されました。";
	}else{
		print "{$pro}が登録されていませんでした。";
	}

}
table_print1($table);

//表題を引数$hの値に従って出力する関数
function head_print($h){
	print "<h{$h}>果物の価格と英単語の表</h{$h}>";
}

//引数$tableを表示する
function table_print1($table1){
//表題の出力
	head_print(2);
//表の出力
	print "<table border=\"2\">\n";
//項目部の表示
	print "<tr bgcolor=\"#BBBBBB\">";
	print "<th>商品項目</th> <th>キー</th> <th>商品価格</th> <th>キー</th><th>英単語</th>";
	print "</tr>\n";
//配列の各要素を取り出して、キーと値と英単語を表示
	foreach( $table1 as $product => $array ){
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

//引数の商品$proの価格を$priに変更
function table_print2(&$table2, $pro, $pri){
	$fl =0;
	foreach( $table2 as $product => $array ){
		foreach($array as $key => $value){
			if($product == $pro && $key == "price"){
				$table2[$product][$key] = $pri;
				$fl =1;
			}
		}
	}
	//変更したかどうかを判定して、変更していれば1を返す
	if($fl ==1){
	 	return(1);
	}else{
		return(-1);
	}
}
?>

</body>
</html>

