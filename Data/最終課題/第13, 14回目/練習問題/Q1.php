<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title></head>
<body>
<?php
// データの設定
$A[0] = 2; $A[1] = -1;
$A[2] = -3; $A[3] = 0;
$A[4] = 3;
$B[0] = 2; $B[1] = 8;
$B[2] = 7; $B[3] = 6;
$B[4] = 3;

// $numberの個数
$num = 5;

$total = 0;
for ($i = 0; $i < $num; $i++){
    if ($A[$i] > 0){
        $total += $B[$i];
        print "加算されたのは{$B[$i]}です。<br>";
    }
}

print "この問題の合計は{$total}です。";
?>
</body>
</html>