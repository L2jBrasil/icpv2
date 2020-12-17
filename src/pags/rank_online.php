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
if (!$allowRankOnline) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Top 30 Online</h2></div>
<br>
<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:36px;">
		#
	</div>
	<div class="rank_borda rank_title" style="width:145px;">
		Nome
	</div>
	<div class="rank_borda rank_title" style="width:119px;">
		Online
	</div>
	<div class="rank_borda rank_title" style="width:144px;">
		Clan
	</div>
	<?php
	$topOnline = explode("|", topOnline(30));
	for($x=0; $x < (count($topOnline)-1); $x++){
		$topOnlineRecords = explode(";", $topOnline[$x]);
		if($x<3){ $img = "<img src='images/".($x+1).".gif'>"; }else{ $img = ($x+1)."º"; }
		?>
		<div class="rank_borda" style="width:36px;">
			<?php echo $img; ?>
		</div>
		<div class="rank_borda" style="width:145px;">
			<?php echo $topOnlineRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:119px;">
			<?php echo $topOnlineRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:144px;">
			<?php echo $topOnlineRecords[2]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>