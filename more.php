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
<title>Enjoy-Swim.Info 水泳大会の記録をらくらく管理 マスターズ完全対応</title>
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
<div id="PAGETOP">
<!--================-->
<!--　　ヘッダー　　-->
<!--================-->
<div id="HEADER">
<h1><a href="http://enjoy-swim.info/">Enjoy-Swim.Info</a></h1>
<ul id="PAN">
</ul>
</div>
<!--================-->
<!--　　メニュー　　-->
<!--================-->
<?
if ($browser=='mobile') {
	print('<div class="text">');
	print('<h2>ユーザログイン</h2>');
	print('<CENTER>');
	print('<form method="post" action="./serch/main.php">');
	print('ユーザID<br>（メールアドレス）<br>');
	print('<input type="text" name="user_id" size="20" style="ime-mode:disabled" istyle="3" mode="alphabet" maxlength="255" value=""><br>');
	print('パスワード<br>（半角英数字5?12）<br>');
	print('<input type="password" name="password" size="14" maxlength="12" value=""><br>');
	print('<input type="submit" value="ログイン" id="BUTTON">');
	print('</form><br>');
	print('<p>');
	print('<div class="mobile">');
	print('<a href="./regist/m/regist_user.php">新規ユーザ登録</a></div>');
	print('<div class="mobile">');
	print('<a href="./regist/m/reminder.php">パスワードを忘れた</a></div>');
	print('<div class="mobile">');
	print('<a href="./regist/m/question.php">お問い合わせフォーム</a></div>');
	print('</p>');
	print('</CENTER>');

	print('<h2>記録をらくらく管理</h2>');
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
	print('<h2>利用料金について</h2>
			<S><p>20歳未満の方、学生の方は基本的にすべてのサービスが無料です。<br>
			それ以外の方のご利用については初回登録時に300円のサービス料を<br>
			お願いしております。</p>
			<p>一度に4名以上で登録される場合、団体割引をご用意しております。</p>
			<p>詳細についてはお問い合わせフォームからご連絡ください。</p>
			<p>お支払い方法は、パソコンからログインし、『Paypal』でのお支払をお願いします。</p></S>');
	print('<p><STRONG>現在、無料開放中です。</STRONG></p>');
	print('<h2>動作環境について</h2>
	<p>モバイル版のサポート状況は以下の通りです。<br>
	　Docomo、au、SoftBank、WILLCOM、iPhone、Android<br>
	各種端末の動作確認にご協力頂ける方からの情報お待ちしております。</p>');

	print('<h2>著作権について</h2>
	<p>当サイトで提供しているサービスの著作権は<br>
	すべてEnjoy-Swim.Infoが所有しています。</p>
	<p>無断でコピーを配布をしたり他のサイトから使用する行為は<br>
	ご遠慮頂きますようお願いします。</p>');
	print('</div>');
	print('<div id="FOOTER">');
	print('<ul>');
	print('<li id="FOOTER01"><address><a href="http://enjoy-swim.info/">(C) Enjoy-Swim.Info</a></address></li>');
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
	print('<h3>パスワード<br>（半角英数字5?12）<br>');
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
<p>水泳の記録管理ならお任せください！<br>
簡単なデータ入力で、記録を効率的に集計管理できます。</p>

<p>【主な機能】<br>
個人成績一覧、ラップタイム管理<br>
チーム別年度集計、年齢別歴代ランキング<br>
練習日記（練習量・体重・体脂肪率の管理）<br>
練習メニュー作成　他<br>
</p>
<p>初めての方は、まずは新規ユーザ登録を行ってください。<br>
入力されたメール宛てに仮パスワードを送ります。</p>

<?
if ($browser<>'mobile') {
	print('<ul class="modori"><li><a href="#PAGETOP"><img src="http://enjoy-swim.info/css/img/icon/pagetop.gif" alt="PAGETOP" title="このページのトップへ"></a></li></ul>');
}
?>
</div>
<h2>利用料金について</h2>
<div class="text">
<S>
<p>20歳未満の方、学生の方は基本的にすべてのサービスが無料です。<br>
それ以外の方のご利用については初回登録時に300円のサービス料を<br>
お願いしております。</p>
<p>お支払いはユーザ登録後に<br>
PayPalからのお支払いをお願いします。</p>
</S>
<S>
<p>一度に4名以上で登録される場合、団体割引をご用意しております。</p>
<p>詳細についてはお問い合わせフォームからご連絡ください。</p>
<p>今後のサイト運営のため、ご協力をお願い致します。</p>
</S>
<STRONG><p>
現在、無料開放中です。
</p></STRONG>
<ul class="modori"><li><a href="#PAGETOP">
<img src="http://enjoy-swim.info/css/img/icon/pagetop.gif" alt="PAGETOP" title="このページのトップへ"></a>
</li>
</ul>
</div>
<h2>動作環境について</h2>
<div class="text">
<p>本サイトでは
『<a href="http://www.adobe.com/shockwave/download/index.cgi?Lang=Japanese&P5_Language=Japanese&P1_Prod_Version=ShockwaveFlash&Lang=Japanese" target="_blank">Adobe Flash Player</a>』がインストールされている必要があります。<br>
また、『JavaScript』の設定が無効の場合、一部コンテンツが動作しませんので、<br>ブラウザ設定で『JavaScriptの設定』を『有効』にしてください。<br>
<p>ブラウザごとの動作確認状況については、<a href="./serch/UPDATE.php" target="_blank">更新情報</a>に掲載しておりますのでご確認ください。</p>
<p>モバイル版のサポート状況は以下の通りです。<br>
　Docomo、au、SoftBank、WILLCOM、iPhone、Android<br>
モバイルからは、パソコン版と同様　<a href="http://enjoy-swim.info">http://enjoy-swim.info</a>　にアクセスしてください。</p>
<p>ただし、すべての機種で動作を確認しているわけではありませんので、予めご了承ください。</p>
<ul class="modori"><li><a href="#PAGETOP">
<img src="http://enjoy-swim.info/css/img/icon/pagetop.gif" alt="PAGETOP" title="このページのトップへ"></a>
</li>
</ul>
</div>
<h2>著作権について</h2>
<div class="text">
<p>当サイトで提供しているサービスの著作権は<br>
すべてEnjoy-Swim.Infoが所有しています。</p>
<p>無断でコピーを配布をしたり他のサイトから使用する行為は<br>
ご遠慮頂きますようお願いします。</p>
<p>なお、外部サイトからサービスを利用したい場合は、別途有料になりますが<br>
カスタマイズも行いますので、お問い合わせフォームからご連絡ください。</p>
<ul class="modori"><li><a href="#PAGETOP">
<img src="http://enjoy-swim.info/css/img/icon/pagetop.gif" alt="PAGETOP" title="このページのトップへ"></a>
</li>
</ul>
</div>
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