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
<div id="titulo_meio"><h2>Char Unlock</h2></div>
<div style='width:470px; margin:0 auto; text-align:center; font-size:14px;'>
	<br>
	<font color="#EEDD82">Selecione o char desejado:</font><br>
	<?php
	$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"]));
	if((count($myCharList)-1) > 0){
		?>
		<br>
		<form action="javascript:unlock();" method="POST">
			<select id="unlock_charid">
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
			<br>
			<br>
			<input type="submit" id="unlock" value="Unlock">
		</form>
		<div class="unlock"></div>
		<?php
	}else{
		echo"Você ainda não criou nenhum char em nosso servidor.";
	}
	?>
</div>