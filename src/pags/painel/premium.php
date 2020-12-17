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
$sql = explode("||", itemsPremium(0));
?>
<div id="titulo_meio"><h2>Prime Shop</h2></div>
<div style='width:470px; margin:0 auto;'>
	<center>
		Total of <strong><?php echo count($sql)-1; ?></strong> Premium Items found.
	</center>
	<br>
	<div class='rank_borda rank_title' style='width:38px; font-size:13px; line-height:35px;'>
		IMG
	</div>
	<div class='rank_borda rank_title' style='width:173px; font-size:13px; line-height:35px;'>
		Item Name
	</div>
	<div class='rank_borda rank_title' style='width:55px; font-size:13px; line-height:35px;'>
		Enchant
	</div>
	<div class='rank_borda rank_title' style='width:70px; font-size:13px; line-height:35px;'>
		Count
	</div>
	<div class='rank_borda rank_title' style='width:40px; font-size:13px; line-height:35px;'>
		Price
	</div>
	<div class='rank_borda rank_title' style='width:70px; font-size:13px; line-height:35px;'>
		Buy
	</div>
	<?php
	if((count($sql)-1) > 0){
		for($x=0;$x<(count($sql)-1);$x++){
			$result = explode("==", $sql[$x]);
			$sub_result = explode("?", $result[1]);
			$item_details = explode("&", $sub_result[0]);
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
					$combo = (count($sub_result)-1) > 1 ? true : false;
					for($y=0;$y<(count($sub_result)-1);$y++){
						$item = explode("&", $sub_result[$y]);
						echo showItemDetails($item, $combo);
					}
					?>
				"><?php echo $img; ?></span>
			</div>
			<div class='rank_borda' style='width:173px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
				<?php echo $item_details[9]; ?>
			</div>
			<?php
			if($combo){
				?>
				<div class='rank_borda' style='width:129px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
					<span class="combo">*COMBO*</span>
				</div>
				<?php
			}else{
				?>
				<div class='rank_borda' style='width:55px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
					<?php  echo $item_details[10] != 'EtcItem' ? "+".$item_details[1] : "-"; ?>
				</div>
				<div class='rank_borda' style='width:70px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
					<?php echo number_format($item_details[0],0,'.','.'); ?>
				</div>
				<?php
			}
			?>
			<div class='rank_borda' style='width:40px; height:38px; line-height:38px; font-size:11px; overflow:hidden;'>
				<?php echo number_format($result[0],0,'.','.'); ?>
			</div>
			<div class='rank_borda' style='width:70px; height:38px;'>
				<button id='<?php echo $result[2]; ?>' style='margin-top:6px; width:60px; height:26px; font-size:11px; overflow:hidden;' onclick="itemPremiumDetails(this);">Buy</button>
			</div>
			<?php
		}
	}else{
		?>
		<div class='rank_borda' style='width:466px;'>
			No Premium Items were found.
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>