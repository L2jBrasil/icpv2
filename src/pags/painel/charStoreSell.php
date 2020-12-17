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
if (!isset($_SESSION["UsuarioNivel"]) || $_SESSION["UsuarioNivel"] < 0 || $_SESSION["UsuarioNivel"] > 1 || !$allowPlayerItemStore) {
	session_destroy();
	echo "<script>sair();</script>";
	exit;
}
?>
<div id="titulo_meio"><h2>Sell your chars(s)</h2></div>
<div style='width:300px; margin:0 auto; text-align:left;'>
	<center>You can sell your characters in two ways:</center>
	<ul>
		<li>Quick sale, sell now! By fixed price!</li>
		<li>Slow sale, <?php echo $timeAuction; ?> day(s) in auction!</li>
	</ul>
</div>
<div style='width:420px; margin:0 auto; text-align:center;'>
	Auction sales can only be canceled if there is no bid yet.<br>
	The character needs to be offline.<br><br>
	If you are in compliance with the rules, choose a character below, the price and select the option for sale.<br><br>
	<?php
	$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"],true));
	if((count($myCharList)-1) > 0){
		?>
		<select id="charid">
			<option value=''>Select...</option>
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
		Price: <input type="number" id="value" min="1" max="2000" style="width:50px;">
		<select id="type">
			<option value='1'>Normal sale</option>
			<?php
			if($allowAuction){
				echo "<option value='2'>Auction sale</option>";
			}
			?>
		</select>
		<button onclick="javascript:sellChar();">Confirm sale</button>
		<?php
	}else{
		echo "You have not created any char on our server yet.";
	}
	?>
	<br><br>
</div>
<div class="answer"></div>
<div class="answer2"></div>