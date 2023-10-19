<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>サンプル</title>
</head>
<body>

<?php
//背景色、文字の色の設定
print "<body bgcolor=\"#EEEEEF\" text=\"#00AA00\">";

//ヘッダー部の表示
print "<h1> kadai1.php 作者 藤波 和丸(I21I079)</h1>";

//文字のフォント、色、太さ、下線を変更
print "<p>";
print "<b><Font Color = \"#FF0000\">フォント</Font></b>は<b>太字</b>で、<Font Color = \"#FF0000\">赤色</Font>です。<br>\n";
print "<Font Color = \"#000000\"><strong>フォント</strong></Font>は<u>下線付き</u>で、<Font Color = \"#000000\">黒色</Font>で、強調されています。<br>\n";
print "<acronym title = \"岡山理科大学\"> 岡理大</acronym><br>\n";
print "<acronym title = \"総合情報学部\"> 総情</acronym><br>\n";
print "<acronym title = \"情報科学科\"> 情科</acronym>\n";
print "<br>";
print "</p>";

//ホームページのリンク
print "<p>";
print "<a href=\"https://www.google.com/\">";
print "グーグルのホームページ</a>/ ";
print "<a href=\"https://www.ous.ac.jp/\">";
print "岡山理科大学のホームページ</a>/ ";
print "<a href=\"http://www.mis.ous.ac.jp\">";
print "情報科学科のホームページ</a>";
print "</p>";
 
?>
</body>
</html>