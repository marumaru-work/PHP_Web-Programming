<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-A1.php 作者 藤波 和丸(I21I079)</h1>\n";

//(1)配列の値の設定
//$price = array("キャベツ"=>250 , "ホウレンソウ"=>120 , "だいこん"=>150 );
$price[0] = 500;
$price[1] = 410;
$price[2] = 390;
$price[3] = 430;
$price[4] = 270;

$product[0] = "からあげ弁当";
$product[1] = "オムライス";
$product[2] = "カレーライス";
$product[3] = "カツ丼";
$product[4] = "サンドイッチ";

//(2)合計の計算
$total = 0;
for ($i = 0; $i < count($price); $i++)
{
    $total += $price[$i];
}

//(3)個数と平均の計算
$n = count($price);
$average = $total / count($price);

//(4)表示
print "商品個数{$n} <br>\n";
print "合計{$total} <br>\n";
print "平均{$average}";
?>
</body>
</html>
