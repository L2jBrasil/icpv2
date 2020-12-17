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
<div id="titulo_meio"><h2>Trocar Senha</h2></div>
<br />
<div align="center" style="margin-left:4px;">
	<br>
	<form method="post" action="javascript:t_senha();">
		<input type="password" id="36" placeholder="Senha atual"></input>
		<br />
		<input type="password" id="37" placeholder="Nova senha"></input>
		<br />
		<input type="password" id="38" placeholder="Repita a nova senha"></input>
		<br />
		<br />
		<br />
		<button id="39">Trocar senha</button>
	</form>
</div>