<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-A2.php 作者 藤波 和丸(I21I079)</h1>\n";

//(1)配列の値の設定
$price = array("からあげ弁当" => 500, "オムライス" => 410, "カレーライス" => 390, "カツ丼" => 430, "サンドイッチ" => 270);

//(2)合計の計算
$total = 0;
foreach ($price as $product => $value)
{
    $total += $value;
}

//(3)個数と平均の計算
$n = count($price);
$average = $total / count($price);

//(4)表示
print "商品個数{$n} <br>\n";
print"合計{$total} <br>\n";
print"平均{$average}";
?>
</body></html>

