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
if (!isset($_SESSION["UsuarioNivel"]) || $_SESSION["UsuarioNivel"] < 0 || $_SESSION["UsuarioNivel"] > 1) {
	session_destroy();
	echo "<script>sair();</script>";
	exit;
}
?>
<script>
	$("#answer").hide();
</script>
<div id="titulo_meio"><h2>Encantamento de Items</h2></div>
<br>
<b>Utilize suas <?php echo $nomeMoeda; ?> para encantar seus itens!</b>
<br><br>
O encantamento de itens pelo site é 100% seguro e sem chance de falha.
<br><br>
Para cada enchant, você irá precisar de:
<br>
Grade D: <?php echo $enchant_d." ".$nomeMoeda; ?><br>
Grade C: <?php echo $enchant_c." ".$nomeMoeda; ?><br>
Grade B: <?php echo $enchant_b." ".$nomeMoeda; ?><br>
Grade A: <?php echo $enchant_a." ".$nomeMoeda; ?><br>
Grade S: <?php echo $enchant_s." ".$nomeMoeda; ?><br>
Grade S80: <?php echo $enchant_s80." ".$nomeMoeda; ?><br>
Grade S84: <?php echo $enchant_s84." ".$nomeMoeda; ?>
<br><br>
Utilizando o Encantamento Seguro não tem risco de quebrar sua arma, armadura ou jóia!
<br><br>
<font color="#FF0"><b>*Importante*</b></font> O char deverá estar deslogado!<br>
<font color="#FF0"><b>*OBS*</b></font> Verifique no jogo se o item que você deseja encantar é passível de encante e bonificação de encante. A STAFF <?php echo $nomedoservidor; ?> não se responsabiliza caso você encante um item errado.<br>
Não há devoluções de Moedas sob hipótese alguma.<br><br>
<font color="#EEDD82">Selecione seu char abaixo:</font>
<br>
<?php
$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"]));
if((count($myCharList)-1) > 0){
	?>
	<select id="enchant_charid" onchange="javascript:enchant_char();">
		<option value="">Select...</option>
		<?php
		for($x=0; $x < (count($myCharList)-1); $x++){
			$myCharListResult = explode(";", $myCharList[$x]);
			if($myCharListResult[2] == "0"){
				echo"<option value=".$myCharListResult[1].">".$myCharListResult[0]."</option>";
			}else{
				echo"<option value=".$myCharListResult[1]." disabled>".$myCharListResult[0]." - Char Online</option>";
			}
		}
		?>
	</select>
	<div class="answer"></div>
	<div class="answer2"></div>
	<?php
}else{
	echo "You have not created any characters on our server.";
}
?>