<?php
header('Content-Type: text/html; charset=ISO-8859-1');
include("../config/global_configuration.php");
include("../config/connection.php");
class PagSeguroNpi {
	private $timeout = 20; // Timeout em segundos
	public function notificationPost() {
		$postdata = 'Comando=validar&Token='.TOKEN;
		foreach ($_POST as $key => $value) {
			$valued    = $this->clearStr($value);
			$postdata .= "&$key=$valued";
		}
		return $this->verify($postdata);
	}
	private function clearStr($str) {
		if (!get_magic_quotes_gpc()) {
			$str = addslashes($str);
		}
		return $str;
	}
	private function verify($data) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "https://pagseguro.uol.com.br/pagseguro-ws/checkout/NPI.jhtml");
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, $this->timeout);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$result = trim(curl_exec($curl));
		curl_close($curl);
		return $result;
	}
}
define('TOKEN', $token_pagseguro);
if(count($_POST) > 0){
	$npi = new PagSeguroNpi();
	$result = $npi->notificationPost();
	$TransacaoID = $_POST['TransacaoID'];
	$status = $_POST['StatusTransacao'];
	$valor = $_POST['ProdValor_1'];
	$moeda = "BRL";
	$data = $_POST['DataTransacao'];
	$login = $_POST['Referencia'];
	$metodo = "PagSeguro";
	if ($result == "VERIFICADO"){
		include("entrega_automatica.php");
	} 
}else{
	Header("Location: ".$_SERVER["HTTP_HOST"]); exit();
}
?>