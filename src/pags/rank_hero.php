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
if (!$allowRankHeros) {
	header("Location: index.php");
	exit;
}
$mes = null;
switch (date("m")){
	case 1:		$mes = "Janeiro";		break;
	case 2:		$mes = "Fevereiro";		break;
	case 3:		$mes = "Março";			break;
	case 4:		$mes = "Abril";			break;
	case 5:		$mes = "Maio";			break;
	case 6:		$mes = "Junho";			break;
	case 7:		$mes = "Julho";			break;
	case 8:		$mes = "Agosto";		break;
	case 9:		$mes = "Setembro";		break;
	case 10:	$mes = "Outubro";		break;
	case 11:	$mes = "Novembro";		break;
	case 12:	$mes = "Dezembro";		break; 
}
?>
<div id="titulo_meio"><h2>Heróis do mês de <?php echo $mes; ?></h2></div>
<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:151px;">
		Nome
	</div>
	<div class="rank_borda rank_title" style="width:151px;">
		Clan
	</div>
	<div class="rank_borda rank_title" style="width:146px;">
		Classe
	</div>
	<?php
	$topHero = explode("|", topHero(0));
	for($x=0; $x < (count($topHero)-1); $x++){
		$topHeroRecords = explode(";", $topHero[$x]);
		?>
		<div class="rank_borda" style="width:151px;">
			<?php echo $topHeroRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:151px;">
			<?php echo $topHeroRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:146px;">
			<?php echo $topHeroRecords[2]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
	<div id="titulo_meio"><h2>Top 20 Heróis</h2></div>
	<div class="rank_borda rank_title" style="width:36px;">
		#
	</div>
	<div class="rank_borda rank_title" style="width:126px;">
		Nome
	</div>
	<div class="rank_borda rank_title" style="width:126px;">
		Clan
	</div>
	<div class="rank_borda rank_title" style="width:126px;">
		Classe
	</div>
	<div class="rank_borda rank_title" style="width:26px;">
		#
	</div>
	<?php
	$topHero = explode("|", topHero(20));
	for($x=0; $x < (count($topHero)-1); $x++){
		$topHeroRecords = explode(";", $topHero[$x]);
		if($x<3){ $img = "<img src='images/".($x+1).".gif'>"; }else{ $img = ($x+1)."º"; }
		?>
		<div class="rank_borda" style="width:36px;">
			<?php echo $img; ?>
		</div>
		<div class="rank_borda" style="width:126px;">
			<?php echo $topHeroRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:126px;">
			<?php echo $topHeroRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:126px;">
			<?php echo $topHeroRecords[2]; ?>
		</div>
		<div class="rank_borda" style="width:26px;">
			<?php echo $topHeroRecords[3]."x"; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>