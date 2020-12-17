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
<div id="topo_janela">
	<div id="janela_titulo">
		Players Characters Store Purchase
	</div>
	<div id="janela_close">
		<a href="javascript: void(0)" onclick="closeWindow('players_store_chars')">X</a>
	</div>
</div>
<div id="janela_corpo">
	<?php
	if (isset($_POST["char_store_id"])){
		$compra = charsStore($_POST["char_store_id"]);
		if($compra == "not_found"){
			echo "Character not found.";
		}elseif($compra == "no_credit"){
			echo "You do not have ".$nomeMoeda." enough to make that purchase.<br>Your current balance is <strong>".credit($_SESSION["UsuarioLogin"])."</strong> ".$nomeMoeda.".<br>Make a donation and increase your balance.";
		}else{
			$chars = explode("?", $compra);
			$char_details = explode(",", $chars[0]); ?>
			<div style='color:#fd6; height:30px; line-height:30px;'>
				Players Characters Store Purchase Confirmation
			</div>
			<div style='height:55px; line-height:55px;'>
				Check the details of your purchase below.
			</div>
			<div style='width:470px; margin:0 auto;'>
				<div style='float:left; width:126px;'>
					<div class="rank_borda" style='width:122px;'>
						Package
					</div>
					<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;'>
						<div class="btn_stats" title="Status" onclick="statsChar('status', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
					</div>
					<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;'>
						<div class="btn_bag" title="Inventory" onclick="statsChar('inventory', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
					</div>
					<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;'>
						<div class="btn_warehouse" title="Warehouse" onclick="statsChar('warehouse', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
					</div>
					<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;'>
						<div class="btn_quests" title="Quests" onclick="statsChar('quests', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
					</div>
					<div class='rank_borda' style='width:36px; height:36px; padding-top:2px; padding-left:2px;'>
						<div class="btn_skills" title="Skills" onclick="statsChar('skills', '<?php echo $char_details[4]; ?>', '<?php echo $char_details[5]; ?>');"></div>
					</div>
					<?php
					$limit = 24; // Limite de itens
					if(5 < $limit){
						for($c=0;$c<($limit - 5);$c++){
							?>
							<div class="rank_borda" style='width:38px; height:38px; line-height:38px;'>
								?
							</div>
							<?php
						}
					}
					?>
				</div>
				<div class="rank_borda" style='width:340px; height:352px;'>
					<div style='height:90px; line-height:15px; padding:10px 0px;'>
						<h2 style="margin-bottom:10px;">Auction</h2>
						Auction starting bid: <strong><?php echo $char_details[7]."</strong> ".$nomeMoeda; ?>.<br>
						Last bid: <?php echo empty($char_details[8]) ? "No bids yet" : "<strong>".$char_details[8]."</strong> ".$nomeMoeda; ?>.<br>
						Next minimum bid: <?php echo empty($char_details[8]) ? "<strong>".$char_details[7]."</strong> ".$nomeMoeda : "<strong>".($char_details[8]+$intervalBidAuction)."</strong> ".$nomeMoeda; ?>.<br>
						Auction ends in: <?php echo remainingTime($char_details[6] - time()); ?>
					</div>
					<div style='height:auto;border-top:1px solid #333;padding:8px 0px;'>
						Choose your bid below and confirm your bid.<br>
						<select id='bid_value' style='width:auto;'>
							<?php
							$initial_bid = empty($char_details[8]) ? $char_details[7] : $char_details[8]+$intervalBidAuction;
							for($x=0; $x < 10; $x++){
								echo "<option value=".($initial_bid+($intervalBidAuction*$x)).">".($initial_bid+($intervalBidAuction*$x))." ".$nomeMoeda."</option>";
							}
							?>
						</select>
						<button id="<?php echo $char_details[0]; ?>" onclick="javascript:bid(this.id,'1');">Confirm bid</button>
					</div>
					<div style='height:auto;border-top:1px solid #333;padding-top:8px;'>
						<h3 style="text-align:center;">Bid history</h3>
						<div class="rank_borda" style='width:310px; height:90px; padding:5px; float:none; margin:0 auto; margin-bottom:8px; text-align:left; overflow: auto; font-size:10px;'>
							<?php echo itemBidHistory($_POST["char_store_id"],"chars"); ?>
						</div>
						Thank you for contributing and helping the server.
						<br>
						Best regards,
						<br><?php echo $nomedoservidor; ?>
					</div>
				</div>
			</div>
			<?php
		}
	}
	?>
	<div class="answer"></div>
</div>