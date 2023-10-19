<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>

<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">";
print "<h1> sample7.php 作者 藤波 和丸(I21I079)</h1>";

//変数の設定
$a = 10;
$b = 5;

print"\$a={$a}, \$b={$b} <br/> \n";

//条件文各種

//(1)if文 elseなし
if ($a > 0)
{
    print "(1)\$aは、正です。<br/>";
}

//(2)if文 elseあり
if ($a > $b)
{
    print "(2)\$aは\$bより大きいです。<br/>";
}
else
{
    print "(2)\$aは\$bより小さいです。<br/>";
}

//(3)if文 論理演算
if ($a > 0 && $b > 0)
{
    print "(3)\$aと\$bのともに正です。<br/>";
}

//(4)if文 論理演算
if ($a > 0 || $b > 0)
{
    print "(4)\$aと\$bのどちらかがに正です。<br/>";
}

//(5)if文 論理演算
if ($a > 0 && !($b > 0))
{
    print "(5)\$aは正で、\$bは負です。<br/>";
}

?>

</body>
</html>
