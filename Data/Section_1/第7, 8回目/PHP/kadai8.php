<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>

<!--この後すぐにPHPのプログラム -->

<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n";
print "<h1> kadai8.php 作者 藤波 和丸(I21I079)</h1>\n";


//(1)入力部分textboxの設定
print "<form action=\"http://localhost/kadai8.php\" method=\"post\"> \n";
print "a:";
print "<input type=\"text\" name=\"a\"/>  <br/>\n";
print "b:";
print "<input type=\"text\" name=\"b\"/>  <br/>\n";
print "c:";
print "<input type=\"text\" name=\"c\"/>  <br/>\n";
print "<input type=\"submit\" value=\"送信\"/>";
print "</form><br/>\n";


//入力チェック
if(isset($_POST["a"])&& isset($_POST["b"]) && isset($_POST["c"])){

//入力を変数に格納
	$a = $_POST["a"];
	$b = $_POST["b"];
	$c = $_POST["c"];

	print "{$a} x^2 + {$b} x + {$c} の解は、 <br/>\n";
	
//判別式の計算	
	$d = ($b*$b - 4*$a*$c);
	
//判別式の判定と解の表示
	if($d > 0)
	{
		$x1 = (-$b + sqrt($d)) / (2 * $a);
		$x2 = (-$b - sqrt($d)) / (2 * $a);
		print "判別式{$d}で、解が2つあります。 x1={$x1},x2={$x2}<br>\n";
	}
	else if($d == 0)
	{
		$x1 = (-$b + sqrt($d)) / (2 * $a);
		print "判別式{$d}で、重解で解が１つあります。x1={$x1} <br>\n";	
	}
	else
	{
		print "判別式{$d}で、解はありません。<br>\n";
	}
}
?>

</body>
</html>
