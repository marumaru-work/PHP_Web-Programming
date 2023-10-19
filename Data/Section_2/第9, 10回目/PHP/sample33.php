<html>
<head>
<title>サンプル</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
print "<h1> sample33.php 作者 藤波 和丸(I21I079)</h1>\n";
//入力部分リストボックスの設定
$wareki_tbl[0] = "平成";
$wareki_tbl[1] = "昭和";
$wareki_tbl[2] = "大正";
$wareki_tbl[3] = "明治";
$wareki_tbl[4] = "その他";

print "表の選択<br> \n";
print "<form action=\"http://localhost:8080/project/sample33.php\" method=\"post\"> \n";
//ラジオボタンの設定
foreach($wareki_tbl as $id =>$value){
	print "<input type =\"radio\" name = \"ware\" value = \"{$value}\" ";
	//はじめからチェックしておく項目の設定
	if($id ==0){
		print "checked";
	}
	print "/>";
	print "{$value} \n";
}
print "<input type = \"submit\" value=\"送信\"/>";
print "</form>";

//入力チェック
if(isset($_POST["ware"])){
	$wareki = $_POST["ware"];
	if($wareki == "平成"){
		print $wareki ."生まれは". "西暦1989年以降の生まれですね。";
	}elseif($wareki == "昭和"){
		print $wareki ."生まれは". "西暦1926年～1989以降の生まれですね。";
	}elseif($wareki == "大正"){
		print $wareki ."生まれは". "西暦1912年～1926以降の生まれですね。";
	}elseif($wareki == "明治"){
		print $wareki ."生まれは". "西暦1868年～1926以降の生まれですね。";
	}else{
		print "う～ん、江戸時代？";
	}
}
?>
</body>
</html>


