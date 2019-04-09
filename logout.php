<?
session_start();
$_SESSION = array();
$_SESSION['sName'] = "";
$_SESSION['sPid'] = "";
$_SESSION['sLoginID'] = "";

$_SESSION["sPname"] = "";
$_SESSION["sProfile"] = "";
$_SESSION["sFlg_info"] = "";
$_SESSION["sFlg_pickup"] = "";
$_SESSION["sKokai_level1"] = "";

$_SESSION['sData'] = array();
$_SESSION['sData2'] = array();
$_SESSION['sPreData'] = array();
$_SESSION['sDistance'] = array();
$_SESSION['sWeight'] = array();
$_SESSION['sWeightDisp'] = array();
$_SESSION['sFat'] = array();
$_SESSION['sFatDisp'] = array();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();
header("Location: index.php");
?>
