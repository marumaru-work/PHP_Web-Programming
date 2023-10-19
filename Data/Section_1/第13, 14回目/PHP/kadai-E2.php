<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-E2.php 作者 藤波 和丸(I21I079)</h1>\n";

$price = array("からあげ弁当" => 500, "オムライス" => 410, "カレーライス" => 390, "カツ丼" => 430, 
                "カツサンドイッチ" => 270, "アイス" => 200, "パフェ" => 500);

$category = array("からあげ弁当" => "お弁当", "オムライス" => "お弁当", "カレーライス" => "お弁当", "カツ丼" => "どんぶり", 
                "カツサンドイッチ" => "サンドイッチ", "アイス" => "デザート", "パフェ" => "デザート");

$category_list = array("お弁当", "どんぶり", "デザート");

for ($i = 0; $i < count($category_list); $i++)
{
    $total = 0;
    foreach ($category as $product => $value)
    {
        if ($value == $category_list[$i])
        {
            $total += $price[$product];
        }
    }
    print "カテゴリ{$category_list[$i]}の商品の合計は{$total}円です。<br/>\n";
}

?>
</body></html>
