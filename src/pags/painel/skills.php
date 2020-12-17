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
?>
<script>
	document.getElementById("baseClass").click();
</script>
<div id="char_skills">
	<div id="char_skills_top">
		<div id="char_status_close">
			<a href="javascript: void(0)" onclick="closeWindow('stats_char');">X</a>
		</div>
	</div>
	<div id="char_skills_meio">
		<?php
		$sql = explode("?", showCharSkills($_POST["char_id"],$_POST["login"]));
		$classes = explode(";", $sql[0]);
		?>
		<div class="subclassMenu">
			<?php
			for($y=0;$y<(count($classes)-1);$y++){
				?>
				<button class="subclassLink" onclick="openMenuSubclass(event, '<?php echo $classes[$y]; ?>');"<?php echo $y==0 ? " id=\"baseClass\"" : null; ?>><?php echo $classes[$y]; ?></button>
				<?php
			}
			?>
		</div>
		<?php
		$classe = explode("|", $sql[1]);
		for($x=0;$x<(count($classe)-1);$x++){
			$classe_skill = explode(";", $classe[$x]);
			?>
			<div id="<?php echo $classes[$x]; ?>" class="skillsContent">
				<?php
				for($y=0;$y<(count($classe_skill)-1);$y++){
					$skill = explode(",", $classe_skill[$y]);
					$skill_img = "images/icons/skill".str_pad((int) $skill[0],4,"0",STR_PAD_LEFT).".png";
					?>
						<div class="char_skills_line<?php echo ($y % 2) == 0 ? null : " char_skills_line_hover"; ?>">
							<div id="char_skills_line_left">
								<img src="<?php echo file_exists($skill_img) ? $skill_img : "images/icons/404.png"; ?>" style="width:32px; height:32px;">
							</div>
							<div id="char_skills_line_right">
								<?php
								echo "<strong>".$skill[1]."</strong> <span style='color:#b09979;'>Lv ".$skill[2]."</span>";
								echo !empty($skill[3]) ? "<br>Enchanted <span style='color:#ffd969;'>+".$skill[3]."</span>" : null;
								?>
							</div>
						</div>
					<?php
				}
				?>
			</div>
			<?php
		}
		?>
	</div>
</div>