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
$sql1 = explode("||", showInventoryItems($_POST["char_id"],$_POST["login"]));
$peso = explode("?", $sql1[0]);
$sql = explode("|", $sql1[1]);
$item_ord = array();
for($f=0;$f<20;$f++){
	array_push($item_ord, [$f,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]);
}
for($e=0;$e<(count($sql)-1);$e++){
	$item = explode(",", $sql[$e]);
	if($item[20] == "PAPERDOLL"){
		if($item[14] == "head"){
			$item_ord[0] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "chest" || $item[14] == "onepiece"){
			$item_ord[1] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "legs"){
			$item_ord[2] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "gloves"){
			$item_ord[3] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "feet"){
			$item_ord[4] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "back"){
			$item_ord[5] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "underwear"){
			$item_ord[6] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "waist"){
			$item_ord[7] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "rhand"){
			$item_ord[8] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "lrhand"){
			$item_ord[8] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "hair"){
			$item_ord[9] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "hairall"){
			$item_ord[9] = array_replace_recursive($item_ord, $item);
			$item_ord[10] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "rear;lear" && empty($item_ord[11][1])){
			$item_ord[11] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "rear;lear"){
			$item_ord[12] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "neck"){
			$item_ord[13] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "rfinger;lfinger" && empty($item_ord[14][1])){
			$item_ord[14] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "rfinger;lfinger"){
			$item_ord[15] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "lbracelet"){
			$item_ord[16] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "lhand"){
			$item_ord[17] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "rbracelet"){
			$item_ord[18] = array_replace_recursive($item_ord, $item);
		}
		if($item[14] == "deco1" && empty($item_ord[19][1])){
			$item_ord[19] = array_replace_recursive($item_ord, $item);
		}elseif($item[14] == "deco1" && !empty($item_ord[19][1]) && empty($item_ord[20][1])){
			$item_ord[20] = array_replace_recursive($item_ord, $item);
		}elseif($item[14] == "deco1" && !empty($item_ord[19][1]) && !empty($item_ord[20][1]) && empty($item_ord[21][1])){
			$item_ord[21] = array_replace_recursive($item_ord, $item);
		}elseif($item[14] == "deco1" && !empty($item_ord[19][1]) && !empty($item_ord[20][1]) && !empty($item_ord[21][1]) && empty($item_ord[22][1])){
			$item_ord[22] = array_replace_recursive($item_ord, $item);
		}elseif($item[14] == "deco1" && !empty($item_ord[19][1]) && !empty($item_ord[20][1]) && !empty($item_ord[21][1]) && !empty($item_ord[22][1]) && empty($item_ord[23][1])){
			$item_ord[23] = array_replace_recursive($item_ord, $item);
		}elseif($item[14] == "deco1" && !empty($item_ord[19][1]) && !empty($item_ord[20][1]) && !empty($item_ord[21][1]) && !empty($item_ord[22][1]) && !empty($item_ord[23][1]) && empty($item_ord[24][1])){
			$item_ord[24] = array_replace_recursive($item_ord, $item);
		}
	}
}
$item = null;
?>
<div class="inventory">
	<div class="inventory_close">
		<a href="javascript: void(0)" onclick="closeWindow('stats_char');">X</a>
	</div>
	<div class="inventory_left">
		<div class="inventory_itens_left">
			<div class='buff'>
				<?php
				$px = 0;
				for($y=0;$y<9;$y++){
					if($y <= 3)
						$px = 7;
					elseif($y == 4 || $y == 5 || $y == 7)
						$px = 8;
					else
						$px = 7;
					if($item_ord[$y][8] != 0){
						$foto = file_exists("images/icons/".$item_ord[$y][19].".png") ? $item_ord[$y][19] : 404;
						?>
						<script type="text/javascript">
							$(function() {
								$("#xfancy<?php echo $y+2; ?>").tooltip({
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
							#tooltip.xfancy<?php echo $y+2; ?>{
								padding-top: 5em;
								height: 100px;
							}
						</style>
						<span id='xfancy<?php echo $y+2; ?>' title="
							<br>
							<?php echo showItemDetails($item_ord[$y]); ?>">
							<img src="images/icons/<?php echo $foto; ?>.png" style="width:32px; height:32px; margin-bottom:<?php echo $px; ?>px;">
						</span>
						<?php
					}else{
						?>
						<div style="width:32px; height:32px; margin-bottom:<?php echo $px; ?>px;"></div>
						<?php
					}
				}
				?>
			</div>
			<div style="width:34px; height:5px; float:left;"></div>
		</div>
		<div class="inventory_itens_center">
			<div class="inventory_itens_subcenter1"></div>
			<div class="inventory_itens_subcenter2">
				<?php
				$tattoo = explode("_", $peso[2]);
				for($j=0;$j<(count($tattoo)-1);$j++){
					$tatto = explode(";", $tattoo[$j]);
					$foto = file_exists("images/icons/etc_".$tatto[0]."_symbol_i00.png") ? "etc_".$tatto[0]."_symbol_i00" : 404;
					?>
					<script type="text/javascript">
						$(function() {
							$("#wfancy<?php echo $j+2; ?>").tooltip({
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
						#tooltip.wfancy<?php echo $j+2; ?>{
							padding-top: 5em;
							height: 100px;
						}
					</style>
					<span id='wfancy<?php echo $j+2; ?>' title="
						<br>
						<?php echo "<p id='fanc2'>".$tatto[1]." ".$tatto[2]."</p>"; ?>">
						<div style="float:left; width:16px; height:16px; margin-left:3px; margin-bottom:1.7px; background-image: url('images/icons/<?php echo $foto; ?>.png'); background-repeat: no-repeat; background-size: 16px 16px; opacity:0.5; border: 1px solid #000;"></div>
					</span>
					<?php
				}
				?>
			</div>
			<div class="inventory_itens_subcenter3"></div>
			<div class="inventory_itens_subcenter4">
				<?php
				for($k=19;$k<25;$k++){
					if($item_ord[$k][8] != 0){
						$foto = file_exists("images/icons/".$item_ord[$k][19].".png") ? $item_ord[$k][19] : 404;
						?>
						<script type="text/javascript">
							$(function() {
								$("#yfancy<?php echo $k+2; ?>").tooltip({
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
							#tooltip.yfancy<?php echo $k+2; ?>{
								padding-top: 5em;
								height: 100px;
							}
						</style>
						<span id='yfancy<?php echo $k+2; ?>' title="
							<br>
							<?php echo showItemDetails($item_ord[$k]); ?>">
							<div style="float:left; width:14px; height:14px; margin-left:3px; margin-bottom:4px; background-image: url('images/icons/<?php echo $foto; ?>.png'); background-repeat: no-repeat; background-size: 14px 14px;"></div>
						</span>
						<?php
					}else{
						?>
						<div style="float:left; width:14px; height:14px; margin-left:3px; margin-bottom:4px;"></div>
						<?php
					}
				}
				?>
			</div>
			<div class="inventory_itens_subcenter5">
				<?php
				if($item_ord[18][8] != 0){
					$foto = file_exists("images/icons/".$item_ord[18][19].".png") ? $item_ord[18][19] : 404;
					?>
					<script type="text/javascript">
						$(function() {
							$("#zfancy").tooltip({
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
						#tooltip.zfancy{
							padding-top: 5em;
							height: 100px;
						}
					</style>
					<span id='zfancy' title="
						<br>
						<?php echo showItemDetails($item_ord[18]); ?>">
						<img src="images/icons/<?php echo $foto; ?>.png" style="width:32px; height:32px; margin-left:4px;">
					</span>
					<?php
				}else{
					?>
					<div style="width:32px; height:32px; margin-left:4px;"></div>
					<?php
				}
				?>
			</div>
		</div>
		<div class="inventory_itens_right">
			<div class='buff'>
				<?php
				$px = 0;
				for($z=9;$z<18;$z++){
					$css_dark = null;
					if($z <= 11)
						$px = 7;
					elseif($z == 12 || $z == 13 || $z == 16)
						$px = 8;
					else
						$px = 7;
					if($z == 17 && $item_ord[$z][8] == 0 && $item_ord[8][14] == 'lrhand'){
						$item_ord[$z] = $item_ord[8];
						$css_dark = " opacity:0.5;";
					}
					if($item_ord[$z][8] != 0){
						$foto = file_exists("images/icons/".$item_ord[$z][19].".png") ? $item_ord[$z][19] : 404;
						?>
						<script type="text/javascript">
							$(function() {
								$("#cfancy<?php echo $z+2; ?>").tooltip({
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
							#tooltip.cfancy<?php echo $z+2; ?>{
								padding-top: 5em;
								height: 100px;
							}
						</style>
						<span id='cfancy<?php echo $z+2; ?>' title="
							<br>
							<?php echo empty($css_dark) ? $z != 10 ? showItemDetails($item_ord[$z]) : null : null; ?>">
							<img src="images/icons/<?php echo $foto; ?>.png" style="width:32px; height:32px; margin-bottom:<?php echo $px; ?>px;<?php echo $css_dark; echo $z == 10 ? " opacity:0.5;" : null; ?>">
						</span>
						<?php
					}else{
						?>
						<div style="width:32px; height:32px; margin-bottom:<?php echo $px; ?>px;"></div>
						<?php
					}
				}
				?>
			</div>
			<div style="width:34px; height:6px; float:left;"></div>
		</div>
	</div>
	<div class="inventory_right">
		<div class="inventory_items_top">
			<?php
			$inventorylimit = 0;
			if($peso[1] == 53 || $peso[1] == 54 || $peso[1] == 55 || $peso[1] == 56 || $peso[1] == 57 || $peso[1] == 117 || $peso[1] == 118){
				$inventorylimit = $inventoryDwarfLimit;
			}else{
				$inventorylimit = $inventoryNoDwarfLimit;
			}
			echo "(".(count($sql)-1)."/".$inventorylimit.")";
			?>
		</div>
		<div class="inventario">
			<div class="inventario_items">
				<?php
				$adenas = 0;
				for($w=0;$w<(count($sql)-1);$w++){
					$item = explode(",", $sql[$w]);
					if(($w % 2) == 1)
						$px = 0;
					else if(($w % 3) == 2)
						$px = 0;
					else if(($w % 4) == 3)
						$px = 1;
					else if(($w % 5) == 4)
						$px = 1;
					else
						$px = 1;
					if($item[20] == "INVENTORY"){
						$foto = file_exists("images/icons/".$item[19].".png") ? $item[19] : 404;
						?>
						<script type="text/javascript">
							$(function() {
								$("#fancy<?php echo $w+2; ?>").tooltip({
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
							#tooltip.fancy<?php echo $w+2; ?>{
								padding-top: 5em;
								height: 100px;
							}
						</style>
						<span id='fancy<?php echo $w+2; ?>' title="
							<br>
							<?php echo showItemDetails($item); ?>">
							<img src='images/icons/<?php echo $foto; ?>.png' style='width:32px; height:32px; margin-bottom:1px; margin-right:<?php echo $px; ?>px;'>
						</span>
						<?php
						$adenas = $item[9] == "Adena" ? number_format($item[0],0,'.','.') : $adenas;
					}
				}
				$item = null;
				?>
			</div>
		</div>
		<div class="inventario_adenas">
			<?php echo $adenas; ?>
		</div>
		<div class="inventario_peso1">
			<div class="inventario_peso2">
				<div class="inventario_peso3">
					<img src="<?php if($peso[0] < 50){ echo "images/stats/peso_amarelo.png"; }elseif($peso[0] >= 50 and $peso[0] < 67){ echo "images/stats/peso_amarelo2.png"; }elseif($peso[0] >= 67 and $peso[0] < 80){ echo "images/stats/peso_laranja.png"; }elseif($peso[0] >= 80){ echo "images/stats/peso_vermelho.png"; } ?>" style="width:<?php echo $peso[0] > 100 ? 100 : $peso[0] < 0 ? 0 : $peso[0]; ?>%; height:10px; padding-top:3px; border-radius:5px 0px 0px 4px;" align="left">
					<div class="inventario_peso4">
						<?php echo $peso[0]; ?>%
					</div>
				</div>
			</div>
		</div>
	</div>
</div>