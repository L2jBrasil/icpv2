<?php
//=======================================================================\\
//  ## ####### #######                                                   \\
//  ## ##      ##   ##                                                   \\
//  ## ##      ## ####  |\  | |¯¯¯ ¯¯|¯¯ \      / |¯¯¯| |¯¯¯| | / |¯¯¯|  \\
//  ## ##      ##       | \ | |-   |    \    /  | | | | |_| |<   ¯\_   \\
//  ## ####### ##       |  \| |___   |     \/\/   |___| | |\  | \ |___|  \\
// --------------------------------------------------------------------\\
//       Brazillian Developer / WebSite: http://www.icpfree.com.br       \\
//                 Email & Skype: ivan1507@gmail.com.br                  \\
//=======================================================================\\
?>
<div id="titulo_meio"><h2>Staff - <?php echo $nomedoservidor; ?></h2></div>
<div style="width:460px; margin:0 auto;">
	<div style="float:left; width:100%; padding-top:30px;"></div>
	<?php
	$showStaff = explode("|", showStaff());
	for($x=0;$x<(count($showStaff)-1);$x++){
		$gms = explode(",", $showStaff[$x]);
		?>
		<div class="rank_borda downloads" style="width:102px; height:102px;">
			<img src="<?php echo file_exists("images/profiles/".$gms[0]) && !empty($gms[0]) ? "images/profiles/".$gms[0] : "images/screenshots/noimage.jpg"; ?>" width="100" height="100" border="1">
		</div>
		<div class="rank_borda" style="width:308px; padding:11px; text-align:left;">
			<strong>Nome:</strong> <?php echo !empty($gms[1]) ? $gms[1] : "GM Anonymous"; ?>
		</div>
		<div class="rank_borda" style="width:308px; padding:11px; text-align:left;">
			<strong>Cargo:</strong> <?php echo !empty($gms[2]) ? $gms[2] : "Game Master"; ?>
		</div>
		<div class="rank_borda" style="width:308px; padding:11px; text-align:left;">
			<strong>E-mail:</strong> <?php echo !empty($gms[3]) ? $gms[3] : "-"; ?>
		</div>
		<div style="float:left; width:100%; padding-top:30px;"></div>
		<?php
	}
	?>
</div>