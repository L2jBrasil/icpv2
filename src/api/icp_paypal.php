<?php
include("../config/global_configuration.php");
include("../config/connection.php");
if(count($_POST) > 0) {
	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value) {
		$value = urlencode(stripslashes($value));
		$req .= "&$key=$value";
	}
	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
	$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);
	$TransacaoID = $_POST['txn_id'];
	$status = $_POST['payment_status'];
	$valor = $_POST['mc_gross'];
	$moeda = $_POST['mc_currency'];
	$data = $_POST['payment_date'];
	$login = $_POST['custom'];
	$metodo = "PayPal";
	if($_POST['test_ipn'] != '1'){
		include("entrega_automatica.php");
	}
}else{
	Header("Location: ".$_SERVER["HTTP_HOST"]); exit();
}
?>