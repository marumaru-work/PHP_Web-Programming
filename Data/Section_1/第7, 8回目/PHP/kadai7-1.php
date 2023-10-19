<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>

<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">";
print "<h1> kadai7-1.php 作者　藤波 和丸　(I21I079)</h1>";

//テストのスコアと出席回数
$score = 70;
$attendance = 15;

//表題の出力
print "<h1>得点{$score},出席{$attendance}は</h1>";


//条件による合否の出力
if ($score >= 60 && $score <= 100 && $attendance >= 11)
{
    print "<Font Color = \"#FF0000\">合格</Font><br/>";
}
else
{
    print "<Font Color = \"#0000FF\">不合格</Font><br/>";
}

?>

</body>
</html>