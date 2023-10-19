<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル17_2</title>
</head>
<body>
<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n";
print "<h1> 課題19 作者 藤波 和丸(I21I079)</h1>\n";

//(1)連想配列の値の設定
$table["東京"]["リンゴ"]["price1"]=200;
$table["東京"]["ミカン"]["price1"]=100;
$table["東京"]["ブドウ"]["price1"]=430;

$table["大阪"]["リンゴ"]["price1"]=210;
$table["大阪"]["ミカン"]["price1"]=95;
$table["大阪"]["ブドウ"]["price1"]=410;

$table["岡山"]["リンゴ"]["price1"]=190;
$table["岡山"]["ミカン"]["price1"]=85;
$table["岡山"]["ブドウ"]["price1"]=330;

$table["東京"]["リンゴ"]["price2"]=230;
$table["東京"]["ミカン"]["price2"]=110;
$table["東京"]["ブドウ"]["price2"]=390;

$table["大阪"]["リンゴ"]["price2"]=200;
$table["大阪"]["ミカン"]["price2"]=90;
$table["大阪"]["ブドウ"]["price2"]=420;

$table["岡山"]["リンゴ"]["price2"]=200;
$table["岡山"]["ミカン"]["price2"]=95;
$table["岡山"]["ブドウ"]["price2"]=350;



foreach($table as $key => $fruits){
    print "1:{$key}<br>";
    print"{$fruits['リンゴ']['price1']}<br>";
}

foreach($table["東京"] as $key => $array){
    print "2:{$key}<br>";
}

foreach($table["東京"]["リンゴ"] as $key => $array){
    print "3:{$key}<br>";
}

print"<br>";
print"4:<br>";
foreach($table as $key1 => $fruits){
    foreach($fruits as $key1_1 => $array){
        foreach($array as $key1_1_1 => $value){
            print"{$key1}:{$key1_1}:{$key1_1_1}:".$value."<br>";
        }
    }
}

print"<br>";
print"5:";
$total =0;
foreach($table["岡山"] as $key => $arr){
    if($key == "リンゴ"){
        foreach($arr as $key1 => $value){
            $total += $value;
        }
    }
}
$ave=$total/2;
print"岡山の平均価格{$ave}<br>";

print"6:";
$total=0;
foreach($table["東京"]["リンゴ"] as $key => $value){
    $total += $value;
}
$ave=$total/2;
print"東京の平均価格{$ave}<br>";

//  84,86,87,88,90行目の//は削除してから作成する
print"7:";
$total=0;
foreach($table as $key2 => $fruits){
    if($key2 == "大阪"){
        foreach($fruits as $key2_1 => $array){
            if($key2_1 == "リンゴ"){
                foreach($array as $key_2_1_1 => $value)
                $total += $value;
            }
        }
    }
}
$ave=$total/2;
print"大阪の平均価格{$ave}<br>";

?>

</body>
</html>
