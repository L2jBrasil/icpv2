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
<div id="topo_janela">
	<div id="janela_titulo">
		Players Item Store Purchase
	</div>
	<div id="janela_close">
		<a href="javascript: void(0)" onclick="closeWindow('players_store')">X</a>
	</div>
</div>
<div id="janela_corpo">
	<?php
	if (isset($_POST["item_id"])){
		$compra = itemsStore($_POST["item_id"]);
		if($compra == "not_found"){
			echo "Item not found.";
		}elseif($compra == "no_credit"){
			echo "You do not have ".$nomeMoeda." enough to make that purchase.<br>Your current balance is <strong>".credit($_SESSION["UsuarioLogin"])."</strong> ".$nomeMoeda.".<br>Make a donation and increase your balance.";
		}else{
			$sql = explode("|", $compra); ?>
			<div style='color:#fd6; height:30px; line-height:30px;'>
				Players Item Store Purchase Confirmation
			</div>
			<div style='height:55px; line-height:55px;'>
				Check the items of your purchase below.
			</div>
			<div style='width:470px; margin:0 auto;'>
				<div style='float:left; width:126px;'>
					<div class="rank_borda" style='width:122px;'>
						Package
					</div>
					<?php
					$limit = 24; // Limite de itens
					for($a=0;$a<(count($sql)-1);$a++){
						$result = explode("?", $sql[0]);
						for($b=0;$b<(count($result)-1);$b++){
							$item = explode(",", $result[$b]);
							?>
							<script type="text/javascript">
								$(function() {
									$("#xfancy<?php echo $b+2; ?>").tooltip({
										track: true,
										delay: 0,
										showURL: false,
										fixPNG: true,
										showBody: "<br>",
										extraClass: "pretty fancy",
										top: -15,
										left: 15
									});
								});
							</script>
							<style type="text/css">
								#tooltip.xfancy<?php echo $b+2; ?>{
									padding-top: 5em;
									height: 100px;
								}
							</style>
							<?php
							$foto = file_exists("images/icons/".$item[19].".png") ? $item[19] : 404;
							$img = "<img src='images/icons/".$foto.".png' style='border:1px solid #666; width:32px; height:32px; margin-top:2px;' align='top'>"; ?>
							<div class="rank_borda" style='width:38px; height:38px; line-height:38px;'>
								<span id='xfancy<?php echo $b+2; ?>' title="
									<br>
									<?php echo showItemDetails($item); ?>
								"><?php echo $img; ?></span>
							</div>
							<?php
						}
					}
					if((count($result)-1) < $limit){
						for($c=0;$c<($limit - (count($result)-1));$c++){
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
					<?php
					if($item[23] > 2){
						?>
						<div style='height:90px; line-height:15px; padding:10px 0px;'>
							<h2 style="margin-bottom:10px;">Auction</h2>
							Auction starting bid: <strong><?php echo $item[25]."</strong> ".$nomeMoeda; ?>.<br>
							Last bid: <?php echo empty($item[26]) ? "No bids yet" : "<strong>".$item[26]."</strong> ".$nomeMoeda; ?>.<br>
							Next minimum bid: <?php echo empty($item[26]) ? "<strong>".$item[25]."</strong> ".$nomeMoeda : "<strong>".($item[26]+$intervalBidAuction)."</strong> ".$nomeMoeda; ?>.<br>
							Auction ends in: <?php echo remainingTime($item[24] - time()); ?>
						</div>
						<div style='height:auto;border-top:1px solid #333;padding:8px 0px;'>
							Choose your bid below and confirm your bid.<br>
							<select id='bid_value' style='width:auto;'>
								<?php
								$initial_bid = empty($item[26]) ? $item[25] : $item[26]+$intervalBidAuction;
								for($x=0; $x < 10; $x++){
									echo "<option value=".($initial_bid+($intervalBidAuction*$x)).">".($initial_bid+($intervalBidAuction*$x))." ".$nomeMoeda."</option>";
								}
								?>
							</select>
							<button id="<?php echo $item[21]; ?>" onclick="javascript:bid(this.id);">Confirm bid</button>
						</div>
						<div style='height:auto;border-top:1px solid #333;padding-top:8px;'>
							<h3 style="text-align:center;">Bid history</h3>
							<div class="rank_borda" style='width:310px; height:90px; padding:5px; float:none; margin:0 auto; margin-bottom:8px; text-align:left; overflow: auto; font-size:10px;'>
								<?php echo itemBidHistory($_POST["item_id"]); ?>
							</div>
							Thank you for contributing and helping the server.
							<br>
							Best regards,
							<br><?php echo $nomedoservidor; ?>
						</div>
						<?php
					}else{
						?>
						<div style='height:30px; line-height:30px; font-size:16px;'>
							Price: <strong><?php echo $item[20]."</strong> ".$nomeMoeda; ?>
						</div>
						<div style='height:30px; line-height:30px;'>
							Choose the character that will receive the Premium Item(s) and confirm your purchase.
							<br><br>
							<?php
							$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"]));
							if((count($myCharList)-1) > 0){
								?>
								<select id='owner'>
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
								<br><br>
								<button id="<?php echo $item[21]; ?>" onclick="javascript:buyItem(this.id,'store');">Confirm purchase</button>
								<?php
							}else{
								echo "You have not created any char on our server yet.";
							}
							?>
							<br>
							Thank you for contributing and helping the server.
							<br>
							Best regards,
							<br><?php echo $nomedoservidor; ?>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<?php
		}
	}
	?>
	<div class="answer"></div>
</div>