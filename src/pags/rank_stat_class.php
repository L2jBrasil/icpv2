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
if (!$allowRankServerClasses) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Created Classes</h2></div>
<br>
<div style="width:470px; margin:0 auto;">
	<?php
	$classes_permitidas = array(88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,123,124,125,126,127,128,129,130,131,132,133,134,135,136);
	$porcentagem = null;
	$height = 0;
	for($y=0;$y<count($classes_permitidas);$y++){
		$percent = rankClass($classes_permitidas[$y]);
		$porcentagem .= $percent.";";
		$height = $percent > $height ? $percent : $height;
	}
	$height_multiplicador = number_format(100/$height);
	$porcentagem = explode(";",$porcentagem);
	$width = 0;
	for($z=0;$z<count($classes_permitidas);$z++){
		if($height_multiplicador*$porcentagem[$z] > 0){
			$width += 1;
		}
	}
	$width_multiplicador = number_format(7*$width);
	?>
	<div style="width:<?php echo ($width_multiplicador+($width*2)+2) ?>px; height:104px; border:1px solid #333; background-color:#171717; margin:0 auto;">
		<?php
		for($x=0;$x<count($classes_permitidas);$x++){
			$height_total = $height_multiplicador*$porcentagem[$x] > 100 ? 100 : $height_multiplicador*$porcentagem[$x];
			if($height_total > 0){
				?>
				<div style="float:left; width:7px; height:100px; margin:2px 0px 2px 2px;">
					<div style="width:100%; max-height:100px; height:<?php echo $height_total; ?>px; margin-top:<?php echo 100-$height_total; ?>px; background-color:#999; box-shadow: 1px 1px #555;" title="<?php echo classe_name($classes_permitidas[$x]).": ".$porcentagem[$x]."%"; ?>"></div>
				</div>
				<?php
			}
		}
		?>
	</div>
	<div style="width:250px; margin:0 auto;">
		<div style="float:left; width:100%; padding-top:30px;"></div>
		<div class="rank_borda rank_title" style="width:182px;">
			Class Name
		</div>
		<div class="rank_borda rank_title" style="width:60px;">
			Perc.
		</div>
		<?php
		for($d=0; $d < count($classes_permitidas); $d++){
			if($d<3){ $img = "<img src='images/".($d+1).".gif'>"; }else{ $img = ($d+1)."º"; }
			?>
			<div class="rank_borda" style="width:182px;">
				<?php echo classe_name($classes_permitidas[$d]); ?>
			</div>
			<div class="rank_borda" style="width:60px;">
				<?php echo empty($porcentagem[$d]) ? "0.00%" : $porcentagem[$d]."%"; ?>
			</div>
			<?php
		}
		?>
		<div class="rank_borda" style="width:182px;">
			Total
		</div>
		<div class="rank_borda" style="width:60px;">
			<?php echo array_sum($porcentagem)."%"; ?>
		</div>
		<div style="float:left; width:100%; padding-top:30px;"></div>
	</div>
</div>