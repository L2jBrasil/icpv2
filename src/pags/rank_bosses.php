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
if (!$allowRankBosses) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Bosses Status</h2></div>

<div style="padding:0px 15px;">
	O Raid Boss Status informa o status de todos os Raid Boss, caso esteja morto, indica sua data e hora de respawn.<br><br>
	Cada restart atualiza a ferramenta.<br>
</div>

<br>
<h2>Grand Boss Status</h2>
<br>

<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:140px;">
		Nome
	</div>
	<div class="rank_borda rank_title" style="width:90px;">
		Status
	</div>
	<div class="rank_borda rank_title" style="width:218px;">
		Respawn
	</div>
	<?php
	$rankBossesArray = explode("$", rankBosses("bigboss"));
	for($x=0;$x<(count($rankBossesArray)-1);$x++){
		$rankBosses = explode("|", $rankBossesArray[$x]);
		?>
		<div class="rank_borda" style="width:140px; height:133px;">
			<?php echo $rankBosses[0]; ?><br>
			<img  alt="" src="images/bosses/<?php echo $rankBosses[0]; ?>.jpg" width="130" height="113"  pbsrc="images/bosses/<?php echo $rankBosses[0]; ?>.jpg" pbCaption="<?php echo $boss_name; ?>" class="PopBoxImageSmall" onclick="Pop(this,50,'PopBoxImageLarge');">
		</div>
		<div class="rank_borda" style="width:90px; height:133px; line-height:133px;">
			<?php echo $rankBosses[2]; ?>
		</div>
		<div class="rank_borda" style="width:218px; height:133px; line-height:133px;">
			<?php echo $rankBosses[1]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
	
	<br>
	<br>
	<h2>Raid Boss Status</h2>
	<br>
	
	<div class="rank_borda rank_title" style="width:229px;">
		Nome
	</div>
	<div class="rank_borda rank_title" style="width:69px;">
		Status
	</div>
	<div class="rank_borda rank_title" style="width:150px;">
		Respawn
	</div>
	<?php
	$rankBossesArray = explode("$", rankBosses("raidboss"));
	for($x=0;$x<(count($rankBossesArray)-1);$x++){
		$rankBosses = explode("|", $rankBossesArray[$x]);
		?>
		<div class="rank_borda" style="width:229px;">
			<?php echo $rankBosses[0]; ?>
		</div>
		<div class="rank_borda" style="width:69px;">
			<?php echo $rankBosses[2]; ?>
		</div>
		<div class="rank_borda" style="width:150px;">
			<?php echo $rankBosses[1]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:20px;"></div>
</div>