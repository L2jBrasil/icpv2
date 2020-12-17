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
if (!$allowRankAdena) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Top 30 Adena</h2></div>
<br>
<div style="font-size:12px; padding-left:13px;">
	Gold Bar = <?php echo number_format($goldBarValue,0,".","."); ?><br>
	Total = Adenas + (Gold Bar * <?php echo number_format($goldBarValue,0,".","."); ?>)
</div>
<br>
<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:36px;">
		#
	</div>
	<div class="rank_borda rank_title" style="width:133px;">
		Nome
	</div>
	<div class="rank_borda rank_title" style="width:96px;">
		Adena
	</div>
	<div class="rank_borda rank_title" style="width:79px;">
		Gold Bar
	</div>
	<div class="rank_borda rank_title" style="width:96px;">
		Total
	</div>
	<?php
	$topAdena = explode("|", topAdena(30));
	for($x=0; $x < (count($topAdena)-1); $x++){
		$topAdenaRecords = explode(";", $topAdena[$x]);
		if($x<3){ $img = "<img src='images/".($x+1).".gif'>"; }else{ $img = ($x+1)."º"; }
		?>
		<div class="rank_borda" style="width:36px;">
			<?php echo $img; ?>
		</div>
		<div class="rank_borda" style="width:133px;">
			<?php echo $topAdenaRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:96px;">
			<?php echo $topAdenaRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:79px;">
			<?php echo $topAdenaRecords[2]; ?>
		</div>
		<div class="rank_borda" style="width:96px;">
			<?php echo $topAdenaRecords[3]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>