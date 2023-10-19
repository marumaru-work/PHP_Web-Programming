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

$query = "INSERT INTO tbl_syouhin(id, code, shyouhinmei, tanka) VALUES(1, 'E0001', 'ノートパソコン', 150000)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_syouhin(id, code, shyouhinmei, tanka) VALUES(2, 'E0002', 'テレビ', 200000)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_syouhin(id, code, shyouhinmei, tanka) VALUES(3, 'E0003', 'ラジオ', 5000)";
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
$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(1, 'パーソナル株式会社', 'E0001', 5000)";
$stmt = $pdo->prepare($query);
$stmt -> execute();


$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(2, 'サイシン電気株式会社', 'E0001', 8000)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(3, '大谷電気株式会社', 'E0002', 10000)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(4, 'スマートライフ株式会社', 'E0003', 50000)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO tbl_hanbai(id, tokuisaki, code,hanbaisu) VALUES(5, 'サイシン電気株式会社', 'E0004', 7000)";
$stmt = $pdo->prepare($query);
$stmt -> execute();

print "[データベース]を作成しました。";

?>
</body>
</html>
