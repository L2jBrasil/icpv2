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
<script type="text/javascript">
	$('.info_char').hide();
	accountChar();
</script>
<div id="titulo_meio"><h2>Minha conta</h2></div>
<div style='width:470px; margin:0 auto; text-align:center; font-size:14px;'>
	<div style='width:450px; margin:0 auto; text-align:left;'>
		Bem vindo(a) <?php echo $_SESSION["UsuarioLogin"]; ?>.<br>
		Aqui você pode administrar seus personagens!<br><br>
	</div>
	<br>
	<font color="#EEDD82">Selecione o char desejado:</font><br>
	<div class="info_char"></div>
</div>