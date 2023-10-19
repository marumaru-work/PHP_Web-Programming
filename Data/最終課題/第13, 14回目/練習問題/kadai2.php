<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>課題2</title>
</head>
<body>
<?php
// 課題2: 連想配列$table2の初期値の設定のPHPのプログラムを書きなさい。

$table2 = array("中華" => array("肉" => array("種類" => "豚", "カロリー" => 386, "値段" => 300),
                               "魚" => array("種類" => "鱈", "カロリー" => 62, "値段" => 500),
                               "野菜" => array("種類" => "白菜", "カロリー" => 14.1, "値段" => 400)),
                "トルコ" => array("肉" => array("種類" => "牛", "カロリー" => 298, "値段" => 700),
                                 "魚" => array("種類" => "鰯", "カロリー" => 99, "値段" => 200),
                                 "野菜" => array("種類" => "ネギ", "カロリー" => 28, "値段" => 100)),
                "フランス" => array("肉" => array("種類" => "牛", "カロリー" => 298, "値段" => 700),
                                   "魚" => array("種類" => "鯖", "カロリー" => 202, "値段" => 400),
                                   "野菜" => array("種類" => "トマト", "カロリー" => 20, "値段" => 100)));

// 確認用
print "連想配列 \$table2<br>\n";
print "<table border = \"1\" width = \"800\" height = \"200\" style = \"text-align: center;\">\n";
print "<tr> <th rowspan = \"2\"></th> <th colspan = \"3\">肉</th> <th colspan = \"3\">魚</th> <th colspan = \"3\">野菜</th> </tr>\n";
print "<tr> <th width = \"70\">肉</th> <th>魚</th> <th>野菜</th> <th width = \"70\" >肉</th> <th>魚</th> <th>野菜</th> <th width = \"70\">肉</th> <th>魚</th> <th>野菜</th> </tr>";

foreach ($table2 as $key => $array1)
{
    print "<tr>";
    print "<th>{$key}</th> ";
    foreach ($array1 as $array2)
    {
        foreach ($array2 as $value)
        {
            print "<td>{$value}</td> ";
        }
    }
    print "</tr>\n";
}
print "</table><br>\n";

?>
</body>
</html>