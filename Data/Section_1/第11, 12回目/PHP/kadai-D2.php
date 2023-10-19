<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-D2.php 作者 藤波 和丸(I21I079)</h1>\n";

print "<form action \"http://localhost/kadai-D2.php\" method = \"post\">\n";
print "カテゴリ: \n";
print "<input type = \"text\" name = \"c\">\n";
print "<input type = \"submit\" value = \"送信\"> <br/>\n";
print "</form>\n";

$price = array("からあげ弁当" => 500, "オムライス" => 410, "カレーライス" => 390, "カツ丼" => 430, 
                "カツサンドイッチ" => 270, "アイス" => 200, "パフェ" => 500);

$category = array("からあげ弁当" => "お弁当", "オムライス" => "お弁当", "カレーライス" => "お弁当", "カツ丼" => "どんぶり", 
                "カツサンドイッチ" => "サンドイッチ", "アイス" => "デザート", "パフェ" => "デザート");

if ($_POST["c"] != "")
{
    $cate_s = $_POST["c"];

    $total = 0;
    foreach ($category as $product => $value)
    {
        if ($value == $cate_s)
        {
            $total += $price[$product];
        }
    }
    print "カテゴリ{$cate_s}の商品の合計は{$total}円です。<br/>\n";
}

?>
</body></html>
