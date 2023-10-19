<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>

<?php
print "<body bgcolor=\"#EEEEEF\" text=\"#000000\">";
print "<h1> sample5.php 作者 藤波 和丸(I21I079)</h1>";

//変数の初期化
$a = 30; // 10
$b = 50; // 20
$d = 1.4142; // 3.1415
$f = 2.5; // 5.5
$g = 4.0; $h = 2; // 2.0, 2

//変数の計算
$c = $b * 2 + $a - 5;
$e = $f * 2.1 / $g + 5;

//数値の印刷
print "\$a={$a} <br>";
print "\$b={$b} <br>";
print "\$c={$c} <br>";
print "\$d={$d} <br>";
print "\$e={$e} <br>";
print "\$f={$f} <br>";
print "\$g={$g} <br>";

//文字列変数の初期化
$mojiretu1 = 'こんにちは';
$mojiretu2 = "さようなら";
$mojiretu3 = $mojiretu1;

//文字列の印刷
print "\$mojiretu1 = {$mojiretu1} <br>";
print "\$mojiretu2 = {$mojiretu2} <br>";
print "\$mojiretu3 = {$mojiretu3} <br>";

//変数の型を調べる
print "\$g({$g})=".gettype($g)."\n <br>";
print "\$h({$h})=".gettype($h)."\n <br>";

$h = $h + 0.1;
print "\$h({$h})=".gettype($h)."\n <br>";
$h = $h + 0.9;
print "\$h({$h})=".gettype($h)."\n <br>";

?>

</body>
</html>
