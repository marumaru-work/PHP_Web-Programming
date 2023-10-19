<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>課題14-2</title> 
</head> 
<body> 
<?php 
print "<h1> kadai14-2.php 作者 藤波 和丸(I21I079)</h1>\n"; 
 
print "<form action=\"http://localhost/kadai14-2.php\" method=\"post\"> \n"; 
print "商品価格: \n"; 
print "<input type=\"text\" name=\"n\"/>\n";
print "以上？\n";
print "<input type=\"submit\" value=\"送信\"/> <br/>\n"; 
print "</form>\n"; 

$english["ラーメン"] = "ramen";
$english["きつねうどん"] = "kitsune udon";
$english["そうめん"] = "somen";
$english["そば"] = "soba";

$price["ラーメン"] = 410;
$price["きつねうどん"] = 400;
$price["そうめん"] = 350;
$price["そば"] = 390;
 
if (isset($_POST["n"]))
{
    $n = $_POST["n"]; 

    print "<table border = \"2\">\n";

    print "<tr bgcolor = \"#BBBBBB\">";
    print "<td>商品項目</td> <td>商品価格</td>";
    print "</tr>\n";

    foreach ($price as $product => $value)
    {
        if ($value >= $n)
        {
            print "<tr>";
            print "<td>{$english[$product]}</td>";
            print "<td>{$value}</td>";
            print "</tr>\n";
        }
    }

    print "</table>\n <br>\n";
} 
?> 
</body> 
</html> 
