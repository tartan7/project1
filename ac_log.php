<?
$ip = $_SERVER["REMOTE_ADDR"];
if ($ip<>"127.0.0.1"){

  if (!empty($_SESSION["sLoginID"])){
    $login_id = $_SESSION["sLoginID"];
  }elseif (!empty($_POST["user_id"])){
    $login_id = $_POST["user_id"];
  }elseif (!empty($_POST["encid"])){
    $string = $_POST['encid'];
    $data = str_replace(array('-','_','.'),array('+','/','='),$string);
    $mod4 = strlen($data) % 4;
    if ($mod4) {
      $data .= substr('====', $mod4);
    }
//    return base64_decode($data);
    $login_id = base64_decode($data);
  }
  if ($login_id<>"web-master@enjoy-swim.info"){

    $log_fl = "./ac_log.csv";

// 日時
    $log_ln[0] = date ( "Y-m-d H:i:s" );
// ユーザ
    $log_ln[1] = str_replace ( ",", "，", $login_id );
// ページのURL
    $log_ln[2] = str_replace ( ",", "，", $_SERVER["HTTP_USER_AGENT"] );
// リファラー
    $log_ln[3] = str_replace ( ",", "，", $_SERVER["HTTP_REFERER"] );
// IPアドレス
    $log_ln[4] = str_replace ( ",", "，", $_SERVER["REMOTE_ADDR"] );
// ホスト名
    $log_ln[5] = str_replace ( ",", "，", @gethostbyaddr ( $_SERVER["REMOTE_ADDR"] ) );
// ブラウザ
    $log_ln[6] = str_replace ( ",", "，", $_SERVER["REQUEST_URI"] );
// 入力項目１
    $log_ln[7] = str_replace ( ",", "，", $_POST["name"].$_POST["team_name"] );
// 入力項目２
    $log_ln[8] = str_replace ( ",", "，", ($_POST["time1"].":".$_POST["time2"]) );
// 入力項目３
    $log_ln[9] = str_replace ( ",", "，", ($_POST["suiro"]." ".$_POST["sex"]." ".$_POST["age"]) );
// 入力項目４
    $log_ln[10] = str_replace ( ",", "，", ($_POST["kyori"]." ".$_POST["shumoku"]." ".$kaikyu) );

    if ( $csv = @fopen ( $log_fl, "a" ) )
    {
        $ln = implode ( ",", $log_ln )."\n";
        fwrite ( $csv, $ln );
        fclose ( $csv );
    }
    else
    {
        //echo "error";
    }
  }
}
?>
