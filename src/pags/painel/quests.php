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
<div id="char_quests">
	<div id="char_quests_top">
		<div id="char_status_close">
			<a href="javascript: void(0)" onclick="closeWindow('stats_char');">X</a>
		</div>
	</div>
	<div id="char_quests_meio">
		<?php
		$sql = explode("|", showCharQuests($_POST["char_id"],$_POST["login"]));
		for($x=0;$x<(count($sql)-1);$x++){
			$skill = explode(",", $sql[$x]);
			?>
			<div class="char_quests_line<?php echo ($x % 2) == 0 ? null : " char_quests_line_hover"; ?>">
				<div id="char_quests_line_left">
					<?php
					$pieces = preg_split('/(?=[A-Z])/', str_replace("_"," ", $skill[0]));
					$name = null;
					if(count($pieces) > 1){
						for($y=1;$y<count($pieces);$y++){
							$name .= $pieces[$y];
							$name .= $y != (count($pieces)-1) ? " " : null;
						}
					}else{
						$pieces = explode("_", $skill[0]);
						for($y=1;$y<count($pieces);$y++){
							$name .= ucfirst($pieces[$y]);
							$name .= $y != (count($pieces)-1) ? " " : null;
						}
					}
					echo "<strong>".$name."</strong>";
					?>
				</div>
				<div id="char_quests_line_right">
					<?php
					echo "<span style='color:#b09979;'>".$skill[1]."</span>";
					?>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</div>