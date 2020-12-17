<?php
function cotacaoDolar(){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://www.melhorcambio.com/dolar-hoje');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
	$conteudo = curl_exec ($ch);
	curl_close($ch);
	$dom = new DomDocument();
	$dom->loadHTML($conteudo);
	$dolar = $dom->getElementById("taxa-comercial");
	return $dolar->getAttribute('value');
}
if($moeda == 'BRL'){
	$qtd_moedas = ceil($valor) * $qtd_moeda;
	$tipo_moeda = $moeda." (R$)";
}else{
	$qtd_moedas = ceil($valor * cotacaoDolar()) * $qtd_moeda;
	$tipo_moeda = $moeda." ($)";
}
$transaction_check = $conn->prepare("SELECT transaction_id FROM icp_donate_history WHERE transaction_id = ? AND account = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$transaction_check->execute([$TransacaoID,$login]);
if($transaction_check->rowCount() == 1){
	$transaction_update = $conn->prepare("UPDATE icp_donate_history SET status=:status WHERE transaction_id = ? AND account = ?");
	$transaction_update->execute([$status,$TransacaoID,$login]);
}else{
	$transaction_insert = $conn->prepare("INSERT INTO icp_donate_history (account, amount, currency, price, status, transaction_id, date, method) VALUES (?,?,?,?,?,?,?,?)");
	$transaction_insert->execute([$login,$qtd_moedas,$tipo_moeda,$valor,$status,$TransacaoID,$data,$metodo]);
}
if(($status == 'Completed' || $status == 'Aprovado') && !empty($login)){
	$results = $transaction_check->fetch(PDO::FETCH_ASSOC);
	if($results){
		$donate_check = $conn->prepare("SELECT * FROM icp_donate WHERE login=?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$donate_check->execute([$login]);
		if ($donate_check->rowCount() == 0){
			$crediting = $conn->prepare("INSERT INTO icp_donate (login, total) VALUES (?,?)");
			$crediting->execute([$login,$results["amount"]]);
		}else{
			$crediting = $conn->prepare("UPDATE icp_donate SET total = (total + ?) WHERE login = ?");
			$crediting->execute([$results["amount"],$login]);
		}
		$donateLog = $conn->prepare("INSERT INTO icp_donate_log (description, cost, account) VALUES ('".$metodo." entregou ".$results["amount"]." ".$coinName.".','0',?)");
		$donateLog->execute([$login]);
	}
}
?>