<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル データベースに２つのテーブルを定義</title>
</head>
<body>
<?php
$url = "http://express.heartrails.com/api/json?method=getStations&line=JR山手線";

//ファイルの内容の読み込み
$json = file_get_contents($url);
//連想配列にする
$arr = json_decode($json,true);
//表示
echo "<pre>";
// var_dump($json);
var_dump($arr);
echo "</pre>";



?>
</body>
</html>
