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
$sql = explode(";", charStatus($_POST["char_id"],$_POST["login"]));
?>
<div id="char_status">
	<div id="char_status_top">
		<div id="char_status_close">
			<a href="javascript: void(0)" onclick="closeWindow('stats_char');">X</a>
		</div>
	</div>
	<div id="char_status_combat">
		<div id="char_status_combat1">
			<div id="char_status_combat_left">
				Title:<br>
				Sex:<br>
				Online time:<br>
				Last Access:<br>
				Clan:<br>
				Clan Leader:<br>
				Clan Ally:
			</div>
			<div id="char_status_combat_right">
				<?php echo $sql[0]; ?><br>
				<?php echo $sql[1]; ?><br>
				<?php echo $sql[2]; ?><br>
				<?php echo $sql[3]; ?><br>
				<?php echo $sql[4]; ?><br>
				<?php echo $sql[5]; ?><br>
				<?php echo $sql[6]; ?>
			</div>
		</div>
		<div id="char_status_combat2">
			<div id="char_status_combat_left">
				Base Class:<br>
				Sub Class:<br>
				Nobless:<br>
				Hero:<br>
				Oly fights:<br>
				Oly points:<br>
				Location:
			</div>
			<div id="char_status_combat_right">
				<span style="font-size:8px;"><?php echo $sql[7].", Lv. ".$sql[24]; ?></span><br>
				<?php
				$sub = explode(",",$sql[8]);
				echo (count($sub)-2) > 0 ? "Yes, ".(count($sub)-2).". " : "No";
				?><br>
				<?php echo $sql[9]; ?><br>
				<?php echo $sql[10]; ?><br>
				<?php echo $sql[11]; ?><br>
				<?php echo $sql[12]; ?><br>
				<span style="font-size:9px;"><?php echo $sql[23]; ?></span>
			</div>
		</div>
	</div>
	<div id="char_status_div"></div>
	<div id="char_status_basic">
		<div id="char_status_basic1">
			<div id="char_status_basic_left">
				STR<br>
				INT
			</div>
			<div id="char_status_basic_right">
				<?php echo $sql[13]; ?><br>
				<?php echo $sql[14]; ?>
			</div>
		</div>
		<div id="char_status_basic2">
			<div id="char_status_basic_left">
				DEX<br>
				WIT
			</div>
			<div id="char_status_basic_right">
				<?php echo $sql[15]; ?><br>
				<?php echo $sql[16]; ?>
			</div>
		</div>
		<div id="char_status_basic3">
			<div id="char_status_basic_left">
				CON<br>
				MEN
			</div>
			<div id="char_status_basic_right">
				<?php echo $sql[17]; ?><br>
				<?php echo $sql[18]; ?>
			</div>
		</div>
	</div>
	<div id="char_status_div"></div>
	<div id="char_status_social">
		<div id="char_status_social1">
			<div id="char_status_social_left">
				PvP's:<br>
				Pk's:
			</div>
			<div id="char_status_social_right">
				<?php echo $sql[19]; ?><br>
				<?php echo $sql[20]; ?>
			</div>
		</div>
		<div id="char_status_social2">
			<div id="char_status_social_left">
				Rec. Remaining:<br>
				Raid points:
			</div>
			<div id="char_status_social_right">
				<?php echo $sql[21]; ?><br>
				<?php echo $sql[22]; ?>
			</div>
		</div>
	</div>
</div>