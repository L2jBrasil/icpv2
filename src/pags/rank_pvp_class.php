<?php
//=======================================================================\\
//  ## ####### #######                                                   \\
//  ## ##      ##   ##                                                   \\
//  ## ##      ## ####  |\  | |??? ??|?? \      / |???| |???| | / |???|  \\
//  ## ##      ##       | \ | |--    |    \    /  | | | | |_| |<   ?\_   \\
//  ## ####### ##       |  \| |___   |     \/\/   |___| | |\  | \ |___|  \\
// --------------------------------------------------------------------- \\
//       Brazillian Developer / WebSite: http://www.icpfree.com.br       \\
//                 Email & Skype: ivan1507@gmail.com.br                  \\
//=======================================================================\\
if (!$allowRankClassPvp) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Top 5 PvP By Classes</h2></div>
<br>
<div style="width:460px; margin:0 auto;">
	<?php
	$classes_permitidas = array(88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,123,124,125,126,127,128,129,130,131,132,133,134,135,136);
	for($y=0;$y<count($classes_permitidas);$y++){
		$topPvp = explode("|", topClassPvp(5,$classes_permitidas[$y]));
		echo "<h3>".classe_name($classes_permitidas[$y])."</h3>";
		?>
		<div class="rank_borda rank_title" style="width:36px;">
			#
		</div>
		<div class="rank_borda rank_title" style="width:120px;">
			Nome
		</div>
		<div class="rank_borda rank_title" style="width:119px;">
			Clan
		</div>
		<div class="rank_borda rank_title" style="width:119px;">
			Ally
		</div>
		<div class="rank_borda rank_title" style="width:46px;">
			PvP
		</div>
		<?php
		for($x=0; $x < (count($topPvp)-1); $x++){
			$topPvpRecords = explode(";", $topPvp[$x]);
			if($x<3){ $img = "<img src='images/".($x+1).".gif'>"; }else{ $img = ($x+1)."º"; }
			?>
			<div class="rank_borda" style="width:36px;">
				<?php echo $img; ?>
			</div>
			<div class="rank_borda" style="width:120px;">
				<?php echo $topPvpRecords[0]; ?>
			</div>
			<div class="rank_borda" style="width:119px;">
				<?php echo $topPvpRecords[3]; ?>
			</div>
			<div class="rank_borda" style="width:119px;">
				<?php echo $topPvpRecords[2]; ?>
			</div>
			<div class="rank_borda" style="width:46px;">
				<?php echo $topPvpRecords[1]; ?>
			</div>
			<?php
		}
		?>
		<div style="float:left; width:100%; padding-top:30px;"></div>
		<?php
	}
	?>
</div>