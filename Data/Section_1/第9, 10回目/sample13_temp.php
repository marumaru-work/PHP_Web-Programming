<html> 
<head> 
<title>サンプル</title> 
</head> 
<body> 
<?php 
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">\n"; 
print "<h1> sample13.php 作者 椎名(I1xIxxxx)</h1>\n"; 
     
//入力部分textboxの設定 
print "<form action=\"http://localhost/sample13.php\" method=\"post\"> \n"; 
print "商品1: \n"; 
print "<input type=\"text\" name=\"s0\"/>\n"; 
print "商品2: \n"; 
print "<input type=\"text\" name=\"s1\"/>\n"; 
print "商品3: \n"; 
print "<input type=\"text\" name=\"s2\"/>\n"; 
print "商品4: \n"; 
print "<input type=\"text\" name=\"s3\"/><br/>\n"; 
print "価格1: \n"; 
print "<input type=\"text\" name=\"k0\"/>\n"; 
print "価格2: \n"; 
print "<input type=\"text\" name=\"k1\"/>\n"; 
print "価格3: \n"; 
print "<input type=\"text\" name=\"k2\"/>\n"; 
print "価格4: \n"; 
print "<input type=\"text\" name=\"k3\"/><br/>\n"; 
print "<input type=\"submit\" value=\"送信\"/> <br/>\n"; 
print "</form>\n"; 

if(isset($_POST["s0"]) && isset($_POST["s1"]) && isset($_POST["s2"]) && isset($_POST["s3"]) && 
    isset($_POST["k0"]) && isset($_POST["k1"]) && isset($_POST["k2"]) && isset($_POST["k3"])){ 
     
//入力を変数に格納 
//商品名の格納 
    $product[0] = $_POST["s0"]; 
    $product[1] = $_POST["s1"]; 
    $product[2] = $_POST["s2"]; 
    $product[3] = $_POST["s3"]; 
//商品の価格の格納 
    $price[0] = $_POST["k0"]; 
    $price[1] = $_POST["k1"]; 
    $price[2] = $_POST["k2"]; 
    $price[3] = $_POST["k3"]; 
     
 
//表の出力 
    print "<table border=\"2\">\n"; 
 
//項目部の表示 




    for($i=0;$i < 4; $i++){ 





    } 
 
//表の終りのタグ 
    print "</table>\n"; 
     
} 
 
?> 
</body> 
</html> 
