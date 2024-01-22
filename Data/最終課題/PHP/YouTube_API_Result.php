<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>YouTube_API_Results</title>
</head>
<body>
<?php

// リクエストURL（YouTube Data API v3）, YouTube APIキー（2022/07/12 作成）, POSTで送られたパラメータ
$info = array(
    "request_URL" => "https://www.googleapis.com/youtube/v3",
    "API_key" => "Prease input your API key.",
    "search_keyword" => $_POST["search_keyword"],
    "search_type" => $_POST["search_type"],
    "items_displayed" => $_POST["items_displayed"]);

print "<入力パラメータ> <br>\n";
print "search_keyword: {$info["search_keyword"]}<br>\n";
print "search_type: {$info["search_type"]}<br>\n";
print "items_displayed: {$info["items_displayed"]}<br>\n";

// 連想配列をブラウザに表示する関数 (確認用なので不要な関数)
function print_array($array)
{
    print "<pre>";
    var_dump($array);
    print "</pre><br>\n";
}

// データベースからブラウザにテーブルを表示する関数
function print_table_from_database($dbs_info) // array("table_name" => $table_name, "table_info" => $table_info, "pdo" => $pdo);
{
    print "------------------------------------------------------ <br>\n";
    print "<ランキング表> <br>\n";
    try
    {
        // ■ 各属性にあったHTMLタグ -----------------------------
        $html = array(
            "ranking"       => array("<td style = \"width: 60px;\">", " 位</td>"),
            "thumbnail_URL" => array("<td> <img src = \"", "\" name = \"", "\" width = \"240\" height = \"180\"> </td>"),
            "channelTitle"  => array("<td style = \"width: 200px;\">", "</td>"),
            "title"         => array("<td style = \"width: 500px;\">", "</td>"),
            "publishedAt"   => array("<td style = \"width: 300px;\">", "</td>"),
            "view_Count"    => array("<td style = \"width: 150px;\">", "</td>"),
            "like_Count"    => array("<td style = \"width: 150px;\">", "</td>"),
            "video_ID"      => array("<td style = \"width: 150px;\">", "<a href = \"https://www.youtube.com/watch?v=", "\">", "</a>", "</td>"));
        // ---------------------------------------------------

        // テーブルのデータを取得
        $query_data = "SELECT * FROM ". $dbs_info["table_name"];
        $stmt_data = $dbs_info["pdo"]->prepare($query_data);
        $stmt_data -> execute();

        // テーブルのカラムを取得
        $query_col = "SHOW COLUMNS FROM ". $dbs_info["table_name"];
        $stmt_col = $dbs_info["pdo"]->prepare($query_col);
        $stmt_col -> execute();

        // ブラウザ上に表示するテーブルを作成
        print "<table border = \"1\" style = \"text-align: center;\">\n";
        print "<tr>\n";
        // テーブルの属性名を表示
        while ($column = $stmt_col->fetch(PDO::FETCH_COLUMN))
        {
            print "<th>". $dbs_info["table_info"][$column]["japanese"] ."</th> ";
        }
        print "</tr>\n";

        // テーブルの値を表示
        // <行> SQLの実行結果の取得 fetchで連想配列で取得
        while ($info = $stmt_data -> fetch(PDO::FETCH_ASSOC))
        {
            print "<tr>";
            // テーブルのカラムを取得
            $query_col = "SHOW COLUMNS FROM ". $dbs_info["table_name"];
            $stmt_col = $dbs_info["pdo"]->prepare($query_col);
            $stmt_col -> execute();

            // <列> 属性の並び順に沿ったものを表示する
            while ($column = $stmt_col->fetch(PDO::FETCH_COLUMN))
            {
                // 各カラムによって生成するHTMLが変わる
                if ($column == "thumbnail_URL")
                {
                    print $html[$column][0] . $info[$column] . $html[$column][1] . $info["title"] . $html[$column][2];
                }
                else if ($column == "video_ID")
                {
                    print $html[$column][0] . $html[$column][1] . $info[$column] . $html[$column][2] . $info[$column] . $html[$column][3] . $html[$column][4];
                }
                else
                {
                    print $html[$column][0] . $info[$column] . $html[$column][1];
                }
            }
            print "</tr>\n";
        }
        print "\n</table>\n";
    }
    catch (Exception $e)
    {
        print "&#x1f6ab; error: 表の出力に失敗しました。<br>\n";
        print($e->getMessage());
        die();
    }
}

