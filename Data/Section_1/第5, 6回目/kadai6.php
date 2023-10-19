<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>

<!--(1)入力部分textboxの設定 -->
<form action="http://localhost/kadai6.php" method="post">
a:<input type = "text" name = "value1"/>
<br/>
b:<input type = "text" name = "value2"/> 
<input type="submit" value="送信"/>
</form>

<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">";
print "<h1> kadai6.php 作者 藤波 和丸(I21I079)</h1>";


//textboxのデータの取り出し
$a = $_POST["value1"];
$b = $_POST["value2"];

//四則演算
$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;

//計算結果の出力
print "\$aに「{$a}」が入力されました。<br>\n";
print "\$bに「{$b}」が入力されました。<br>\n";
print "\$a+\$b={$c} <br>\n";
print "\$a-\$b={$d} <br>\n";
print "\$a*\$b={$e} <br>\n";
print "\$a/\$b={$f} <br>\n";

?>
</body>
</html>
