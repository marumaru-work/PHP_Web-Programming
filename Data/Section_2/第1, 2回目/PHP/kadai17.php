<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai17.php 作者 藤波 和丸(I21I079)</h1>\n";
//入力部分textboxの設定
print "<form action=\"http://localhost/kadai17.php\" method=\"post\"> \n";
print "テストの点数: \n";
print "<input type=\"text\" name=\"a\"/> <br> \n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>\n";

//入力チェック
if(isset($_POST["a"]))
{
	//入力を変数に移動
	$score = $_POST["a"];

	//関数の結果をif文の条件で用いる
	$seiseki = hennkann($score);

	if (hennkann($score) != -1)
	{
		print "テストの点{$score}を変換した成績{$seiseki}です。";
		if ($seiseki >= 80 && $seiseki <= 100)
		{
			print "ランクAです。<br>\n";
		}
		else if ($seiseki >= 70 && $seiseki < 80)
		{
			print "ランクBです。<br>\n";
		}
		else if ($seiseki >= 60 && $seiseki < 70)
		{
			print "ランクCです。<br>\n";
		}
		else
		{
			print "ランクDです。<br>\n";
		}
	}
	else
	{
		print "テストの点{$score}は入力値が不正です。";
	}
}

//関数hennkann 引数$tokuten 戻り値$val
function hennkann($tokuten)
{
	if ($tokuten >= 80 && $tokuten <= 150)
	{
		$val = ($tokuten - 80) * (20 / 70) + 80;
	}
	else if ($tokuten >= 0 && $tokuten < 80)
	{
		$val = $tokuten;
	}
	else
	{
		$val = -1;
	}
	return $val;
}
?>

</body>
</html>
