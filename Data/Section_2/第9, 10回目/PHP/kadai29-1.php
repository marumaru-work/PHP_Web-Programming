<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai29-1.php 作者 藤波 和丸(I21I079)</h1>\n";
//入力部分ラジオボタンの設定
$tbl_list[0] = "tbl_syouhin";
$tbl_list[1] = "tbl_hanbai";

print "表の選択<br> \n";
print "<form action=\"http://localhost/kadai29-2.php\" method=\"post\"> \n";
foreach ($tbl_list as $id => $value)
{
	print "<input type =\"radio\" name = \"table\" value = \"{$value}\" ";
	if ($id == 0)
    {
		print "checked";
	}
	print "/>";
	print "{$value}";
}
print "<input type = \"submit\" value=\"送信\"/>";
print "</form>";

?>
</body>
</html>
