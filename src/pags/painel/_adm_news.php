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
if (!isset($_SESSION["UsuarioNivel"]) || $_SESSION["UsuarioNivel"] != 1) {
	session_destroy();
	echo "<script>sair();</script>";
	exit;
}
?>
<script type="text/javascript">
	$('.answer').hide();
	postedNews();
</script>
<div id="titulo_meio"><h2>Notícias</h2></div>
<center>
	<br /><input id="news_title" type="text" style="width:88%; background:none; padding: 0px; text-align:center;" placeholder="Título da notícia" /><br /><br />
	<textarea id="news_text" style="width:88%; background:none; height:200px;" placeholder="Escreva sua notícia aqui..." /></textarea><br /><br />
	<input id="news_edit" type="hidden" value="0" />
	<button id="sendNews" onclick="postNews();">Postar notícia</button><br /><br />
</center>
<div class="old_news"></div>
<div class="answer"></div>