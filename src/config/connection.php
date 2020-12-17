<?php
//=======================================================================\\
//  ## ####### #######                                                   \\
//  ## ##      ##   ##                                                   \\
//  ## ##      ## ####  |\  | |¯¯¯ ¯¯|¯¯ \      / |¯¯¯| |¯¯¯| | / |¯¯¯|  \\
//  ## ##      ##       | \ | |--    |    \    /  | | | | |_| |<   ¯\_   \\
//  ## ####### ##       |  \| |___   |     \/\/   |___| | |\  | \ |___|  \\
// --------------------------------------------------------------------- \\
//       Brazillian Developer / WebSite: http://www.icpfree.com.br       \\
//                 Email & Skype: ivan1507@gmail.com.br                  \\
//=======================================================================\\
date_default_timezone_set('America/Sao_Paulo');

function ICP_Flood_Protection(){
	if (!isset($_SESSION)){ session_start(); }
	$ip = get_client_ip();
	if(file_exists("txt/banned_ips.txt")){
		$file = "txt/banned_ips.txt";
	}elseif(file_exists("../txt/banned_ips.txt")){
		$file = "../txt/banned_ips.txt";
	}elseif(file_exists("../../txt/banned_ips.txt")){
		$file = "../../txt/banned_ips.txt";
	}
	$banned = strpos(file_get_contents($file),$ip) !== false ? true : false;
	if(!$banned){
		$time_now = time();
		$_SESSION["ICP_Flood_Protection_Count"] = !isset($_SESSION["ICP_Flood_Protection_Count"]) ? 0 : $_SESSION["ICP_Flood_Protection_Count"];
		$_SESSION["ICP_Flood_Protection_First"] = !isset($_SESSION["ICP_Flood_Protection_First"]) ? $time_now : $_SESSION["ICP_Flood_Protection_First"];
		$_SESSION["ICP_Flood_Protection"] = !isset($_SESSION["ICP_Flood_Protection"]) ? $_SESSION["ICP_Flood_Protection_First"] : $time_now;
		if($_SESSION["ICP_Flood_Protection_Count"] < 10){
			if(($_SESSION["ICP_Flood_Protection_First"] + 10) >= $_SESSION["ICP_Flood_Protection"]){
				$_SESSION["ICP_Flood_Protection_Count"] += 1;
			}else{
				$_SESSION["ICP_Flood_Protection"] = null;
				$_SESSION["ICP_Flood_Protection_Count"] = null;
				$_SESSION["ICP_Flood_Protection_First"] = null;
			}
			return true;
		}else{
			file_put_contents($file, $ip."\n", FILE_APPEND);
			session_destroy();
		}
	}
	return false;
}

function get_client_ip(){
	$v4mapped_prefix_hex = '00000000000000000000ffff';
	$v4mapped_prefix_bin = hex2bin($v4mapped_prefix_hex);
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
	$addr_bin = inet_pton($ipaddress);
	if( substr($addr_bin, 0, strlen($v4mapped_prefix_bin)) == $v4mapped_prefix_bin) {
	$addr_bin = substr($addr_bin, strlen($v4mapped_prefix_bin));
	}
    return inet_ntop($addr_bin);
}

$AllowedIps = array(
				'186.234.16.8',		//PagSeguro
				'186.234.16.9',		//PagSeguro
				'186.234.48.8',		//PagSeguro
				'186.234.48.9',		//PagSeguro
				'186.234.144.17',	//PagSeguro
				'186.234.144.18',	//PagSeguro
				'200.147.112.136',	//PagSeguro
				'200.147.112.137',	//PagSeguro
				'200.221.19.20',	//PagSeguro
				'64.4.248.8',		//PayPal
				'64.4.249.8',		//PayPal
				'66.211.169.17',	//PayPal
				'173.0.84.40',		//PayPal
				'173.0.84.8',		//PayPal
				'173.0.88.40',		//PayPal
				'173.0.88.8',		//PayPal
				'173.0.92.8',		//PayPal
				'173.0.93.8'		//PayPal
			);

if(!in_array(get_client_ip(),$AllowedIps)){
	if(!ICP_Flood_Protection()){
		echo "Your IP is banned by ICPNetworks Flood Protection!<br>Contact the Admin: ".$email_contato;
		exit;
	}
}

try {
	$conect_base = strtolower($db_data) == "l2j" ? "mysql:host=".$db_ip.";dbname=".$db_name : "sqlsrv:Server=".$db_ip.";Database=".$db_name;
	$conn = new PDO($conect_base, $db_user, $db_pass);
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>