<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>YouTube_API</title>
</head>
<body>
<?php

// テーブルを表示する関数
function print_table($search_type, $items_displayed)
{
    // CSS (Style Sheet)
    print(
        "<style>    .header, .button_submit{ text-align: center;}
                    .cell_size table{margin: auto;}
                    .cell_size th{ width: 200px; height: 40px;}
                    .cell_size td{ width: 500px; height: 40px;}
                    .cell_size .select_1 select{ width: 270px;}
                    .cell_size .select_2 select{ width: 70px;}
                    .button_submit input{ width: 100px; height: 30px;}
        </style>\n");
    
    print "<div class = \"header\"> <h2> YouTube における特定キーワードのランキング表の出力 </h2> </div>\n";

    // パラメータ入力フィールド
    print "<form action = \"http://localhost:8888/YouTube_API_Result.php\" method = \"post\">\n";
    print "<div class = \"cell_size\">";
    print "<table border = \"1\" style = \"text-align: center;\">\n";

    // 検索キーワード
    print "<tr>\n <th>検索キーワード</th> <td> <input type = \"text\" name = \"search_keyword\" size = \"60\" required> </td>\n</tr>\n";

    // 検索タイプ
    print "<tr>\n <th>検索タイプ</th> <td> <div class = \"select_1\"> <select size = \"1\" name = \"search_type\"> ";
    foreach ($search_type as $key => $value)
    {
        print "<option value = {$key}>{$value} ({$key})</option> ";
    }
    print "</select> </div> </td>\n</tr>\n";

    // 表示件数
    print "<tr> <th>表示件数</th> <td> <div class = \"select_2\"> <select size = \"1\" name = \"items_displayed\">";
    foreach ($items_displayed as $value)
    {
        print "<option value = {$value}>{$value} 件</option> ";
    }
    print "</select> </div> </td>\n</tr>\n";

    print "</table>\n";
    print "</div>\n";

    print "<br> <div class = \"button_submit\"> <input type = \"submit\" value = \"検索実行\"> </div>\n";

    print "</form>\n";
}

// main 関数
function main()
{
    // 検索タイプの連想配列
    $search_type = array("relevance" => "キーワードの関連性", "date" => "投稿日", "viewCount" => "再生回数", "rating" => "高評価数");

    // 表示件数の配列 (10, 20, 30, 40, 50)
    for ($i = 0; $i < 5; $i++)
    {
        $items_displayed[$i] = ($i + 1) * 10;
    }

    // テーブルの中に入力フィールド等を表示する
    print_table($search_type, $items_displayed);
}

// main 関数を実行する
main();

?>
</body>
</html>