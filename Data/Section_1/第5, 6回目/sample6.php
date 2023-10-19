<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>

<!--(1)入力部分textboxの設定 -->
<form action = "http://localhost/sample6.php" method = "post">
<input type = "text" name = "num"/>
<input type = "submit" name = "名前" value = "送信"/>
</from>

<?php
print "<body bgcolor = \"#FFFFFF\" text = \"#000000\">";
print "<h1> sample6.php 作者 藤波 和丸(I21I079)</h1>";

//(2)numのデータをとりだす。
print "「{$_POST["num"]}」が入力されました。<br/>\n";

?>

</body>
</html>
