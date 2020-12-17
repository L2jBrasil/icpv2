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
if (!$allowInformer) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Informer</h2></div><br>
Precisa encontrar um Item ou NPC?<br>
Você está no lugar certo!
<script>
	$('.informer').hide();
</script>
<center>
	<h1>Buscar um NPC</h1>
	<form action="javascript:informer('informer_npc_by_npc_name','');" method="post" autocomplete="off">
		Nome: <input type="text" id="informer_npc_name"><br />
		<input type="submit" value="Buscar">
	</form>
	<h1>Buscar um Item</h1>
	<form action="javascript:informer('informer_item_by_item_name','');" method="post" autocomplete="off">
		Nome: <input type="text" id="informer_item_name"><br />
		<input type="submit" value="Buscar">
	</form>
</center>
<div class="informer"></div>