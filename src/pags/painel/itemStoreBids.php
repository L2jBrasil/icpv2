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
$sql = explode("|", itemsStore(0,null,"bids"));
?>
<div id="titulo_meio"><h2>Your auction bids</h2></div>
<center>
	All ongoing auctions in which you are participating.<br><br>
	Total of <strong><?php echo count($sql)-1; ?></strong> Auction Items found.
</center>
<br>
<div class='rank_borda rank_title' style='width:38px; font-size:13px; line-height:35px;'>
	IMG
</div>
<div class='rank_borda rank_title' style='width:218px; font-size:13px; line-height:35px;'>
	Item Name
</div>
<div class='rank_borda rank_title' style='width:40px; font-size:13px; line-height:35px;'>
	Ench.
</div>
<div class='rank_borda rank_title' style='width:40px; font-size:13px; line-height:35px;'>
	Count
</div>
<div class='rank_borda rank_title' style='width:40px; font-size:13px; line-height:35px;'>
	Price
</div>
<div class='rank_borda rank_title' style='width:70px; font-size:13px; line-height:35px;'>
	Bids
</div>
<?php
if((count($sql)-1) > 0){
	for($x=0;$x<(count($sql)-1);$x++){
		$sub_result = explode("?", $sql[$x]);
		$item_details = explode(",", $sub_result[0]);
		$foto = file_exists("images/icons/".$item_details[19].".png") ? $item_details[19] : 404;
		$img = "<img src='images/icons/".$foto.".png' style='border:1px solid #666; width:32px; height:32px; margin-top:2px;' align='top'>";
		?>
		<script type="text/javascript">
			$(function() {
				$("#fancy<?php echo $x+2; ?>").tooltip({
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
			#tooltip.fancy<?php echo $x+2; ?>{
				padding-top: 5em;
				height: 100px;
			}
		</style>
		<div class='rank_borda' style='width:38px; height:38px; line-height:38px;'>
			<span id='fancy<?php echo $x+2; ?>' title="
				<br>
				<?php
				$combo = $item_details[23] == 2 || $item_details[23] == 4 ? true : false;
				for($y=0;$y<(count($sub_result)-1);$y++){
					$item = explode(",", $sub_result[$y]);
					echo showItemDetails($item, $combo);
				}
				?>
			"><?php echo $img; ?></span>
		</div>
		<div class='rank_borda' style='width:218px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
			<span title="Seller: <?php echo $item_details[22]; ?>"><?php echo $item_details[9]; ?></span>
		</div>
		<?php
		if($item_details[23] == 3){
			?>
			<div class='rank_borda' style='width:84px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
				<span class="combo" title="
				<?php 
				if($item_details[24] > time()){
					echo "Ends in: ".date("d-m-Y H:i:s", $item_details[24]);
				}else{
					if(ownerAuction($item_details[21],$_SESSION["UsuarioLogin"])){
						echo "Auction ended and you were the winner!!!";
					}else{
						echo "Auction ended and you were not the winner.";
					}
				}
				?>">*AUCTION*</span>
			</div>
			<?php
		}elseif($item_details[23] == 4){
			?>
			<div class='rank_borda' style='width:84px; height:33px; line-height:14px; font-size:11px; padding-top:5px; overflow:hidden;'>
				<span class="combo" title="
				<?php 
				if($item_details[24] > time()){
					echo "Ends in: ".date("d-m-Y H:i:s", $item_details[24]);
				}else{
					if(ownerAuction($item_details[21],$_SESSION["UsuarioLogin"])){
						echo "Auction ended and you were the winner!!!";
					}else{
						echo "Auction ended and you were not the winner.";
					}
				}
				?>">*COMBO*</span><br>
				<span class="combo" title="
				<?php 
				if($item_details[24] > time()){
					echo "Ends in: ".date("d-m-Y H:i:s", $item_details[24]);
				}else{
					if(ownerAuction($item_details[21],$_SESSION["UsuarioLogin"])){
						echo "Auction ended and you were the winner!!!";
					}else{
						echo "Auction ended and you were not the winner.";
					}
				}
				?>">*AUCTION*</span>
			</div>
			<?php
		}else{
			?>
			<div class='rank_borda' style='width:40px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
				<?php  echo $item_details[10] != 'EtcItem' ? "+".$item_details[1] : "-"; ?>
			</div>
			<div class='rank_borda' style='width:40px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
				<?php echo number_format($item_details[0],0,'.','.'); ?>
			</div>
			<?php
		}
		?>
		<div class='rank_borda' style='width:40px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
			<?php echo number_format($item_details[20],0,'.','.'); ?>
		</div>
		<div class='rank_borda' style='width:70px; height:38px;'>
			<?php
			if($item_details[24] > time()){
				?>
				<button id='<?php echo $item_details[21]; ?>' style='margin-top:6px; width:60px; height:26px; font-size:11px; overflow:hidden;' onclick="itemStoreDetails(this);">Info</button>
				<?php
			}else{
				if(ownerAuction($item_details[21],$_SESSION["UsuarioLogin"])){
					?>
					<button id='<?php echo $item_details[21]; ?>' style='margin-top:6px; width:60px; height:26px; font-size:11px; overflow:hidden;' onclick="itemStoreAuctionReceive(this);">Receive</button>
					<?php
				}else{
					echo "<div style='margin-top:4px;'>Auction<br>finished.</div>";
				}
			}
			?>
		</div>
		<div class="answer"></div>
		<?php
	}
}else{
	?>
	<div class='rank_borda' style='width:466px;'>
		You are not participating in any ongoing auction.
	</div>
	<?php
}
?>
<div style="float:left; width:100%; padding-top:30px;"></div>