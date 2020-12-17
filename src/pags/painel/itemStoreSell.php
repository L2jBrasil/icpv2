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
<div id="titulo_meio"><h2>Sell your item(s)</h2></div>
<div style='width:300px; margin:0 auto; text-align:left;'>
	<center>You can sell your items in two ways:</center>
	<ul>
		<li>Quick sale, sell now! By fixed price!</li>
		<li>Slow sale, <?php echo $timeAuction; ?> day(s) in auction!</li>
	</ul>
</div>
<div style='width:420px; margin:0 auto; text-align:center;'>
	You can to sell as single items or packet of items(combo).<br>
	Auction sales can only be canceled if there is no bid yet.<br>
	The character needs to be offline.<br><br>
	If you are in compliance with the rules, choose a character below and select the item(s) for sale.<br><br>
	<?php
	$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"]));
	if((count($myCharList)-1) > 0){
		?>
		<select id="charid" onchange="javascript:sellItem();">
			<option value='Selecione...'>Select...</option>
			<?php
			for($x=0; $x < (count($myCharList)-1); $x++){
				$myCharListResult = explode(";", $myCharList[$x]);
				if($myCharListResult[2] == 0){
					echo "<option value=".$myCharListResult[1].">".$myCharListResult[0]."</option>";
				}else{
					echo "<option value=".$myCharListResult[1]." disabled>".$myCharListResult[0]." - Char Online</option>";
				}
			}
			?>
		</select>
		<?php
	}else{
		echo "You have not created any char on our server yet.";
	}
	?>
	<br><br>
</div>
<div class="answer"></div>
<div class="answer2"></div>