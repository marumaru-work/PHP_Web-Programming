<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head><title>mysql TEST</title></head>
<body>
<?php
print "<h1> sample30-3.php 作者 藤波 和丸(I21I079)</h1>\n";

//(1)PDOのクラスで、$dbs,$user,$passwordを設定して、インスタンスを作る。 
$dbs = 'mysql:dbname=testdb1;host=localhost';
$user = 'root';
$password="";

$pdo = new PDO($dbs, $user, $password);

//(2) 命令の文字列を$queryに入れる
$query = "INSERT INTO producttable(id, name) VALUES(1,'テレビ')";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO producttable(id, name) VALUES(2,'スマートフォン')";
$stmt = $pdo->prepare($query);
$stmt -> execute();

$query = "INSERT INTO producttable(id, name) VALUES(3,'パソコン')";
$stmt = $pdo->prepare($query);
$stmt -> execute();

//SELECTのPDOでの実行
$query = "SELECT * FROM producttable";
$stmt = $pdo->prepare($query);
$stmt -> execute();

//SQLの実行結果の取得 fetchで連想配列で取得
while ($info = $stmt -> fetch(PDO::FETCH_ASSOC))
{
    print (" {$info['id']}:{$info['name']} <br>\n");
}

?>
</body>
</html>
