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
if (!$allowRankRaidPoints) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Top 30 Raid Points</h2></div>
<br>
<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:36px;">
		#
	</div>
	<div class="rank_borda rank_title" style="width:128px;">
		Nome
	</div>
	<div class="rank_borda rank_title" style="width:96px;">
		Class
	</div>
	<div class="rank_borda rank_title" style="width:104px;">
		Clan
	</div>
	<div class="rank_borda rank_title" style="width:76px;">
		Points
	</div>
	<?php
	$topRaid = explode("|", topRaidPoints(30));
	for($x=0; $x < (count($topRaid)-1); $x++){
		$topRaidRecords = explode(";", $topRaid[$x]);
		if($x<3){ $img = "<img src='images/".($x+1).".gif'>"; }else{ $img = ($x+1)."º"; }
		?>
		<div class="rank_borda" style="width:36px;">
			<?php echo $img; ?>
		</div>
		<div class="rank_borda" style="width:128px;">
			<?php echo $topRaidRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:96px;">
			<?php echo $topRaidRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:104px;">
			<?php echo $topRaidRecords[2]; ?>
		</div>
		<div class="rank_borda" style="width:76px;">
			<?php echo $topRaidRecords[3]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>