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
if (isset($_SESSION["UsuarioLogin"])) {
	$usd_value = $usdDonate ? cotacaoDolar() : null;
	$qtd_moeda_usd = $usdDonate ? $qtd_moeda * $usd_value : null;
	?>
	<div id="titulo_meio"><h2>Doações</h2></div><br>
	<center>
		Selecione abaixo o valor de sua doação:<br>
		
		<form action="donation.php" method="post" name="myForm" target="_blank">
		<select name="valor" style="width:auto;">
			<?php
			$mult_donate = 10; // doações de 10 em 10 reais
			for($x=1;$x<=25;$x++){
				?>
				<option value="<?php echo $x*$mult_donate; ?>">R$<?php echo $x*$mult_donate; ?>,00
				<?php
				if($usdDonate) echo " / $".ceil((($x*$mult_donate)/$usd_value)).".00";
				echo" = ".($qtd_moeda * ($x*$mult_donate))." ".$nomeMoeda; ?></option>
				<?php
			}
			?>
		</select>
		<br /><br />
		Para doações de R$1.00 você recebe <?php echo $qtd_moeda." ".$nomeMoeda; ?>.<br>
		<?php
		if($usdDonate){
			echo "Para doações de $1.00 você recebe ".$qtd_moeda_usd." ".$nomeMoeda.".<br>";
		}
		?>
		<br>
		<input type="hidden" id="donation_type" value="" name="donation_type">
		<img src='images/pagseguro.gif' height="52" border='0' title="Click to pay with PagSeguro!" onClick="DonationPayment(1); document.myForm.submit();">
		<?php
		if($usdDonate){
			?>
			<img src='images/paypal.gif' height="52" border='0' title="Click to pay with PayPal!" onClick="DonationPayment(2); document.myForm.submit();">
			<?php
		}
		?>
		</form>
		<br>
		<br>
		<?php
		if($AceptDeposit){
			?>
			Caso prefira fazer a doação por depósito, seguem os dados:
			
			<br><br>
			<div style="width:460px; margin:0 auto;">
				<div class="rank_borda rank_title" style="width:456px;">
					<?php echo $bancoNome; ?>
				</div>
				<div class="rank_borda donate_bank">
					Agencia: <?php echo $bancoAgencia; ?><br>
					Conta: <?php echo $bancoConta; ?><br>
					Favorecido: <?php echo $bancoFavorecido; ?><br>
					CPF: <?php echo $bancoCPF; ?>
				</div>
			</div>
			<div style="float:left; width:100%; padding-top:20px;"></div>
			<b>*OBS:</b> Para doações feitas por depósito é necessário enviar um comprovante (escaneado ou foto) e nome da conta que irá receber as moedas para o e-mail: <?php echo $email_comprovante; ?><br><br>
			<?php
		}
		?>
		<b>**OBS:</b> Doações feitas por Cartão de Crédito, Cartão de Débito e Boleto Bancário não precisam confirmar doação, a doação é entregue automaticamente quando o PagSeguro <?php echo $usdDonate ? "ou PayPal " : null; ?>confirmar o pagamento.<br><br>
		
		Somos grato pelo seu interesse em ajudar o servidor.<br><br>
		
		Atenciosamente...<br>
		Staff <?php echo $nomedoservidor; ?>
		<br><br>
	</center>
	<?php
}else{
	?>
	<div id="titulo_meio"><h2>Doações</h2></div><br>
	<center>
		Para visualizar as doações do nosso servidor, por favor, crie uma conta e faça o login no Painel do Usuário.
		<br><br>
		Att,<br>
		Staff <?php echo $nomedoservidor; ?>
		<br>
		<br>
	</center>
	<?php
}
?>