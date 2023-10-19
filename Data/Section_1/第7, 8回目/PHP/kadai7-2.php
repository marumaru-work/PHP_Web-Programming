<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>サンプル</title>
</head>
<body>

<!--(1)入力部分textboxの設定 -->
<form action="http://localhost/kadai7-2.php" method="post">
試験の得点:<input type="text" name="exam_score"/>
<br/>
宿題の得点:<input type="text" name="homework_score"/>
<input type="submit" value="送信"/>
</form>

<?php
print "<body bgcolor=\"#FFFFFF\" text=\"#000000\">";
print "<h1> kadai7-2.php 作者 藤波 和丸(I21I079)</h1>";

if(isset($_POST["exam_score"]) && isset($_POST["homework_score"])){

print "「試験の得点{$_POST["exam_score"]}」が入力されました。<br/>\n";
print "「宿題の得点{$_POST["homework_score"]}」が入力されました。<br/>\n";

//textboxのデータの取り出し
	$examine = $_POST["exam_score"];
	$homework = $_POST["homework_score"];

	//試験$examineと宿題$homeworkの点数から成績$scoreを計算
	$score = 0.7 * $examine + 0.3 * $homework;

	print"合計得点は、{$score}です。<br/>";

//条件文各種
	if($score >= 0 && $score < 60){
		print"成績はDです。<br/>";
	}elseif($score >= 60 && $score < 70){
		print"成績はCです。<br/>";
	}elseif($score >= 70 && $score < 80){
		print"成績はBです。<br/>";
	}elseif($score >= 80 && $score < 100){
		print"成績はAです。<br/>";
	}else{
		print"得点の値に誤りがあります。<br/>";
	}
}

?>

</body>
</html>
