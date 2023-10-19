<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-F2.php 作者 藤波 和丸(I21I079)</h1>\n";

$price = array("からあげ弁当" => 500, "オムライス" => 410, "カレーライス" => 390, "カツ丼" => 430, 
                "カツサンドイッチ" => 270, "アイス" => 200, "パフェ" => 500);

$category = array("からあげ弁当" => "お弁当", "オムライス" => "お弁当", "カレーライス" => "お弁当", "カツ丼" => "どんぶり", 
                "カツサンドイッチ" => "サンドイッチ", "アイス" => "デザート", "パフェ" => "デザート");

$quantity = array("からあげ弁当" => 200, "オムライス" => 130, "カレーライス" => 125, "カツ丼" => 80, 
                "カツサンドイッチ" => 230, "アイス" => 90, "パフェ" => 100);

$category_list = array("お弁当", "どんぶり", "デザート");

foreach ($category as $product => $value)
{
    $uriage[$product] = $price[$product] * $quantity[$product];
}

for ($i = 0; $i < count($category_list); $i++)
{
    $category_sales[$category_list[$i]] = 0;
    foreach ($category as $product => $value)
    {
        if ($value == $category_list[$i])
        {
            $category_sales[$value] += $uriage[$product];
        }
    }
}

$max = -INF;
foreach ($category_sales as $list => $value)
{
    if ($max < $value)
    {
        $max = $value;
        $category_max = $list;
    }
}
print "売上最大のカテゴリは、{$max}円で、{$category_max}です。";
?>
</body></html>