// 特定のデータベースが存在するかを確認する関数
function confirmation_database($pdo, $database_name)
{
    // データベースを探索するクエリ
    $query = "SHOW DATABASES LIKE '". $database_name ."'";

    $stmt = $pdo -> prepare($query);
    $stmt -> execute();

    $info = $stmt -> fetch(PDO::FETCH_ASSOC);

    foreach ($info as $value)
    {
        if ($value == $database_name)
        {
            print "&#x2705; info: 既存のデータベース \"". $database_name ."\" が見つかりました。新規でデータベースを作成しません。<br>\n";
            // データベースが存在するならば、true を返す
            return true;
        }
    }
    print "&#x2705; info: 既存のデータベース \"". $database_name ."\" が見つかりませんでした。新規でデータベースを作成します。<br>\n";
    // データベースが存在しなければ、false を返す
    return false;
}

// データベースを作成する関数
function create_database($database_name)
{
    try
    {
        $dbs = 'mysql:host=localhost;';
        $user = 'root';
        $password = "";

        // データベースに接続
        $pdo = new PDO($dbs, $user, $password);

        // データベースが既に存在するかどうかを確認する
        if (confirmation_database($pdo, $database_name))
        {
            return 0; // データベースが存在するならば、関数を抜ける
        }

        // データベースを作成するクエリを書く
        $query = "CREATE DATABASE {$database_name}";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
    catch (Exception $e)
    {
        print("&#x1f6ab; error: データベースを作成中にエラーが発生しました。<br>\n");
        print($e->getMessage());
        exit();
    }
    print "&#x2705; info: データベース \"". $database_name ."\" を作成しました。<br>\n";
}

// データベースに接続する関数
function connect_database($database_name)
{
    try
    {
        $dbs = 'mysql:dbname='.$database_name.';host=localhost';
        $user = 'root';
        $password = "";

        // データベースに接続
        $pdo = new PDO($dbs, $user, $password);
    }
    catch (Exception $e)
    {
        print "&#x1f6ab; error: データベース \"". $database_name ."\" に接続できませんでした。<br>\n";
        print($e->getMessage());
        die();
    }
    print "&#x2705; info: データベース \"". $database_name ."\" に接続しました。<br>\n";
    return $pdo;
}

// データベース上に登録されてあるテーブルを削除する関数
function delete_table($pdo, $table_name)
{
    try
    {
        $query = "DROP TABLES ". $table_name;

        $stmt = $pdo -> prepare($query);
        $stmt -> execute();
    }
    catch (Exception $e)
    {
        print("&#x1f6ab; error: 既存のテーブル \"". $table_name ."\" を削除できませんでした。<br>\n");
        print($e -> getMessage());
        die();
    }
    print "&#x2705; info: 既存のテーブル \"". $table_name ."\"を削除しました。<br>\n";
}

// 特定のテーブルがデータベース上に存在するかを確認する関数
function confirmation_table($pdo, $table_name)
{
    $query = "SHOW TABLES LIKE '". $table_name ."'";

    $stmt = $pdo -> prepare($query);
    $stmt -> execute();

    $info = $stmt -> fetch(PDO::FETCH_ASSOC);

    foreach ($info as $value)
    {
        if ($value == $table_name)
        {
            print "&#x2705; info: 既存のテーブル \"". $table_name ."\" が見つかりました。一度テーブルを削除した後、再度テーブルを作成します。<br>\n";
            // テーブルが存在するならば、true を返す
            return true;
        }
    }
    print "&#x2705; info: 既存のテーブル \"". $table_name ."\" が見つかりませんでした。新規でテーブルを作成します。<br>\n";
    // テーブルが存在しなければ、false を返す
    return false;
}

// テーブルを作成する関数
function create_table($pdo, $table_name, $table_info)
{
    try
    {
        // テーブルが既に存在するかどうかを確認する
        if (confirmation_table($pdo, $table_name))
        {
            // 既存のテーブルを削除する
            delete_table($pdo, $table_name);
        }

        // $table_info の要素数(属性数)をカウントする
        $table_info_num = count($table_info);
        // カウント用変数
        $count = 0;
        $query = "CREATE TABLE {$table_name}(";
        foreach ($table_info as $attribute => $array)
        {
            $query .= "{$attribute} {$array["definition"]}";
            $count++;
            // もし、テーブルの属性数よりカウント値が小さければ", "を連結する
            if ($table_info_num > $count) {$query .= ", ";}
            // さもなくば、")"を連結する
            else {$query .= ")";}
        }
        /*
        $query = "CREATE TABLE tbl_video_info(
            ranking INTEGER,
            thumbnail_URL VARCHAR(200),
            channelTitle VARCHAR(50),
            title VARCHAR(100),
            publishedAt VARCHAR(30),
            view_Count INTEGER,
            like_Count INTEGER,
            video_ID VARCHAR(100))";
        */
        $stmt = $pdo -> prepare($query);
        $stmt -> execute();
    }
    catch (Exception $e)
    {
        print "&#x1f6ab; error: テーブル \"". $table_name ."\" を作成中にエラーが発生しました。<br>\n";
        print($e->getMessage());
        die();
    }
    print "&#x2705; info: テーブル \"". $table_name ."\" を作成しました。<br>\n";
}

// テーブルに動画の情報を登録する関数 <属性の位置を変更したり、属性数が増減してもコードを修正しなくても良いようにしました>
function registration_table($table_info, $pdo, $data, $rank)
{
    try
    {
        // $table_info の要素数(属性数)をカウントする
        $table_info_num = count($table_info);
        // while 処理(文字列が完成)が終わったかどうかの判定用
        $w_bool = false;
        // 属性名(INSERT INTO tbl_video_info(○, ○, ○ ← ココ))を記載したかどうかの判定用
        $at_bool = false;
        // ($array) 現在指しているポインタの次が"VARCHAR"かどうかを判定
        $next_char_bool = false;

        $query = "INSERT INTO tbl_video_info(";
    
        while (!$w_bool)
        {
            // カウント用変数
            $count = 0;
            foreach ($table_info as $attribute => $array)
            {
                // 属性名を記載できていないのならば、
                if (!$at_bool)
                {
                    $query .= "{$attribute}";
                    $count++;
                    // もし、テーブルの属性数よりカウント値が小さければ", "を連結する
                    if ($table_info_num > $count) {$query .= ", ";}
                    // さもなくば、")VALUES({$rank} + 1, "を連結する
                    else {$query .= ") VALUES("; $at_bool = true;}
                }
                // 属性名を記載できているのならば、
                else
                {
                    // 属性名が "ranking" ならば、（APIにない要素なので、ここに書く必要あり）
                    if ($attribute == "ranking") {$query .= ($rank + 1);}
                    else if (gettype($data[$attribute]) == "string" && $count == 0) {$query .= "'". $data[$attribute] ."'";}
                    // さもなくば、APIから取得したデータをquery（文字列）に追加する
                    else {$query .= $data[$attribute];}

                    // 現在指しているポインタ($pointer)が "VARCHAR" ならば、(*)
                    if ($next_char_bool)
                    {
                        // 最後に"'"をつける ex('タイトル')
                        $query .= "'";
                        // false に戻す
                        $next_char_bool = false;
                    }
                    // 現在を指しているポインタの次を調べる
                    if ($table_info_num - 1 > $count)
                    {
                        $pointer = next($table_info)["definition"];
                    }
                    else {$pointer = NULL;}

                    // 次に何か型が定義されていたのならば、
                    if ($pointer)
                    {
                        // "VARCHAR"型(not INTEGER)ならば、
                        if ($pointer != "INTEGER")
                        {
                            // 終わりに", '"をつける ex('タイトル', ')
                            $query .= ", '";
                            // 文字列の最後に"'"をつけるため、フラグを立てておく (*)
                            $next_char_bool = true;
                        }
                        else {$query .= ", ";}
                    }
                    // さもなくば(ポインタが配列の最後を指している状態)、")"を連結する
                    else
                    {
                        $query .= ")";
                        reset($array);
                        // $query が完成したので while ループを抜ける
                        $w_bool = true;
                    }
                    $count++;
                }
            }
        }
        /*
        $query = "INSERT INTO tbl_video_info(ranking, thumbnail_URL, channelTitle, title, publishedAt, view_Count, like_Count, video_ID) 
                    VALUES(
                    {$rank} + 1,
                    '{$data["thumbnail_URL"]}',
                    '{$data["channelTitle"]}',
                    '{$data["title"]}',
                    '{$data["publishedAt"]}',
                    {$data["view_Count"]},
                    {$data["like_Count"]},
                    '{$data["video_ID"]}')";*/
        $stmt = $pdo -> prepare($query);
        $stmt -> execute();
    }
    catch (PDOException $e)
    {
        print "&#x1f6ab; error: テーブルに動画情報を登録するためのクエリ作成中にエラーが発生しました。<br>\n";
        print($e->getMessage());
        die();
    }
}

// 動画情報を取得し、データベースに登録する関数 (register video information in the database: 動画情報をデータベースに登録)
// パラメータ: 設定項目, APIデータ, 接続するデータベース名
function register_video_info_in_the_dbs($info, $api_array, $database_name)
{
    // ■ 作成するテーブル情報 -----------------------------
    // テーブルの名前
    $table_name = "tbl_video_info";

    // テーブルの定義 (英語(データベースの属性名) => (定義, 日本語(ブラウザ上の表示))
    $table_info = array(
        "ranking"       => array("definition" => "INTEGER",      "japanese" => "順位"),
        "thumbnail_URL" => array("definition" => "VARCHAR(200)", "japanese" => "サムネイル"),
        "channelTitle"  => array("definition" => "VARCHAR(100)",  "japanese" => "チャンネル"),
        "title"         => array("definition" => "VARCHAR(200)", "japanese" => "タイトル"),
        "publishedAt"   => array("definition" => "VARCHAR(30)",  "japanese" => "投稿日"),
        "view_Count"    => array("definition" => "INTEGER",      "japanese" => "再生回数"),
        "like_Count"    => array("definition" => "INTEGER",      "japanese" => "高評価数"),
        "video_ID"      => array("definition" => "VARCHAR(100)", "japanese" => "動画ID"));
    // -------------------------------------------------
    try
    {
        // "YouTube_API" データベースに接続する（実引数: 接続したいデータベース名）
        $pdo = connect_database($database_name);

        // データベースにテーブルを作成する
        create_table($pdo, $table_name, $table_info);

        // APIからデータを取得
        foreach ($api_array["items"] as $key => $array)
        {
            // print_array($array["snippet"]);
            // 1. 動画投稿日
            $publishedAt = new DateTime($array["snippet"]["publishedAt"]); // 世界標準時間 UTC
            $publishedAt->setTimeZone(new DateTimeZone('Asia/Tokyo')); // 日本時間 JST
            $data[$key]["publishedAt"] = (string) $publishedAt->format('Y-m-d H:i:s');

            // 2. 動画ID
            $data[$key]["video_ID"] = $array["id"]["videoId"];

            // 3. 再生回数 & 高評価数
            $video_info_URL = $info["request_URL"] ."/videos?part=statistics&id=". $data[$key]["video_ID"] ."&key=". $info["API_key"];
            $json_video_info = file_get_contents($video_info_URL);
            $array_video_info = json_decode($json_video_info, true);
            $data[$key]["view_Count"] = $array_video_info["items"][0]["statistics"]["viewCount"];
            if (isset($array_video_info["items"][0]["statistics"]["likeCount"]))
            {
                $data[$key]["like_Count"] = $array_video_info["items"][0]["statistics"]["likeCount"];
            }
            else
            {
                $data[$key]["like_Count"] = 0;
            }

            // 4. タイトル
            $data[$key]["title"] = $array["snippet"]["title"];
            
            // 5. サムネイルURL
            $data[$key]["thumbnail_URL"] = $array["snippet"]["thumbnails"]["high"]["url"];

            // 6. チャンネル名
            $data[$key]["channelTitle"] = $array["snippet"]["channelTitle"];

            // テーブルに動画情報を登録する
            registration_table($table_info, $pdo, $data[$key], $key);
        }
    }
    catch (Exception $e)
    {
        print("&#x1f6ab; error: APIデータを取得する際にエラーが発生しました。<br>\n");
        print($e->getMessage());
        die();
    }
    print "&#x2705; info: データベース \"". $database_name ."\" - テーブル \"". $table_name ."\" に動画情報を登録しました。<br>\n";
    
    return array("table_name" => $table_name, "table_info" => $table_info, "pdo" => $pdo);
}

// main 関数
function main($info)
{
    // 文字列置換関数 URLチェック {str_replace("検索を行う文字列", "置き換えを行う文字列", "対象の文字列", "str_replace処理の回数")}
    $conversion_string = str_replace(array(" ", "　"), "+", $info["search_keyword"]);

    // 検索用URL 生成
    $URL = $info["request_URL"] ."/search?part=snippet&order=". $info["search_type"] ."&maxResults=". $info["items_displayed"] ."&q=". $conversion_string ."&type=video&key=". $info["API_key"];
    print "Request_URL: {$URL}<br>\n";

    print "------------------------------------------------------ <br>\n";
    print "<システムログ> <br>\n";
    
    // ファイルの内容の読み込み
    $json = file_get_contents($URL);

    // 連想配列にする
    $api_array = json_decode($json, true);

    print "&#x2705; info: APIデータを確認しました。APIデータをデータベース上のテーブルに登録します。<br>\n";

    // 作成するデータベース名
    $database_name = "YouTube_API";

    // データベースを作成する関数
    create_database($database_name);

    // デバック用（APIから取得した配列を表示する）
    // print_array($api_array);

    // APIから動画情報を取得してデータベースに登録する
    $dbs_info = register_video_info_in_the_dbs($info, $api_array, $database_name);
    
    // データベースに登録してある動画情報を出力する
    print_table_from_database($dbs_info);
}

if (isset($info["search_keyword"])) {main($info);} // 検索キーワードが入力されていたら main関数へ。
else {print "&#x1f6ab; error: 検索キーワードが入力されていないため、検索を実行できません。<br>\n";} // 検索キーワードが入力されていなかったらその旨を出力する。

?>
</body>
</html>