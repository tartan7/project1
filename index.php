<?
// モバイル判定
if( strstr(getenv("HTTP_USER_AGENT"),"DoCoMo") ||
		strstr(getenv("HTTP_USER_AGENT"),"J-PHONE") ||
		strstr(getenv("HTTP_USER_AGENT"),"KDDI") ||
		strstr(getenv("HTTP_USER_AGENT"),"DDIPOCKET") ||
		strstr(getenv("HTTP_USER_AGENT"),"WILLCOM") ||
		strstr(getenv("HTTP_USER_AGENT"),"Windows CE") ||
		strstr(getenv("HTTP_USER_AGENT"),"Vodafone") ||
		strstr(getenv("HTTP_USER_AGENT"),"iPhone") ||
		strstr(getenv("HTTP_USER_AGENT"),"iPad") ||
		strstr(getenv("HTTP_USER_AGENT"),"Android") ||
		strstr(getenv("HTTP_USER_AGENT"),"BlackBerry") ||
		strstr(getenv("HTTP_USER_AGENT"),"SoftBank")) {
		$browser='mobile';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta HTTP-EQUIV="cache-control" content="no-cache">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<title>Enjoy-Swim.Info 水泳大会の記録をらくらく管理 無料開放中</title>
<?
if ($browser=='mobile') {
	print('<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">');
	print('<link rel="stylesheet" type="text/css" href="css/mobile.css">');
}else{
	print('<link rel="stylesheet" type="text/css" href="css/style1.css">');
}
?>
</head>
<body id="INDEX">

<script type="text/javascript">
<!--
AC_FL_RunContent = 0;
DetectFlashVer = 0; 
-->
</script>
<script src="AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
var requiredMajorVersion = 9;
var requiredMinorVersion = 0;
var requiredRevision = 45;
-->
</script>
<div id="PAGETOP">
<!--================-->
<!--　　ヘッダー　　-->
<!--================-->
<div id="HEADER">
<h1><a href="http://enjoy-swim.info/">Enjoy-Swim.Info</a></h1>
<ul id="PAN">
<!--  <li>index</li>-->
</ul>
</div>
<!--================-->
<!--　　メニュー　　-->
<!--================-->
<?
if ($browser=='mobile') {
	print('<div class="text">');
	print('<h2>ユーザログイン</h2>');
	print('<center>');
	print('<form method="post" action="./serch/main.php">');
	print('ユーザID<br>（メールアドレス）<br>');
	print('<input type="text" name="user_id" size="20" style="ime-mode:disabled" istyle="3" mode="alphabet" maxlength="255" value=""><br>');
	print('パスワード<br>（半角英数字5〜12）<br>');
	print('<input type="password" name="password" size="14" maxlength="12" value=""><br>');
	print('<input type="submit" value="ログイン" id="BUTTON">');
	print('</form><br>');
	print('<p>');
	print('<div class="mobile">');
	print('<a href="./regist/m/regist_user.php">新規ユーザ登録</a></div>');
	print('<div class="mobile">');
	print('<a href="./regist/m/reminder.php">パスワードを忘れた</a></div>');
	print('<div class="mobile">');
	print('<a href="./regist/m/question.php">お問い合わせフォーム</a><div>');
	print('</p>');
	print('</center>');

	print('<h2>記録をらくらく管理!</h2>');
	print('<p>水泳の記録管理ならお任せください！');
	print('簡単なデータ入力で、記録を効率的に集計管理できます。</p>');
	print('<p>【主な機能】<br>');
	print('個人成績一覧、ラップタイム管理、');
	print('チーム別年度集計、年齢別歴代ランキング、');
	print('練習日記（練習量・体重・体脂肪率の管理）、');
	print('練習メニュー作成、階級判定　他<br>');
	print('</p>');
	print('<p>初めての方は、まずは新規ユーザ登録を行ってください。');
	print('入力されたメール宛てに仮パスワードを送ります。</p>');

	print('<a href="./more.php">続きを読む</a>');
	print('</div>');
	print('<div id="FOOTER">');
	print('<ul>');
	print('<li id="FOOTER01"><address><a href="http://enjoy-swim.info/">copyright (C) 2009-'.date("Y").' Enjoy-Swim.Info All Rights Reserved</a></address></li>');
	print('</ul>');
	print('</div>');
	print('</div>');
	print('</body>');
	print('</html>');
	exit;

}else{
	//ファイル
	$top_url = "./serch/UPDATE.php";
	//更新時刻をUNIXタイムスタンプ値で取得
	$get_unix = filemtime($top_url);
	//UNIXタイムスタンプ値を変換
	$get_date = date("Y/m/d",$get_unix);

	print('<div id="MENU" align="center">');
	print('<h2>ユーザログイン</h2>');
	print('<form method="post" action="./serch/main.php">');
	print('<h3>ユーザID<br>（メールアドレス）<br>');
	print('<input type="text" name="user_id" size="25" style="ime-mode:disabled" maxlength="255" value=""></h3>');
	print('<h3>パスワード<br>（半角英数字5〜12）<br>');
	print('<input type="password" name="password" size="14" maxlength="12" value=""></h3>');
	print('<h3><input type="submit" value="ログイン" id="BUTTON"></h3>');
	print('</form>');
	print('<ul>');
	print('<li><a href="./regist/regist_user.php">新規ユーザ登録はこちら</a></li>');
	print('<li><a href="./regist/reminder.php">パスワードを忘れた場合</a></li>');
//	print('<li><a href="./help/tutorial.htm" target="_blank">オンラインマニュアル</a></li>');
	print('<li><a href="./regist/question.php">お問い合わせフォーム</a></li>');
	print('<li><a href="./serch/FAQ.php" target="_blank">よくあるお問い合わせ</a></li>');
	print('<li><a href="./serch/UPDATE.php" target="_blank">更新情報（'.$get_date.'）</a></li>');
	print('</ul>');
	print('</div>');
}
?>
<!--================-->
<!--　　記事部分　　-->
<!--================-->
<div id="KIZI">
<h2>水泳大会の記録をらくらく管理！</h2>
<div class="text">
<h3>水泳の記録管理ならお任せください！</h3>
<p>簡単なデータ入力で、記録を効率的に集計管理できます。</p>
<script language="JavaScript" type="text/javascript">
<!--
if (AC_FL_RunContent == 0 || DetectFlashVer == 0) {
	alert("This page requires AC_RunActiveContent.js.");
} else {
	var hasRightVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	if(hasRightVersion) { 
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,45,0',
			'width', '480',
			'height', '150',
			'scale', 'noscale',
			'salign', 'TL',
			'bgcolor', '#FBFBFA',
			'wmode', 'opaque',
			'movie', 'slickboard',
			'src', 'slickboard',
			'FlashVars', 'xml_source=startup.xml', 
			'id', 'my_board',
			'name', 'my_board',
			'menu', 'true',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'quality', 'high',
			'align', 'middle',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'play', 'true',
			'devicefont', 'false'
			); 
	} else { 
		var alternateContent = '<img src="./css/img/demo/image05.jpg" alt="Enjoy-Swim.info" title="Enjoy-Swim.info" width="320" border="0" >.';
		document.write(alternateContent); 
	}
}
// -->
</script>
<noscript>
	<P>本サイトのコンテンツではJavaScriptを用いております。<br>
