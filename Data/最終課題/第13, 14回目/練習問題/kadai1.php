<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>課題1</title>
</head>
<body>
<?php
// 課題1: 連想配列$table1の初期値の設定のPHPのプログラムを書きなさい。
// Type-1の方が理想的

// Type-1
$table1 = array("大阪" => array("肉" => 1000, "魚" => 2000, "野菜" => 500),
                "岡山" => array("肉" =>  700, "魚" =>  600, "野菜" => 400),
                "福岡" => array("肉" =>  800, "魚" =>  500, "野菜" => 600));

/*
// Type-2
$table1["大阪"]["肉"] = 1000;
$table1["大阪"]["魚"] = 2000;
$table1["大阪"]["野菜"] = 1000;
$table1["岡山"]["肉"] = 700;
$table1["岡山"]["魚"] = 600;
$table1["岡山"]["野菜"] = 400;
$table1["福岡"]["肉"] = 800;
$table1["福岡"]["魚"] = 500;
$table1["福岡"]["野菜"] = 600;
*/

// 確認用
print "連想配列 \$table1<br>\n";
print "<table border = \"1\" width = \"300\" height = \"100\" style = \"text-align: center;\">\n";
print "<th></th> <th>肉</th> <th>魚</th> <th>野菜</th>\n";

foreach ($table1 as $key => $array)
{
    print "<tr>";
    print "<th>{$key}</th> ";
    foreach ($array as $value)
    {
        print "<td>{$value}</td> ";
    }
    print "</tr>\n";
}
print "</table><br>\n";

?>
</body>
</html>