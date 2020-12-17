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
if (!$allowRankClan) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Top 30 Clan</h2></div>
<br>
<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:36px;">
		#
	</div>
	<div class="rank_borda rank_title" style="width:130px;">
		Nome
	</div>
	<div class="rank_borda rank_title" style="width:46px;">
		Level
	</div>
	<div class="rank_borda rank_title" style="width:99px;">
		Reputação
	</div>
	<div class="rank_borda rank_title" style="width:129px;">
		Ally
	</div>
	<?php
	$topClan = explode("|", topClan(30));
	for($x=0; $x < (count($topClan)-1); $x++){
		$topClanRecords = explode(";", $topClan[$x]);
		if($x<3){ $img = "<img src='images/".($x+1).".gif'>"; }else{ $img = ($x+1)."º"; }
		?>
		<div class="rank_borda" style="width:36px;">
			<?php echo $img; ?>
		</div>
		<div class="rank_borda" style="width:130px;">
			<?php echo $topClanRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:46px;">
			<?php echo $topClanRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:99px;">
			<?php echo $topClanRecords[2]; ?>
		</div>
		<div class="rank_borda" style="width:129px;">
			<?php echo $topClanRecords[3]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>