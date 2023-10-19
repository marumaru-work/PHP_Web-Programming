<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-F1.php 作者 藤波 和丸(I21I079)</h1>\n";

// $price = array("キャベツ"=>250 , "ホウレンソウ"=>120 , "だいこん"=>150 );
$price[0] = 500;
$price[1] = 410;
$price[2] = 390;
$price[3] = 430;
$price[4] = 270;
$price[5] = 200;
$price[6] = 500;

$product[0] = "からあげ弁当";
$product[1] = "オムライス";
$product[2] = "カレーライス";
$product[3] = "カツ丼";
$product[4] = "カツサンドイッチ";
$product[5] = "アイス";
$product[6] = "パフェ";

$category[0] = "お弁当";
$category[1] = "お弁当";
$category[2] = "お弁当";
$category[3] = "どんぶり";
$category[4] = "サンドイッチ";
$category[5] = "デザート";
$category[6] = "デザート";

$category_list[0] = "お弁当";
$category_list[1] = "どんぶり";
$category_list[2] = "デザート";

$quantity[0] = 200;
$quantity[1] = 130;
$quantity[2] = 125;
$quantity[3] = 80;
$quantity[4] = 230;
$quantity[5] = 90;
$quantity[6] = 100;

for ($i = 0; $i < count($price); $i++)
{
    $uriage[$i] = $price[$i] * $quantity[$i];
}

for ($i = 0; $i < count($category_list); $i++)
{
    $category_sales[$i] = 0;
    for ($j = 0; $j < count($category); $j++)
    {
        if ($category_list[$i] == $category[$j])
        {
            $category_sales[$i] += $uriage[$j];
        }
    }
}

$max = $category_sales[0];
$category_max = 0;
for ($i = 0; $i < count($category_sales); $i++)
{
    if ($max < $category_sales[$i])
    {
        $max = $category_sales[$i];
        $category_max = $i;
    }
}
print "売上最大のカテゴリは、{$max}円で、{$category_list[$category_max]}です。";

?>
</body></html>
