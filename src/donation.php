<?php
if (!isset($_SESSION)){ session_start(); }
if ($_SESSION["UsuarioNivel"] < 0 || !isset($_SESSION["UsuarioNivel"])){
	session_destroy();
	header("Location: index.php"); exit;
	exit;
}
include_once('config/global_configuration.php');
include_once('config/connection.php');
include_once('config/functions.php');
$pagamento = filter($_POST["donation_type"]);
$valor = filter($_POST["valor"]);
if(isset($pagamento) and isset($valor) and !empty($pagamento)){
	if(strpos($_SERVER['HTTP_REFERER'],$_SERVER['SERVER_NAME'])){
		if($pagamento == 1){
			?>
			<body onload="submitForm()">
			<form action="https://pagseguro.uol.com.br/checkout/checkout.jhtml" method="post" name="myForm">
			<input type="hidden" name="email_cobranca" value="<?php echo $email_pagseguro; ?>" />
			<input type="hidden" name="tipo" value="CP" />
			<input type="hidden" name="moeda" value="BRL" />
			<input type="hidden" name="item_id_1" value="0" />
			<input type="hidden" name="item_valor_1" value="<?php echo number_format($valor, '2', '.', ''); ?>" />
			<input type="hidden" name="item_descr_1" value="<?php echo $nomeMoeda; ?>" />
			<input type="hidden" name="item_quant_1" value="1" />
			<input type="hidden" name="ref_transacao" value="<?php echo $_SESSION['UsuarioLogin']; ?>">
			</form>
			<script type='text/javascript'>document.myForm.submit();</script>
			</body>
			<?php
		}elseif($pagamento == 2){
			if($usdDonate){
				$usd_value = ceil($valor / cotacaoDolar());
				?>
				<body onload="submitForm()">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="myForm">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="<?php echo $email_paypal; ?>">
				<input type="hidden" name="item_name" value="<?php echo $nomeMoeda; ?>">
				<input type="hidden" name="amount" value="<?php echo number_format($usd_value, '2', '.', ''); ?>">
				<input type="hidden" name="tax" value="0.00">
				<input type="hidden" name="no_note" value="1">
				<input type="hidden" name="no_shipping" value="1">
				<input type="hidden" name="charset" value="utf-8">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="custom" value="<?php echo $_SESSION['UsuarioLogin']; ?>">
				</form>
				<script type='text/javascript'>document.myForm.submit();</script>
				</body>
				<?php
			}else{
				session_destroy();
				header("Location: index.php");
				exit;
			}
		}else{
			session_destroy();
			header("Location: index.php");
			exit;
		}
	}else{
		session_destroy();
		header("Location: index.php");
		exit;
	}
}else{
	session_destroy();
    header("Location: index.php");
	exit;
}
?>