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
if (!$allowRankClanhall) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Clan Hall Info</h2></div>
<br>
<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:140px;">
		Clan Hall
	</div>
	<div class="rank_borda rank_title" style="width:66px;">
		Local
	</div>
	<div class="rank_borda rank_title" style="width:119px;">
		Dono
	</div>
	<div class="rank_borda rank_title" style="width:119px;">
		Ally
	</div>
	<?php
	$clanHall = explode("|", rankClanHall());
	for($x=0; $x < (count($clanHall)-1); $x++){
		$clanHallRecords = explode(";", $clanHall[$x]);
		?>
		<div class="rank_borda" style="width:140px;">
			<?php echo $clanHallRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:66px;">
			<?php echo $clanHallRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:119px;">
			<?php echo $clanHallRecords[2]; ?>
		</div>
		<div class="rank_borda" style="width:119px;">
			<?php echo $clanHallRecords[3]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>