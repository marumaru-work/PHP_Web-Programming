<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head><title>mysql TEST2</title></head>
<body>
<?php
print "<h1> kadai20.php 作者 藤波 和丸(I21I079)</h1>\n";

//(1)PDOのクラスで、$dbs,$user,$passwordを設定して、インスタンスを作る。 
$dbs = 'mysql:dbname=testdb2;host=localhost';
$user = 'root';
$password="";

try
{
    $pdo = new PDO($dbs, $user, $password);

    //(2) 命令の文字列を$queryに入れる
    $query = "INSERT INTO producttable(manufacturer, name, price) VALUES('ハイテク株式会社', 'エアコン', 100000)";
    $stmt = $pdo->prepare($query);
    $stmt -> execute();

    $query = "INSERT INTO producttable(manufacturer, name, price) VALUES('大谷電気株式会社', '掃除機', 70000)";
    $stmt = $pdo->prepare($query);
    $stmt -> execute();

    $query = "INSERT INTO producttable(manufacturer, name, price) VALUES('デンキン株式会社', '電子レンジ', 40000)";
    $stmt = $pdo->prepare($query);
    $stmt -> execute();

    //SELECTのPDOでの実行
    $query = "SELECT * FROM producttable";
    $stmt = $pdo->prepare($query);
    $stmt -> execute();

    //SQLの実行結果の取得 fetchで連想配列で取得
    while ($info = $stmt -> fetch(PDO::FETCH_ASSOC))
    {
        print("{$info['manufacturer']}:{$info['name']}:{$info['price']}: <br>\n");
    }
}
catch (PDOException $e)
{
    print('Error'.$e->getMessage());
    die();
}

?>
</body>
</html>
