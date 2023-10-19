<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head>
<?php
// (1)初期設定配列$num1と$num2の初期設定
$table3 = array(
    "蓋" => array("カロリー" => 386),                // table3["豚"]["カロリー"] = 386 と同じ
    "豚" => array("値段" => 300),                   // table3["豚"]["値段"] = 300 と同じ
    "鱈" => array("カロリー" => 62, "値段" => 500),  // table3["鱈"]["カロリー"] = 62, table3["鱈"]["値段"] = 62 と同じ
    "白菜" => array("カロリー" => 14.1, "値段" => 400),
    "牛" => array("カロリー" => 298, "値段" => 700),
    "鰯" => array("カロリー" => 99, "値段" => 200),
    "ネギ" => array("カロリー" => 28, "値段" => 100),
    "鶏" => array("カロリー" => 100, "値段" => 200),
    "トマト" => array("カロリー" => 20, "値段" => 100)
);

// (1)豚と白菜と鱈を使った料理の値段を計算
$sum_price = $table3["豚"]["値段"] + $table3["白菜"]["値段"] + $table3["鱈"]["値段"];
print "豚、白菜、鱈を使った料理の値段は、{$num_price}\n<br>";

// (2)$table3の表示 (関数)
print "\$table3の内容の表示<br>\n";
print_table($table3);

// (3)牛の値段の変更(関数で、$call by referenceを使わないといけない)
print "(3)<br>\n";
modify_table($table3, "牛", "値段", 500);
// 変更した後$table3の内容を表示する関数を呼ぶ
print_table($table3);

// (4) 牛2つ分、白菜1つ分、ネギ3つ分の料理のカロリーを計算する
$total_calorie = calc_calorie($table3, "牛", 2, "白菜", 1, "ネギ", 3);
print "(4)カロリーの合計は{$total_calorie}";

function calc_calorie($table, $product1_name, $product1_num, $product2_name, $product2_num, $product3_name, $product3_num){
    $cal = $table[$product1_name]["カロリー"] * $product1_num + $table[$product2_name]["カロリー"] * $product2_num + $table[$product3_name]["カロリー"] * $product3_num;
    return ($cal);
}
// 表の内容を出力する関数
function print_table($table){
    foreach ($table as $key_1 => $array){
        foreach ($array as $key_2 => $value){
            print "[{$key_1}][{$key_2}] = {$value}<br>\n";
        }
    }
}

// 表の内容を変更する関数($call by referenceを使う)
function modify_table(&$table, $product, $price1, $price2){
    $table[$product][$price1] = $price2;
}
?></body></html>