<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-B2.php 作者 藤波 和丸(I21I079)</h1>\n";

//(1)配列の値の設定
$price = array("からあげ弁当" => 500, "オムライス" => 410, "カレーライス" => 390, "カツ丼" => 430, "サンドイッチ" => 270);


//(2)合計の計算
$max = -INF;
foreach ($price as $product => $value)
{
    if ($max < $value)
    {
        $max = $value;
        $max_product = $product;
    }
}

//(3)表示
print "最高値の商品は{$max_product}です。<br/>\n";
?>
</body></html>
