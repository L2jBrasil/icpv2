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
	orderItemStore(0);
</script>
<div id="titulo_meio"><h2>Items Store</h2></div>
<div style='width:470px; margin:0 auto; margin-bottom:10px;'>
	<div style="float:left; width:95px;">
		<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=itemStore');"><i class="fa fa-shopping-cart icon"></i> Store</a>
	</div>
	<div style="float:left; width:135px;">
		<a href="javascript: void(0)" class="btn-default" onclick="javascript:linkPlayerStore('itemStoreSell');"><i class="fa fa-check-square-o icon"></i> Sell items</a>
	</div>
	<div style="float:left; width:125px;">
		<a href="javascript: void(0)" class="btn-default" onclick="javascript:linkPlayerStore('itemStoreSales');"><i class="fa fa-tags icon"></i> My sales</a>
	</div>
	<div style="float:left; width:115px;">
		<a href="javascript: void(0)" class="btn-default" onclick="javascript:linkPlayerStore('itemStoreBids');"><i class="fa fa-gavel icon"></i> My bids</a>
	</div>
	<div style="clear:both;"></div>
</div>
<div class="items_store">
	<div style='width:470px; margin:0 auto; text-align:center; margin-bottom:20px;'>
		Order by:
		<select id="order" onchange="orderItemStore(this.value)">
			<option value="0">All items</option>
			<option value="1">Single items</option>
			<option value="2">Combo items</option>
			<option value="3">Auction of items</option>
			<option value="4">Auction of Combo items</option>
		</select>
	</div>
	<div class="item_store_list" style='width:470px; margin:0 auto;'></div>
</div>