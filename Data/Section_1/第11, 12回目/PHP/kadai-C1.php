<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-C1.php 作者 藤波 和丸(I21I079)</h1>\n";

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

$max = $price[0];
for ($i = 0; $i < count($price); $i++)
{
    if ($max < $price[$i])
    {
        $max = $price[$i];
    }
}

$min = $price[0];
for ($i = 0; $i < count($price); $i++)
{
    if ($min > $price[$i])
    {
        $min = $price[$i];
    }
}

$diff = $max - $min;

print "最低価格 {$min}<br>\n";
print "最高価格 {$max}<br>\n";
print "差は、{$diff}<br/>\n";
?>
</body></html>
