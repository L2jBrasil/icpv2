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
if (!$allowRankPk) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Top 30 PK</h2></div>
<br>
<div style="width:460px; margin:0 auto;">
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
		Classe
	</div>
	<div class="rank_borda rank_title" style="width:46px;">
		PK
	</div>
	<?php
	$topPk = explode("|", topPk(30));
	for($x=0; $x < (count($topPk)-1); $x++){
		$topPkRecords = explode(";", $topPk[$x]);
		if($x<3){ $img = "<img src='images/".($x+1).".gif'>"; }else{ $img = ($x+1)."º"; }
		?>
		<div class="rank_borda" style="width:36px;">
			<?php echo $img; ?>
		</div>
		<div class="rank_borda" style="width:120px;">
			<?php echo $topPkRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:119px;">
			<?php echo $topPkRecords[3]; ?>
		</div>
		<div class="rank_borda" style="width:119px;">
			<?php echo $topPkRecords[2]; ?>
		</div>
		<div class="rank_borda" style="width:46px;">
			<?php echo $topPkRecords[1]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>