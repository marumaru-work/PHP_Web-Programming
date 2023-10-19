<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n";
print "<h1> kadai9-1.php 作者 藤波 和丸(I21I079)</h1>\n";

//(1)入力部分textboxの設定
print "<form action=\"http://localhost/kadai9-1.php\" method=\"post\"> \n";
print "i: \n";
print "<input type=\"text\" name=\"n\"/>  <br/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>";

//(2)入力チェック
if(isset($_POST["n"]))
{
	//入力を変数に格納
	$n = $_POST["n"];

	//(3)$i=0から$i<$n * ($n + 1) / 2の間、$iに１ずつ加えて繰り返す
	for($i=0; $i <= $n * ($n + 1) / 2; $i++)
	{
		print "{$i} <br>\n";
	}
}
?>


</body>
</html>
