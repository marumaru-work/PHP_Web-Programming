<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>
<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n";
print "<h1> kadai9-5.php 作者 藤波 和丸(I21I079)</h1>\n";

//(1)入力部分textboxの設定
print "<form action=\"http://localhost/kadai9-5.php\" method=\"post\"> \n";
print "i: \n";
print "<input type=\"text\" name=\"n\"/>  \n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n";
print "</form>";

//(2)入力チェック
if(isset($_POST["n"]))
{
    //入力を変数に格納
	$n = $_POST["n"];

    // 表の出力
    print "<table border = \"2\">\n"; // テーブル開始のタグ

    // 項目部の表示
    print "<tr bgcolor = \"#BBBBBB\">";
    print "<th>\$i</th><th>各行 \$iまで</th>";
    print "</tr>\n"; // ヘッダーの行の終わりタグ

    //(3)$iに１ずつ加えて繰り返す
	for ($i = 1; $i <= $n; $i++)
    {
        print "<tr>";
        print "<td> {$i} </td> ";
        print "<td>";

        //(4)2重ループの内側$jに1ずつ加えて繰り返す
        for ($j = 1; $j <= $i; $j++)
        {
            print "{$j}  \n";
        }
        print "</td>"; // データの終わりのタグ
        print "</tr>"; // 行の終わりのタグ
        print "\n";
	}
    print "</table>\n"; // テーブルの終わりのタグ
}
?>
