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
$sql = explode("?", charsStore(0,$_POST["order_by"]));
?>
<script>
	$('.stats_char').hide();
</script>
<center>
	Total of <strong><?php echo count($sql)-1; ?></strong> Chars for sale found.
</center>
<br>
<div class='rank_borda rank_title' style='width:118px; font-size:13px; line-height:35px;'>
	Char Name
</div>
<div class='rank_borda rank_title' style='width:38px; font-size:13px; line-height:35px;'>
	Status
</div>
<div class='rank_borda rank_title' style='width:38px; font-size:13px; line-height:35px;'>
	In
</div>
<div class='rank_borda rank_title' style='width:38px; font-size:13px; line-height:35px;'>
	Wh
</div>
<div class='rank_borda rank_title' style='width:38px; font-size:13px; line-height:35px;'>
	Qts
</div>
<div class='rank_borda rank_title' style='width:38px; font-size:13px; line-height:35px;'>
	Skills
</div>
<div class='rank_borda rank_title' style='width:43px; font-size:13px; line-height:35px;'>
	Type
</div>
<div class='rank_borda rank_title' style='width:38px; font-size:13px; line-height:35px;'>
	Price
</div>
<div class='rank_borda rank_title' style='width:45px; font-size:13px; line-height:35px;'>
	Buy
</div>
<?php
if((count($sql)-1) > 0){
	for($x=0;$x<(count($sql)-1);$x++){
		$char_details = explode(",", $sql[$x]);
		?>
		<div class='rank_borda' style='width:118px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
			<?php echo $char_details[2]; ?>
		</div>
		<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;'>
			<div class="btn_stats" title="Status" onclick="statsChar('status', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
		</div>
		<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;;'>
			<div class="btn_bag" title="Inventory" onclick="statsChar('inventory', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
		</div>
		<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;;'>
			<div class="btn_warehouse" title="Warehouse" onclick="statsChar('warehouse', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
		</div>
		<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;;'>
			<div class="btn_quests" title="Quests" onclick="statsChar('quests', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
		</div>
		<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;'>
			<div class="btn_skills" title="Skills" onclick="statsChar('skills', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
		</div>
		<div class='rank_borda' style='width:43px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
			<?php echo $char_details[3] == 2 ? "<span class=\"combo\" title=\"Ends in: ".date("d-m-Y H:i:s", $char_details[6])."\">Auction</span>" : "Sale"; ?>
		</div>
		<div class='rank_borda' style='width:38px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
			<?php echo number_format($char_details[1],0,'.','.'); ?>
		</div>
		<div class='rank_borda' style='width:45px; height:38px;'>
			<button id='<?php echo $char_details[0]; ?>' style='margin-top:6px; width:35px; height:26px; font-size:11px; overflow:hidden;' onclick="javascript:<?php echo $char_details[3] == 2 ? "charStoreDetails(this.id);" : "buyItem(this.id,'characters');"; ?>">
			<?php echo $char_details[3] == 2 ? "Bid" : "Buy"; ?>
			</button>
		</div>
		<?php
	}
	?>
	<div style='width:470px; margin:0 auto; text-align:center; font-size:14px;'>
		<div class="stats_char"></div>
	</div>
	<?php
}else{
	?>
	<div class='rank_borda' style='width:466px;'>
		No chars for sale.
	</div>
	<?php
}
?>
<div style="float:left; width:100%; padding-top:30px;"></div>
<div class="answer"></div>