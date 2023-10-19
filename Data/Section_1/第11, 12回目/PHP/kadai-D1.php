<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-D1.php 作者 藤波 和丸(I21I079)</h1>\n";

print "<form action \"http://localhost/kadai-D1.php\" method = \"post\">\n";
print "カテゴリ: \n";
print "<input type = \"text\" name = \"c\">\n";
print "<input type = \"submit\" value = \"送信\"> <br/>\n";
print "</form>\n";

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

if ($_POST["c"] != "")
{
    $cate_s = $_POST["c"];

    $total = 0;
    for ($i = 0; $i < count($price); $i++)
    {
        if ($category[$i] == $cate_s)
        {
            $total += $price[$i];
        }
    }
    print "カテゴリ{$cate_s}の商品の合計は{$total}円です。<br/>\n";
}

?>
</body></html>
