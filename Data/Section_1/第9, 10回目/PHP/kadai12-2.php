<html> 
<head> 
<title>サンプル</title> 
</head> 
<body> 
<?php 
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n"; 
print "<h1> kadai12-2.php 作者 藤波 和丸(I21I079)</h1>\n"; 
   
// 入力部分textboxの設定
print "<form action=\"http://localhost/kadai12-2.php\" method=\"post\"> \n";
print "商品1: \n";
print "<input type=\"text\" name=\"s0\"/>\n"; 
print "価格1: \n";
print "<input type=\"text\" name=\"k0\"/>\n"; 
print "数量1: \n";
print "<input type=\"text\" name=\"a0\"/><br/>\n"; 
print "商品2: \n";
print "<input type=\"text\" name=\"s1\"/>\n"; 
print "価格2: \n";
print "<input type=\"text\" name=\"k1\"/>\n"; 
print "数量2: \n";
print "<input type=\"text\" name=\"a1\"/><br/>\n"; 
print "商品3: \n";
print "<input type=\"text\" name=\"s2\"/>\n"; 
print "価格3: \n";
print "<input type=\"text\" name=\"k2\"/>\n"; 
print "数量3: \n";
print "<input type=\"text\" name=\"a2\"/><br/>\n";
print "商品4: \n";
print "<input type=\"text\" name=\"s3\"/>\n"; 
print "価格4: \n";
print "<input type=\"text\" name=\"k3\"/>\n"; 
print "数量4: \n";
print "<input type=\"text\" name=\"a3\"/><br/>\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n"; 
print "</form>\n";
 
if (isset($_POST["s0"])&&isset($_POST["s1"])&&isset($_POST["s2"])&&isset($_POST["s3"])&&
     isset($_POST["k0"])&&isset($_POST["k1"])&&isset($_POST["k2"])&&isset($_POST["k3"]) &&
      isset($_POST["a0"])&&isset($_POST["a1"])&&isset($_POST["a2"])&&isset($_POST["a3"]))
{
 
    // 入力を配列に格納
    // 商品名の格納
    $product[0] = $_POST["s0"];
    $product[1] = $_POST["s1"];
    $product[2] = $_POST["s2"];
    $product[3] = $_POST["s3"];
    // 商品の価格の格納
    $price[0] = $_POST["k0"];
    $price[1] = $_POST["k1"];
    $price[2] = $_POST["k2"];
    $price[3] = $_POST["k3"];
    // 商品の数量の格納
    $amount[0] = $_POST["a0"];
    $amount[1] = $_POST["a1"];
    $amount[2] = $_POST["a2"];
    $amount[3] = $_POST["a3"];

    // 最小の値段を格納する変数
    $min = 0;

    // 表の出力 
    print "<table border=\"2\">\n"; 
 
    // 項目部の表示 
    print "<tr bgcolor=\"#BBBBBB\">"; 
    print "<th>\$i</th><th>商品項目</th><th>商品価格</th><th>売上数量</th><th>売上高</th>"; 
    print "</tr>\n"; 
 
    // 各行の表示 
    for ($i = 0; $i < 4; $i++)
    {
        $sales = $price[$i] * $amount[$i];
        if ($min > $sales || $i == 0)
        {
            $min = $sales;
        }
        print "<tr>";
        print "<td> {$i} </td> ";
        print "<td> {$product[$i]} </td>";
        print "<td> {$price[$i]} </td>";
        print "<td> {$amount[$i]} </td>";
        print "<td> {$sales} </td>";
        print "</tr>\n";
	}
    // 表の終りのタグ 
    print "</table>\n"; 
    print "最小の売上は{$min}です。<br/>\n";
} 
 
?> 
 
</body> 
</html> 
