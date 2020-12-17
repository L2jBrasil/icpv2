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
if (!isset($_SESSION["UsuarioNivel"]) || $_SESSION["UsuarioNivel"] < 0 || $_SESSION["UsuarioNivel"] > 1) {
	session_destroy();
	echo "<script>sair();</script>";
	exit;
}
$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"]));
if((count($myCharList)-1) > 0){
	$cor = '#af9a78';
	?>
	<script>
		$('.stats_char').hide();
	</script>
	<div id="char_stat">
		<div id="stat_name" style="width:35px;">
			Name
		</div>
		<div id="stat_name" style="padding-left:1px; width:148px;">
			<select onchange="accountChar();" id="stat_select" name="char">
				<?php
				for($x=0; $x < (count($myCharList)-1); $x++){
					$myCharListResult = explode(";", $myCharList[$x]);
					if($x == 0){
						if(isset($_POST["char_id"]))
							$char_info = explode(";", charInfo($_POST["char_id"], $_SESSION["UsuarioLogin"]));
						else
							$char_info = explode(";", charInfo($myCharListResult[1], $_SESSION["UsuarioLogin"]));
					}
					if($_POST["char_id"] == $myCharListResult[1]){
						echo"<option value=".$myCharListResult[1]." selected>".$myCharListResult[0]."</option>";
					}else{
						echo"<option value=".$myCharListResult[1].">".$myCharListResult[0]."</option>";
					}
				}
				$exp_bar = expPercent($char_info[8]);
			?>
			</select>
		</div>
		<div id="stat_name" style="width:90px; padding-left:4px;"></div>
		<div id="stat_name" style="padding-top:1px; width:35px; text-align:center;">
			Lv
		</div>
		<div id="stat_name" style="padding-left:5px; padding-top:1px; width:240px; color:<?php echo $cor; ?>; text-align:left;">
			<?php echo $char_info[0]." ".$char_info[10]; ?>
		</div>
		<div id="stat_bar" style="width:35px; padding-top:4px;">
			CP
		</div>
		<div id="stat_bar" style="padding-left:4px; width:92px; padding-top:3px;">
			<div class="stat_bar3">
				<img src="images/stats/amarelo.png" class="stat_bar" style="width:<?php echo HpCpMpPercent($char_info[3],$char_info[4]); ?>px; padding-top:3px;" align="left">
				<div class="stat_bar2" style="top:2px;">
					<?php echo intval($char_info[3]); ?> / <?php echo intval($char_info[4]); ?>
				</div>
			</div>
		</div>
		<div id="stat_bar" style="padding-top:3px; width:45px;">
			SP
		</div>
		<div id="stat_bar" style="width:83px; text-align:right; padding-top:4px; padding-right:22px; color:<?php echo $cor; ?>;">
			<?php echo $char_info[7]; ?>
		</div>
		<div id="stat_bar" style="width:35px;">
			HP
		</div>
		<div id="stat_bar" style="padding-left:4px; width:92px;">
			<div class="stat_bar3">
				<img src="images/stats/vermelho.png" class="stat_bar" style="width:<?php echo HpCpMpPercent($char_info[1],$char_info[2]); ?>px;" align="left">
				<div class="stat_bar2">
					<?php echo intval($char_info[1]); ?> / <?php echo intval($char_info[2]); ?>
				</div>
			</div>
		</div>
		<div id="stat_bar" style="width:45px;">
			Karma
		</div>
		<div id="stat_bar" style="width:83px; text-align:right; padding-right:22px; color:<?php echo $cor; ?>;">
			<?php echo $char_info[9]; ?>
		</div>
		<div id="stat_bar" style="width:35px;">
			MP
		</div>
		<div id="stat_bar" style="padding-left:4px; width:92px;">
			<div class="stat_bar3">
				<img src="images/stats/azul.png" class="stat_bar" style="width:<?php echo HpCpMpPercent($char_info[5],$char_info[6]); ?>px;" align="left">
				<div class="stat_bar2">
					<?php echo intval($char_info[5]); ?> / <?php echo intval($char_info[6]); ?>
				</div>
			</div>
		</div>
		<div id="stat_bar" style="width:45px;">
			Status
		</div>
		<div id="stat_bar" style="width:83px; text-align:right; padding-right:22px; color:<?php echo $cor; ?>;">
			<?php echo $char_info[11] == 1 ? "Online" : isset($char_info[11]) ? "Offline" : null; ?>
		</div>
		<div id="stat_bar" style="width:35px;">
			Exp
		</div>
		<div id="stat_bar" style="padding-left:4px; width:223px;">
			<div class="stat_bar3">
				<img src="images/stats/exp.png" class="stat_bar" style="width:<?php echo $exp_bar; ?>%;" align="left">
				<div class="stat_bar2" style="width:226px; padding-right:20px;">
					<?php echo $exp_bar; ?>%
				</div>
			</div>
		</div>
	</div>
	<?php
	$buff_list = explode("|",showCharBuffs($char_info[12],$_SESSION["UsuarioLogin"]));
	if(count($buff_list) > 1){
		?>
		<table cellpadding='0' cellspacing='0' border='0' width='100%' height='100%'><tr><td style='width:14px; height:2px; background-image:url(images/stats/buff1.png); background-repeat:no-repeat;'></td><td style='width:312px;'></td></tr><tr><td style='width:14px; background-image:url(images/stats/buff2.png);'></td><td style='width:312px;'>
		<?php
		for($d=0;$d<(count($buff_list)-1);$d++){
			$buff = explode(";",$buff_list[$d]);
			$buff_img = "images/icons/skill".str_pad((int) $buff[0],4,"0",STR_PAD_LEFT).".png";
			?>
			<div class='buff_title'>
				<img src='<?php echo file_exists($buff_img) ? $buff_img : "images/icons/404.png"; ?>' width='26' height='26' border='0'>
				<span>
					<div style='border:1px solid #454135; min-width:145px; text-shadow:2px 2px #000; padding: 5px; font-size:10px;'>
						<font color='white'><?php echo $buff[1]; ?></font> <font color='#a1a1a1'>Lv</font> <font color='#ae9977'><?php echo $buff[2]; ?></font><br><font color='#a3a3a3'>Remaining Time :</font> <font color='#ae9977'><?php echo $buff[3]; ?></font>
					</div>
				</span>
			</div>
			<?php
		}
		?>	
		</td></tr><tr><td style='width:14px; height:2px; background-image:url(images/stats/buff3.png); background-repeat:no-repeat;'></td><td style='width:312px;'></td></tr></table>
		<?php
	}
	?>
	<div id="menu_horizontal">
		<div id="botao_stats">
			<div class="btn_stats" title="Status" onclick="statsChar('status', '<?php echo $char_info[12]; ?>', '<?php echo $_SESSION["UsuarioLogin"]; ?>');"></div>
		</div>
		<div style="float:left; width:3px; height:32px;"></div>
		<div id="botao_bag">
			<div class="btn_bag" title="Inventory" onclick="statsChar('inventory', '<?php echo $char_info[12]; ?>', '<?php echo $_SESSION["UsuarioLogin"]; ?>');"></div>
		</div>
		<div style="float:left; width:3px; height:32px;"></div>
		<div id="botao_skills">
			<div class="btn_skills" title="Skills" onclick="statsChar('skills', '<?php echo $char_info[12]; ?>', '<?php echo $_SESSION["UsuarioLogin"]; ?>');"></div>
		</div>
		<div style="float:left; width:3px; height:32px;"></div>
		<div id="botao_quests">
			<div class="btn_quests" title="Quests" onclick="statsChar('quests', '<?php echo $char_info[12]; ?>', '<?php echo $_SESSION["UsuarioLogin"]; ?>');"></div>
		</div>
		<div style="float:left; width:3px; height:32px;"></div>
		<div id="botao_opcoes">
			<div class="btn_warehouse" title="Warehouse" onclick="statsChar('warehouse', '<?php echo $char_info[12]; ?>', '<?php echo $_SESSION["UsuarioLogin"]; ?>');"></div>
		</div>
	</div>
	<div class="stats_char"></div>
	<?php
}else{
	echo"Você ainda não criou nenhum char em nosso servidor.";
}
?>