ブラウザのセキュリティ設定でJavaScriptが無効になっている場合は、有効にしてください。<br>
モバイル端末からのアクセスでこのメッセージが表示されている場合は、<br>
<a href="http://www.enjoy-swim.info/">http://www.enjoy-swim.info/</a><br>
に直接アクセスしてみてください。</P>
</noscript>
<p>【主な機能】<br>
個人成績一覧、ラップタイム管理<br>
チーム別年度集計、年齢別歴代ランキング<br>
練習日記（練習量・体重・体脂肪率の管理）<br>
練習メニュー作成　他<br>
</p>
<p>初めての方は、まずは新規ユーザ登録を行ってください。<br>
入力されたメール宛てに仮パスワードを送ります。</p>
<ul class="modori">
  <li><a href="http://enjoy-swim.info/wiki/">詳しい使い方はこちらをチェック！</a></li>
</ul>
<?
		// RSS 読み込み
		include './serch/rss_news0.php';
?>
</div>

<a href="./more.php">続きを読む</a>
</div>
<!--================-->
<!--　　フッター　　-->
<!--================-->
<div id="FOOTER">
<h2></h2>
<ul>
 <li id="FOOTER01"><address><a href="http://enjoy-swim.info/">copyright (C) 2009-<? echo date("Y"); ?> Enjoy-Swim.Info All Rights Reserved</a></address></li>
</ul>
</div>
</div>

</body>
</html>