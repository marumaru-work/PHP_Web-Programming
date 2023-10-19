<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル WebAPIの例 </title>
</head>
<body>

<?php
$url = "http://express.heartrails.com/api/json?method=getStations&line=JR宇都宮線";

// $url = "http://geoapi.heartrails.com/api/json?method=searchByPostal&postal=7000005";

// $url = "http://geoapi.heartrails.com/api/json?method=getStations&postal=7000005";

// $url = "http://2015.moriyamahotaru.com/fireflywatch/json/";

// ファイルの内容の読み込み
$json = file_get_contents($url);
// 連想配列にする
$arr = json_decode($json, true);

// 駅情報だけ取得する
$station_array = $arr["response"];

// 表示
// echo "<pre> 連想配列全体を表示 <pre>";
// var_dump($arr);

// echo "<pre> 駅情報の連想配列を表示 <pre>";
// var_dump($station_array);
echo "</pre>";

// 一つ目だけの駅名を取り出す
print "<br> 1つ目の駅\n";
print "<br> 駅:{$arr["response"]["station"][0]["name"]}<br>\n";

// 駅の数をカウントする
$count = 0;

// すべての駅名を取り出す
foreach($arr["response"]["station"] as $key => $value)
{
    print "station name:" . $value["name"] . "\n";
    echo "<br>";
    $count++;
}

// 駅の数を出力する
print "駅の数: {$count} <br>\n";

?>
</body>
</html>
