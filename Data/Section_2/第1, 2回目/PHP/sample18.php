<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> sample18.php 作者 藤波 和丸(I21I079)</h1>\n";

//入力部分textboxの設定
print "<form action=\"http://localhost/sample18.php\" method=\"post\"> \n";
print "変数\$a: \n";
print "<input type=\"text\" name=\"a\"/>\n";
print "変数\$b: \n";
print "<input type=\"text\" name=\"b\"/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//入力を変数に移動
$a = $_POST["a"];
$b = $_POST["b"];

//関数による加算と表示
$c = addnum($a, $b);

print "{$a}と{$b}の合計は合計は、{$c}です。<br>\n";

//関数addnum 引数$num1,$num2 戻り値$num3
function addnum($num1, $num2)
{
    $num3 = $num1 + $num2;
    return $num3;
}

?>
</body>
</html>
