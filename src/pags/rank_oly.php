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
if (!$allowRankOly) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Olympiad's</h2></div>

<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:146px;">
		Nome
	</div>
	<div class="rank_borda rank_title" style="width:76px;">
		Lutas
	</div>
	<div class="rank_borda rank_title" style="width:76px;">
		Pontos
	</div>
	<div class="rank_borda rank_title" style="width:146px;">
		Classe
	</div>
	<?php
	$topOly = explode("|", topOly());
	for($x=0; $x < (count($topOly)-1); $x++){
		$topOlyRecords = explode(";", $topOly[$x]);
		?>
		<div class="rank_borda" style="width:146px;">
			<?php echo $topOlyRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:76px;">
			<?php echo number_format($topOlyRecords[2],0,'.','.'); ?>
		</div>
		<div class="rank_borda" style="width:76px;">
			<?php echo number_format($topOlyRecords[1],0,'.','.'); ?>
		</div>
		<div class="rank_borda" style="width:146px;">
			<?php echo $topOlyRecords[3]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>