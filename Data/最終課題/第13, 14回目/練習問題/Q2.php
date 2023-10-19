<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>サンプル</title></head>
<body>
<?php
// データの設定
$A[0] = 2; $A[1] = -1; $A[2] = -3; $A[3] = 0; $A[4] = 3;
$B[0] = 2; $B[1] = 8; $B[2] = 7; $B[3] = 6; $B[4] = 3;
// $numberの個数
$num = 5;
// $A
for ($i = 0; $i < $num; $i++){
    $C[$i] = $A[$i] + $B[$i];
}

$cnt = 0; // 個数を数えるための変数
for ($i = 0; $i < $num; $i++){
    if ($C[$i] % 2 == 0)
    {
        $cnt++;
    }
}

print "Cには偶数は{$cnt}あります。";

?>
</body></html>