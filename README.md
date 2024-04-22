# PHP, データベース, YouTube v3 API を用いてYouTubeランキング表示サイトを作成（完成済）
任意のキーワードと検索タイプを指定することで、YouTube API v3 を用いてYouTube動画ランキングを表示するプログラムです。

なお、YouTube_API_Result.php にAPIキーやデータベースのユーザー名、パスワードは空白となっております。
```PHP
$info = array(
    "request_URL" => "https://www.googleapis.com/youtube/v3",
    "API_key" => /*Please enter your API key.*/"",
    "search_keyword" => $_POST["search_keyword"],
    "search_type" => $_POST["search_type"],
    "items_displayed" => $_POST["items_displayed"]);


function create_database($database_name)
{
    try
    {
        $dbs = 'mysql:host=localhost;';
        $user = 'root';
        $password = /*Please enter your password.*/"";
        ...
    }
}

function connect_database($database_name)
{
    try
    {
        $dbs = 'mysql:dbname='.$database_name.';host=localhost';
        $user = 'root';
        $password = /*Please enter your password.*/"";
        ...
    }
}

```

## 開発環境
- Application : MAMP
- Web Server : Apache
- Database server : MySQL Version 5.7.39
- PHP Version : 7.4.33

## ドキュメント
詳細な説明は["/YouTubeAPI_v3/Documet.pdf"](./Documet.pdf)(3.3MB)を参照してください。

## 動作デモ
動作デモは["/YouTubeAPI_v3/moves.mp4"](./moves.mp4)(73.9MB)でご覧いただけます。

（※ドキュメント、および動画内に記載されております、APIキーは利用できません。）
