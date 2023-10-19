<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title></head><body>
<?php

// (1)初期設定配列$num1と$num2の初期設定
$price["ミカン"] = 100; $price["リンゴ"] = 150;
$price["ブドウ"] = 310; $price["メロン"] = 450;
$uriage["ミカン"] = 15; $uriage["リンゴ"] = 5;
$uriage["ブドウ"] = 10; $uriage["メロン"] = 7;

// 価格の高い商品を求めて、その商品名を$productに入れる
$max = -9999;
foreach ($price as $key => $value){
    if ($max < $value){
        $product = $key;
        $max = $value;
    }
}

// 売上高を$salesに入れる
$sales = $price[$product] * $uriage[$product];

print "最も価格の高い商品{$product}の売上高{$sales}円です。
";
?>

</body>
</html>