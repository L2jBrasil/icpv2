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
if(file_exists('../config/global_configuration.php')){
	include_once('../config/global_configuration.php');
}
if(file_exists('../config/connection.php')){
	include_once('../config/connection.php');
}
if(file_exists('../config/functions.php')){
	include_once('../config/functions.php');
}
?>
<div class="content clearfix">
	<?php
	if(!isset($_SESSION["UsuarioLogin"])){
		?>
		<div class="left">
			<h2>User Panel</h2>
			<div align="center"><br />
				<form method="post" action="javascript:logar();">
				<input type="text" id="1" placeholder="Username"></input>
				<br />
				<input type="password" id="2" placeholder="Password"></input>
				<br /><br />
				<button id="3">Enter</button>
				</form>
				<br />
				<center>Access!<br>Enter your details.</center>
			</div>
		</div>
		<div class="left">
			<h2>New account</h2>
			<div align="center"><br />
				<form method="post" action="javascript:cadastro();">
				<input type="text" id="4" placeholder="Username"></input>
				<br />
				<input type="text" id="5" style="background-position: center -63px;" placeholder="Email"></input>
				<br />
				<input type="password" id="6" placeholder="Password"></input>
				<br />
				<input type="password" id="7" placeholder="Password repeat"></input>
				<br />
				<br />
				<button id="8">Register</button>
				</form>
				<br />
			</div>
		</div>
		<div class="left right">
			<h2>Forgot your password?</h2>
			<div align="center"><br />
				<form method="post" action="javascript:remember();">
				<input type="text" id="9" placeholder="Username"></input>
				<br />
				<input type="text" id="10" style="background-position: center -63px;" placeholder="Email"></input>
				<br />
				<br />
				<button id="11">Recovery</button>
				</form>
				<br />
				Don't remember the username or email?<br>
				<a href="javascript: void(0)" onclick="javascript:abre('contato');">Contact us!</a>
			</div>
		</div>
		<?php
	}else{
		if (!isset($_SESSION["UsuarioNivel"]) || $_SESSION["UsuarioNivel"] < 0 || $_SESSION["UsuarioNivel"] > 1) {
			session_destroy();
			echo "<script>sair();</script>";
			exit;
		}
		if(isset($_POST["admUser"]) && $_POST["admUser"] == 1 && $_SESSION["UsuarioNivel"] == 1){
			?>
			<script type="text/javascript">
				$('.icpnetworks').html("<li class=\"sep\">|</li><li><a href=\"javascript: void(0)\" onclick=\"admUserPanel('0')\">User Panel</a></li>");
			</script>
			<div class="left" style="width:208px;">
				<div style="height:34%;width:100%;">
					<h2>Admin Profile</h2>
					<?php
					$getProfile = getAdmProfile($_SESSION["UsuarioLogin"]);
					$profile = explode(";",$getProfile);
					?>
					<div class="btn-default" style="font-size:9px;">
						<center><img id="profileImg1" src="<?php echo file_exists("../images/profiles/".$profile[0]) && !empty($profile[0]) ? "./images/profiles/".$profile[0] : "./images/screenshots/noimage.jpg"; ?>" width="100" height="100" border="1" style="margin-bottom: 4px;"></center><br>
						Display name: <span id="profile_name"><?php echo empty($profile[1]) ? "GM Anonymous" : $profile[1]; ?></span><br>
						Employment: <span id="profile_employ"><?php echo empty($profile[2]) ? "Game Master" : $profile[2]; ?></span><br>
						Service email: <span id="profile_email"><?php echo empty($profile[3]) ? "-" : $profile[3]; ?></span><br><br>
						<a href="javascript: void(0)" onclick="javascript:abre('painel&pagina=_adm_profile');" id="btn_profile"><?php echo empty($getProfile) ? "Create profile" : "Edit profile"; ?></a>
					</div>
				</div>
			</div>
			<div class="left" style="width:208px;">
				<div style="height:34%;width:100%;">
					<h2>Admin Panel</h2>
					<br>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=_adm_news');"><i class="fa fa-newspaper-o icon"></i> News</a>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=_adm_prime_shop');"><i class="fas fa-shopping-cart icon"></i> Prime Shop</a>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=_adm_screenshots');"><i class="fa fa-camera icon"></i> Screenshots</a>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=_adm_videos');"><i class="fa fa-video-camera icon"></i> Videos</a>
				</div>
			</div>
			<div class="left" style="width:208px;">
				<h2>Admin Panel</h2>
				<br>
				<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=_adm_donate_log');"><i class="fa fa-search icon"></i> All Donation History</a>
				<br>
				<h2>Give Donate Coins</h2>
				<br>
				<input type="text" id="giveAccount" style="background: #fff; color:#000; padding:3px; height:20px; width:145px;" placeholder="Account"></input><input type="number" min="1" id="giveCoins" style="background: #fff; color:#000; height:24px; width:50px; outline:none; border:none;" placeholder="Coins"></input>
				<br />
				<br />
				<center><button onclick="giveCoins()">Give coins</button></center>
			</div>
			<div class="left right" style="width:209px;">
				<h2>Sponsor</h2>
				<br>
				<center>
					<a href="http://l2jbrasil.com" target="_blank" style="font-size:9px;">
						<img src="images/l2jbrasil.webp" alt="L2jBrasil - O maior fórum de Lineage 2 da america latina!" height="40" border="0" /><br><br>
						http://www.l2jbrasil.com.br
					</a>
				</center>
				<br>
				<h2>Developer</h2>
				<br>
				<center>
					<a href="http://icpfree.com.br" target="_blank" style="font-size:9px;">
						<img src="images/selo_icp.png" alt=" Icp Networks - design &amp; desenvolvimentos web" height="40" border="0" /><br><br>
						http://www.icpnetworks.com.br
					</a>
				</center>
			</div>
			<?php
		}else{
			if($_SESSION["UsuarioNivel"] == 1){
				?>
				<script type="text/javascript">
					$('.icpnetworks').html("<li class=\"sep\">|</li><li><a href=\"javascript: void(0)\" onclick=\"admUserPanel('1')\">Admin Panel</a></li>");
				</script>
				<?php
			}
			?>
			<div class="left" style="width:208px;">
				<div style="height:34%;width:100%;">
					<h2>User Panel</h2>
					<br>
					<center>
						<table border='0' width='100%' cellspacing='0' cellpadding='0'>
							<tr>
								<td align='center'>
									<?php
									if(date("H")>=12 && date("H")<18){
										echo "Good afternoon, <b>".$_SESSION["UsuarioLogin"]."</b>.";
									}else if(date("H")>=18 && date("H")<24){
										echo "Good night, <b>".$_SESSION["UsuarioLogin"]."</b>.";
									}else if(date("H")>=0 && date("H")<12){
										echo "Good morning, <b>".$_SESSION["UsuarioLogin"]."</b>.";
									}
									?>
									<br>
									Be welcome!
								</td>
							</tr>
						</table>
					</center>
				</div>
				<div style="height:66%;width:100%;">
					<h2>Donations</h2>
					<div style="text-align:center;margin:7px;">Your credits: <span id="balance"><?php echo number_format(credit($_SESSION["UsuarioLogin"]),0,".","."); ?></span> <?php echo $nomeMoeda; ?></div>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('doacao');"><i class="fa fa-credit-card icon" aria-hidden="true"></i> Make donation</a>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=donate');"><i class="fa fa-search icon"></i> Donation History</a>
				</div>
			</div>
			<div class="left" style="width:209px;">
				<h2>Menu</h2>
				<br>
				<?php
				if($allowMyAccount){
					?>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=account');"><i class="fa fa-user-o icon"></i> My account</a>
					<?php
				}
				?>
				<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=unlock');"><i class="fa fa-unlock icon"></i> Unlock character</a>
				<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=passChange');"><i class="fas fa-sync-alt icon"></i> Pass change</a>
				<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=emailChange');"><i class="fa fa-at icon"></i> Email change</a>
			</div>
			<div class="left" style="width:209px;">
				<h2>Menu</h2>
				<br>
				<?php
				if($allowEnchantItems){
					?>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=enchant');"><i class="fa fa-shield icon"></i> Safe Enchant</a>
					<?php
				}
				if($allowBaseClassChange || $allowNickChange || $allowSexChange || $allowAccountChange){
					?>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=charChanges');"><i class="fas fa-sync-alt icon"></i> Character Changes</a>
					<?php
				}
				if($allowGalleryScreenshots){
					?>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=screenshots');"><i class="fa fa-camera icon"></i> My Screenshots</a>
					<?php
				}
				if($allowGalleryVideos){
					?>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=videos');"><i class="fa fa-video-camera icon"></i> My Videos</a>
					<?php
				}
				?>
			</div>
			<div class="left right" style="width:209px;">
				<h2>Menu</h2>
				<br>
				<?php
				if($allowRewardSystem){
					?>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=rewards');"><i class="fa fa-gift icon"></i> Rewards</a>
					<?php
				}
				if($allowPrimeShop){
					?>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=premium');"><i class="fas fa-shopping-cart icon"></i> Prime Shop</a>
					<?php
				}
				if($allowPlayerItemStore){
					?>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=itemStore');"><i class="fa fa-shopping-cart icon"></i> Players Items Store</a>
					<?php
				}
				if($allowPlayerCharStore){
					?>
					<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('painel&pagina=charStore');"><i class="fa fa-shopping-cart icon"></i> Players Chars Store</a>
					<?php
				}
				?>
			</div>
			<?php
		}
	}
	?>
	<div class="loading">Loading...<br><img src="images/loading.gif"><br>Please, wait.</div>
	<div class="msg"></div>
	<div class="alvo"></div>
</div>