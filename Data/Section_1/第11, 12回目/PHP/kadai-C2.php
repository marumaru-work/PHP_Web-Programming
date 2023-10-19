<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<h1> kadai-C2.php 作者 藤波 和丸(I21I079)</h1>\n";

//$price = array("キャベツ"=>250 , "ホウレンソウ"=>120 , "だいこん"=>150 );
$price = array("からあげ弁当" => 500, "オムライス" => 410, "カレーライス" => 390, "カツ丼" => 430, "サンドイッチ" => 270);

$min = +INF;
foreach ($price as $product => $value)
{
    if ($min > $value)
    {
        $min = $value;
    }
}

$max = -INF;
foreach ($price as $product => $value)
{
    if ($max < $value)
    {
        $max = $value;
    }
}

$diff = $max - $min;

print "最低価格 {$min}<br>\n";
print "最高価格 {$max}<br>\n";
print "差は、{$diff}<br/>\n";
?>
</body></html>
