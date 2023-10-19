<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head><title>mysql TEST</title></head>
<body>
<?php
print "<h1> sample31-1.php 作者 藤波 和丸(I21I079)</h1>\n";

//pdoでデータベースに接続
$dbs = 'mysql:dbname=supermarket_db1;host=localhost';
$user = 'root';
$password="";

$pdo = new PDO($dbs, $user, $password);
//$pdo = new PDO("mysql:host=127.0.0.1;dbname=supermarket_db1;charset=utf8", "root", "");


//テーブルの作成(商品テーブルtbl_syouhin)
$query = "CREATE TABLE tbl_syouhin(
    id INTEGER, 
    code VARCHAR(20),
    shyouhinmei VARCHAR(20), 
    tanka INTEGER)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_syouhin(id, code, shyouhinmei, tanka) VALUES(1, 'A5023', 'シャンプー', 500)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_syouhin(id, code, shyouhinmei, tanka) VALUES(2, 'A5025', 'リンス', 400)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_syouhin(id, code, shyouhinmei, tanka) VALUES(3, 'A5027', '石けん', 100)";
$stmt = $pdo->prepare($query);
$stmt -> execute();


//テーブルの作成(tble_hanbai)
//$queryにデータベースのテーブル設定(tbl_hanbai)の命令を設定
$query = "CREATE TABLE tbl_hanbai(
    id INTEGER, 
    tokuisaki  VARCHAR(20),
    code VARCHAR(20), 
    hanbaisu INTEGER)";
//$queryにデータベースのテーブル設定(tbl_hanbai)の命令を設定
$stmt = $pdo->prepare($query);
$stmt -> execute();

//データの登録
$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code, hanbaisu) VALUES(1, 'K商会', 'A5023', 100)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code, hanbaisu) VALUES(2, 'S商会', 'A5023', 150)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code, hanbaisu) VALUES(3, 'K商会', 'A5025', 120)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code, hanbaisu) VALUES(4, 'K商会', 'A5027', 100)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code, hanbaisu) VALUES(5, 'S商会', 'A5027', 160)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

print "[データベース]を作成しました。";

?>
</body>
</html>


