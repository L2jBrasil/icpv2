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
if (!isset($_SESSION)){ session_start(); }
include "config/global_configuration.php";
include "config/connection.php";
include "config/functions.php";
if(strpos($_SERVER['HTTP_REFERER'],$_SERVER['SERVER_NAME'])){
	if(isset($_POST["logar"])){
		$login = logar($_POST["login"],$_POST["senha"]);
		if($login == "success"){
			?>
			<script type="text/javascript">
				setTimeout(function(){
					$('.saudacao').html('Hello <?php echo $_SESSION[UsuarioLogin]; ?>! <button id="0" onclick="javascript:sair();">Exit</button>');
					$('.open').html('Open Panel');
					abre('<?php echo $allowMyAccount ? "painel&pagina=account" : "home"; ?>');
				}, 3000);
			</script>
			<?php
			respostaPainel("Entering...");
			redirecionaPainel("pags/painel.php",3000);
		}elseif($login == "pass_login_error"){
			respostaPainel("ERROR!<br><br>Incorrect username or password.");
		}else{
			respostaPainel($login);
		}
	}
	if(isset($_POST["sair"])){
		session_destroy();
		respostaPainel("Logging out...");
		redirecionaPainel("pags/painel.php",3000);
		?>
		<script type="text/javascript">
			setTimeout(function(){
				$('.saudacao').html('Hello guest!');
				$('.open').html('Login | Register');
				$('.icpnetworks').html('');
				abre('home');
			}, 3000);
		</script>
		<?php
	}
	if(isset($_POST["cadastrar"])){
		reg_user($_POST["login"],$_POST["email"],$_POST["senha1"],$_POST["senha2"]);
	}
	if(isset($_POST["recuperacao"])){
		recuperacao($_POST["login"],$_POST["email"]);
	}
	if(isset($_POST["t_senha"])){
		troca_senha($_POST["senha1"],$_POST["senha2"],$_POST["senha3"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["unlock_charid"])){
		echo unlock($_POST["unlock_charid"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["postNews"])){
		echo postNews($_POST["newsTitle"],$_POST["newsText"],$_POST["newsEdit"]);
	}
	if(isset($_POST["editNews"])){
		echo editNews($_POST["newsId"]);
	}
	if(isset($_POST["deleteNews"])){
		echo deleteNews($_POST["newsId"]);
	}
	if(isset($_POST["addPrime"])){
		echo addPrimeShop($_POST["primeItem"],$_POST["itemCount"],$_POST["itemEnchant"],$_POST["itemFire"],$_POST["itemWater"],$_POST["itemWind"],$_POST["itemEarth"],$_POST["itemHoly"],$_POST["itemDark"],$_POST["itemPrice"]);
	}
	if(isset($_POST["deletePrimeShop"])){
		echo deletePrimeShop($_POST["itemId"]);
	}
	if(isset($_POST["staffProfile"])){
		echo staffProfile($_POST["staffName"],$_POST["staffOffice"],$_POST["staffEmail"],$_FILES["fileToUpload"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["deleteProfile"])){
		echo deleteProfile($_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["editScreenshot"])){
		echo editScreenshot($_POST["screenshotId"]);
	}
	if(isset($_POST["deleteScreenshot"])){
		echo deleteScreenshot($_POST["screenshotId"]);
	}
	if(isset($_POST["editVideo"])){
		echo editVideo($_POST["videoId"]);
	}
	if(isset($_POST["deleteVideo"])){
		echo deleteVideo($_POST["videoId"]);
	}
	if(isset($_POST["giveCoins"])){
		if($_SESSION["UsuarioNivel"] == 1)
			echo giveCoins($_POST["donateAccount"], $_POST["donateCoins"]);
	}
	if(isset($_POST["contact"])){
		echo contact($_POST["contact_name"], $_POST["contact_email"], $_POST["contact_subject"], $_POST["contact_msg"]);
	}
	if(isset($_POST["informer_npc_by_npc_name"])){
		if (!$allowInformer) {
			session_destroy();
			echo "<script>sair();</script>";
			exit;
		}
		?>
		<div style="width:460px; margin:0 auto;">
			<div class="rank_borda rank_title" style="width:276px;">
				NPC
			</div>
			<div class="rank_borda rank_title" style="width:86px;">
				DROP
			</div>
			<div class="rank_borda rank_title" style="width:86px;">
				MAP
			</div>
			<?php
			$npcs = explode("|", locNpcByNpcName($_POST["informer_npc_by_npc_name"]));
			for($xis=0;$xis<(count($npcs)-1);$xis++){
				$npc = explode(";", $npcs[$xis]);
				?>
				<div class="rank_borda" style="width:276px;">
					<?php echo $npc[0]; ?>
				</div>
				<div class="rank_borda" style="width:86px;">
					<?php echo $npc[1]; ?>
				</div>
				<div class="rank_borda" style="width:86px;">
					<?php echo $npc[2]; ?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	}
	if(isset($_POST["informer_npc_by_item_name"])){
		if (!$allowInformer) {
			session_destroy();
			echo "<script>sair();</script>";
			exit;
		}
		?>
		<div style="width:460px; margin:0 auto;">
			<div class="rank_borda rank_title" style="width:276px;">
				NPC
			</div>
			<div class="rank_borda rank_title" style="width:86px;">
				DROP
			</div>
			<div class="rank_borda rank_title" style="width:86px;">
				MAP
			</div>
			<?php
			$npcs = explode("|", locNpcByItemName($_POST["informer_npc_by_item_name"]));
			for($xis=0;$xis<(count($npcs)-1);$xis++){
				$npc = explode(";", $npcs[$xis]);
				?>
				<div class="rank_borda" style="width:276px;">
					<?php echo $npc[0]; ?>
				</div>
				<div class="rank_borda" style="width:86px;">
					<?php echo $npc[1]; ?>
				</div>
				<div class="rank_borda" style="width:86px;">
					<?php echo $npc[2]; ?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	}
	if(isset($_POST["informer_item_by_item_name"])){
		if (!$allowInformer) {
			session_destroy();
			echo "<script>sair();</script>";
			exit;
		}
		?>
		<div style="width:460px; margin:0 auto;">
			<div class="rank_borda rank_title" style="width:38px;">
				#
			</div>
			<div class="rank_borda rank_title" style="width:354px;">
				Item
			</div>
			<div class="rank_borda rank_title" style="width:56px;">
				DROP
			</div>
			<?php
			$items = explode("|", locITEM($_POST["informer_item_by_item_name"]));
			for($xis=0;$xis<(count($items)-1);$xis++){
				$item = explode(",", $items[$xis]);
				?>
				<div class="rank_borda" style="width:38px;height:38px;line-height:38px;">
					<?php
					$foto = file_exists("images/icons/".$item[19].".png") ? $item[19] : 404;
					?>
					<script type="text/javascript">
						$(function() {
							$("#fancy<?php echo $xis+2; ?>").tooltip({
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
						#tooltip.fancy<?php echo $xis+2; ?>{
							padding-top: 5em;
							height: 100px;
						}
					</style>
					<span id='fancy<?php echo $xis+2; ?>' title="
						<br>
						<?php echo str_replace("[1]","", showItemDetails($item)); ?>">
						<img src='images/icons/<?php echo $foto; ?>.png' style='border:1px solid #666; width:32px; height:32px; margin-top:2px;'>
					</span>
				</div>
				<div class="rank_borda" style="width:354px;height:38px;line-height:38px;overflow:hidden;">
					<?php echo $item[9]; ?>
				</div>
				<div class="rank_borda" style="width:56px;height:38px;line-height:38px;">
					<a href="javascript: void(0)" id="<?php echo $item[9]; ?>" onclick="javascript:informer('informer_npc_by_item_name',this.id);">Info</a>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	}
	if(isset($_POST["informer_npc_drop"])){
		if (!$allowInformer) {
			session_destroy();
			echo "<script>sair();</script>";
			exit;
		}
		$items = explode("||", locDROP($_POST["informer_npc_drop"]));
		?>
		<div id="npc_name_info"><?php echo $items[0]; ?></div>
		<div style="width:470px; margin:0 auto;">
			<div class="rank_borda rank_title" style="width:38px;">
				#
			</div>
			<div class="rank_borda rank_title" style="width:209px;">
				Item
			</div>
			<div class="rank_borda rank_title" style="width:56px;">
				Count
			</div>
			<div class="rank_borda rank_title" style="width:46px;">
				Type
			</div>
			<div class="rank_borda rank_title" style="width:56px;">
				Chance
			</div>
			<div class="rank_borda rank_title" style="width:41px;">
				NPC
			</div>
			<?php
			$items2 = explode("|", $items[1]);
			for($xis=0;$xis<(count($items2)-1);$xis++){
				$item = explode(",", $items2[$xis]);
				?>
				<div class="rank_borda" style="width:38px;height:38px;line-height:38px;">
					<?php
					$foto = file_exists("images/icons/".$item[19].".png") ? $item[19] : 404;
					?>
					<script type="text/javascript">
						$(function() {
							$("#fancy<?php echo $xis+2; ?>").tooltip({
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
						#tooltip.fancy<?php echo $xis+2; ?>{
							padding-top: 5em;
							height: 100px;
						}
					</style>
					<span id='fancy<?php echo $xis+2; ?>' title="
						<br>
						<?php echo str_replace("[1]","", showItemDetails($item)); ?>">
						<img src='images/icons/<?php echo $foto; ?>.png' style='border:1px solid #666; width:32px; height:32px; margin-top:2px;'>
					</span>
				</div>
				<div class="rank_borda" style="width:209px;height:38px;line-height:38px;overflow:hidden;">
					<?php echo $item[9]; ?>
				</div>
				<div class="rank_borda" style="width:56px;height:38px;line-height:38px;<?php echo strpos($item[20], "K") ? 'font-size:9px;' : null; ?>">
					<?php echo $item[20]; ?>
				</div>
				<div class="rank_borda" style="width:46px;height:38px;line-height:38px;">
					<?php echo $item[22]; ?>
				</div>
				<div class="rank_borda" style="width:56px;height:38px;line-height:38px;">
					<?php echo $item[21]; ?>
				</div>
				<div class="rank_borda" style="width:41px;height:38px;line-height:38px;">
					<a href="javascript: void(0)" id="<?php echo $item[9]; ?>" onclick="javascript:informer('informer_npc_by_item_name',this.id);">Info</a>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	}
	if(isset($_POST["informer_npc_map"])){
		if($allowInformer)
			echo "<div id=\"map\">".locMAP($_POST["informer_npc_map"])."</div>";
	}
	if(isset($_POST["enchant_charid"])){
		if (!$allowEnchantItems) {
			session_destroy();
			echo "<script>sair();</script>";
			exit;
		}
		$itemsAllowed = showAllowedItems($_POST["enchant_charid"],$_SESSION["UsuarioLogin"],$allowEnchantPvpItems,$allowEnchantAugItems);
		if(empty($itemsAllowed)){
			echo "No enchantable items found";
		}else{
			$items = explode("|", $itemsAllowed);
			?>
			<div style="width:470px; margin:0 auto;">
				<div class="rank_borda rank_title" style="width:38px;">
					#
				</div>
				<div class="rank_borda rank_title" style="width:78px;">
					Loc
				</div>
				<div class="rank_borda rank_title" style="width:260px;">
					Item Name
				</div>
				<div class="rank_borda rank_title" style="width:78px;">
					Enchant
				</div>
				<?php
				for($x=0;$x<(count($items)-1);$x++){
					$item = explode(",", $items[$x]);
					$foto = file_exists("images/icons/".$item[19].".png") ? $item[19] : 404;
					if($item[20] == 'WAREHOUSE'){
						$loc = 'Warehouse';
					}elseif($item[20] == 'INVENTORY'){
						$loc = 'Invetory';
					}elseif($item[20] == 'PAPERDOLL'){
						$loc = 'Equipped';
					}
					?>
					<div class="rank_borda" style="width:38px;height:38px;line-height:38px;">
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
						<span id='fancy<?php echo $x+2; ?>' title="
							<br>
							<?php echo showItemDetails($item); ?>">
							<img src='images/icons/<?php echo $foto; ?>.png' style='border:1px solid #666; width:32px; height:32px; margin-top:2px;'>
						</span>
					</div>
					<div class="rank_borda" style="width:78px;height:38px;line-height:38px;">
						<?php echo $loc; ?>
					</div>
					<div class="rank_borda" style="width:260px;height:38px;line-height:38px;overflow:hidden;">
						<?php echo $item[9]; ?>
					</div>
					<div class="rank_borda" style="width:78px;height:38px;line-height:38px;">
						<select id="newEnchant" onchange="enchant(this,'<?php echo $_POST["enchant_charid"]; ?>','<?php echo $item[21]; ?>')" style="width:auto; margin-top:10px; font-size:12px; padding: 0px 10px 0px 5px;">
							<?php
							for($a=$item[1];$a<=$enchant_max;$a++){
								echo "<option value='".$a."'>+".$a."</option>";
							}
							?>
						</select>
					</div>
					<?php
				}
				?>
				<div style="float:left; width:100%; padding-top:30px;"></div>
			</div>
			<?php
		}
	}
	if(isset($_POST["enchant_char_id"])){
		if($allowEnchantItems)
			echo enchantItem($_POST["enchant_char_id"],$_SESSION["UsuarioLogin"],$_POST["enchant_item_id"],$_POST["enchant_level"]);
	}
	if(isset($_POST["sex_charid"])){
		if(empty($_POST["sex_charid"])){
			echo resposta("The character was not found.");
		}else{
			if($allowSexChange)
				echo sexChange($_POST["sex_charid"],$_POST["sex"],$_SESSION["UsuarioLogin"]);
		}
	}
	if(isset($_POST["nick_charid"])){
		if(empty($_POST["nick_charid"])){
			echo resposta("The character was not found.");
		}elseif(empty($_POST["new_nick"])){
			echo resposta("You did not wrote the new char name.\\nTry again.");
		}else{
			if($allowNickChange)
				echo nickChange($_POST["nick_charid"],$_POST["new_nick"],$_SESSION["UsuarioLogin"]);
		}
	}
	if(isset($_POST["base_charid"])){
		if($allowBaseClassChange)
			classChange($_POST["base_charid"],$_SESSION["UsuarioLogin"],$_POST["new_base_id"]);
	}
	if(isset($_POST["account_charid"])){
		if(empty($_POST["account_charid"])){
			echo resposta("The character was not found.");
		}elseif(empty($_POST["new_account"])){
			echo resposta("The account was not found.\\nTry again.");
		}else{
			if($allowAccountChange)
				echo accountChange($_POST["account_charid"],$_POST["new_account"],$_SESSION["UsuarioLogin"]);
		}
	}
	if(isset($_POST["email1"]) && isset($_POST["email2"])){
		echo emailChange($_POST["email1"],$_POST["email2"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["screenshot"])){
		if($allowGalleryScreenshots)
			echo sendScreenshot($_POST["legend"],$_POST["author"],$_FILES["fileToUpload"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["videos"])){
		if($allowGalleryVideos)
			echo sendVideo($_POST["legend"],$_POST["author"],$_POST["linkVideo"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["reward"])){
		if($allowRewardSystem)
			getReward($_POST["online_reward"],$_POST["pvp_reward"],$_POST["pk_reward"],$_POST["charid"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["prime_buy"])){
		if($allowPrimeShop)
			echo buyItem($_POST["itemid"],$_POST["charid"],$_SESSION["UsuarioLogin"],false);
	}
	if(isset($_POST["post_bid"])){
		if($allowPlayerItemStore && $allowAuction)
			echo bid($_POST["itemid"],$_POST["bid"],$_SESSION["UsuarioLogin"],$_POST["charstore"]);
	}
	if(isset($_POST["store_buy"]) || isset($_POST["auction_buy"])){
		if($allowPlayerItemStore)
			echo buyItem($_POST["itemid"],$_POST["charid"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["char_store_buy"]) || isset($_POST["char_auction_buy"])){
		if($allowPlayerCharStore)
			echo buyChar($_POST["charid"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["playerStore_items"])){
		if (!$allowPlayerItemStore) {
			session_destroy();
			echo "<script>sair();</script>";
			exit;
		}
		$itemsAllowed = showAllowedItems($_POST["playerStore_charid"],$_SESSION["UsuarioLogin"],$allowSalePvpItems,$allowSaleAugItems,true);
		if(empty($itemsAllowed)){
			echo "No allowed items for sale were found";
		}else{
			$items = explode("|", $itemsAllowed);
			?>
			<div style="width:470px; margin:0 auto;">
				<div class="rank_borda rank_title" style="width:38px;">
					#
				</div>
				<div class="rank_borda rank_title" style="width:78px;">
					Loc
				</div>
				<div class="rank_borda rank_title" style="width:299px;">
					Item Name
				</div>
				<div class="rank_borda rank_title" style="width:39px;">
					Sell
				</div>
				<?php
				for($x=0;$x<(count($items)-1);$x++){
					$item = explode(",", $items[$x]);
					$foto = file_exists("images/icons/".$item[19].".png") ? $item[19] : 404;
					if($item[20] == 'WAREHOUSE'){
						$loc = 'Warehouse';
					}elseif($item[20] == 'INVENTORY'){
						$loc = 'Invetory';
					}elseif($item[20] == 'PAPERDOLL'){
						$loc = 'Equipped';
					}
					?>
					<div class="rank_borda" style="width:38px;height:38px;line-height:38px;">
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
						<span id='fancy<?php echo $x+2; ?>' title="
							<br>
							<?php echo showItemDetails($item); ?>">
							<img src='images/icons/<?php echo $foto; ?>.png' style='border:1px solid #666; width:32px; height:32px; margin-top:2px;'>
						</span>
					</div>
					<div class="rank_borda" style="width:78px;height:38px;line-height:38px;">
						<?php echo $loc; ?>
					</div>
					<div class="rank_borda" style="width:299px;height:38px;line-height:38px;overflow:hidden;">
						<?php echo $item[9]; ?>
					</div>
					<div class="rank_borda" style="width:39px;height:38px;line-height:38px;">
						<input type="checkbox" style="margin-top:12px;" value="<?php echo $item[21]; ?>" name="items[]">
					</div>
					<?php
				}
				?>
				<div style="float:left; width:100%; padding-top:30px;"></div>
			</div>
			<div style="width:470px; margin:0 auto; text-align:center;">
				Price: <input type="number" id="value" min="1" max="2000" style="width:50px;">
				<input type="radio" value="0" name="type" id="type" checked>Normal sale
				<?php
				if($allowAuction){
					echo "<input type=\"radio\" value=\"1\" name=\"type\" id=\"type\">Auction sale";
				}
				?>
				<button onclick="javascript:sell();">Confirm sale</button><br><br>
			</div>
			<?php
		}
	}
	if(isset($_POST["sellItem"])){
		if($allowPlayerItemStore)
			echo putItemsForSale($_POST["ownerid"],$_POST["itemsSell"],$_POST["price"],$_POST["type"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["playerStore_chars"])){
		if($allowPlayerCharStore)
			echo putCharForSale($_POST["playerStore_charid"],$_POST["playerStore_price"],$_POST["playerStore_type"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["itemStoreCancel"])){
		if($allowPlayerItemStore)
			echo cancelItemSale($_POST["item_id"],$_SESSION["UsuarioLogin"]);
	}
	if(isset($_POST["charStoreCancel"])){
		if($allowPlayerCharStore)
			echo cancelCharSale($_POST["char_store_id"],$_SESSION["UsuarioLogin"]);
	}
}else{
	session_destroy();
	echo "<script>sair();</script>";
	exit;
}
?>