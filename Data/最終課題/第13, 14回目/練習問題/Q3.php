<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>サンプル</title></head><body>
<?php
// (1)初期設定配列$num1と$num2の初期設定
$price["ミカン"] = 100; $price["リンゴ"] = 150;
$price["ブドウ"] = 310; $price["スイカ"] = 450;
$uriage["ミカン"] = 15; $uriage["リンゴ"] = 5;
$uriage["ブドウ"] = 10; $uriage["スイカ"] = 7;
$category["ミカン"] = "果物"; $category["リンゴ"] = "果物";
$category["ブドウ"] = "果物"; $category["スイカ"] = "野菜";

// 売り上げを計算
foreach ($price as $key => $value){
    $sales[$key] = $price[$key] * $uriage[$key];
}

$cnt = 0;
foreach ($sales as $key => $value){
    if ($value > 1000 && $category[$key] == "果物"){
        $cnt++;
        print "1000円より大きい果物は{$key}で{$value}円です。<br>";
    }
}

print "全部で{$cnt}個が売り上げ1000円以上です。";
?>

</body>
</html>