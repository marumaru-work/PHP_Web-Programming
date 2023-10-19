<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル WebAPIの例 </title>
</head>
<body>

<?php
$url = "http://geoapi.heartrails.com/api/json?method=getTowns&city=宇都宮市";

// ファイルの内容の読み込み
$json = file_get_contents($url);
// 連想配列にする
$arr = json_decode($json,true);

/*
// 表示
echo "<pre>";
// var_dump($json);
var_dump($arr);
echo "</pre>";
*/

$y_max = -INF; // 最も北
$y_max_name = NULL;

$y_min = INF;  // 最も南
$y_min_name = NULL;

// すべての駅名を取り出す
foreach($arr["response"]["location"] as $key => $value)
{
    print "town name:" . $value["town"] . ":" . $value["y"] . "\n";
    echo "<br>";
    if ($value["y"] > $y_max)
    {
        $y_max = $value["y"];
        $y_max_name = $value["town"];
    }
    if ($value["y"] < $y_min)
    {
        $y_min = $value["y"];
        $y_min_name = $value["town"];
    }
}

print "最北端: {$y_max_name}({$y_max}), 最南端: {$y_min_name}({$y_min}) <br>\n";

?>

</body>
</html>
