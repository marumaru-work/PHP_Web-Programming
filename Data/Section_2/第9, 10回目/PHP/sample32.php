<html>
<head>
<title>サンプル</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
print "<h1> sample32.php 作者 椎名(IxxIxxxx)</h1>\n";
//トップダウンメニューの設定
$wareki_tbl[0] = "平成";
$wareki_tbl[1] = "昭和";
$wareki_tbl[2] = "大正";
$wareki_tbl[3] = "明治";
$wareki_tbl[4] = "その他";

//htmlのメニューの出力
print "表の選択<br> \n";
print "<form action=\"http://localhost:8080/project/sample32.php\" method=\"post\"> \n";
print "<select size = \"1\" name=\"ware\">";
foreach($wareki_tbl as $value){
	print "<option value = {$value}>{$value}</option> \n";
}
print "</select>";
print "<input type = \"submit\" value=\"送信\"/>";
print "</form>";

//入力チェック
if(isset($_POST["ware"])){
	$wareki = $_POST["ware"];
	//和暦の範囲
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

 