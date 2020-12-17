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
if (!isset($_SESSION["UsuarioNivel"]) || $_SESSION["UsuarioNivel"] != 1) {
	session_destroy();
	echo "<script>sair();</script>";
	exit;
}
?>
<div id="titulo_meio"><h2>All Donate History</h2></div>
<div style="width:470px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:85px;">
		Date
	</div>
	<div class="rank_borda rank_title" style="width:273px;">
		Description
	</div>
	<div class="rank_borda rank_title" style="width:36px;">
		Cost
	</div>
	<div class="rank_borda rank_title" style="width:60px;">
		Account
	</div>
	<?php
	$donateLog = explode("|", donateAdmLog());
	for($x=0; $x < (count($donateLog)-1); $x++){
		$donateLogRecords = explode(";", $donateLog[$x]);
		?>
		<div class="rank_borda" style="width:85px; font-size:9px;">
			<?php echo $donateLogRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:273px; font-size:9px;">
			<?php echo $donateLogRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:36px; font-size:9px;">
			<?php echo $donateLogRecords[2]; ?>
		</div>
		<div class="rank_borda" style="width:60px; font-size:9px;">
			<?php echo $donateLogRecords[3]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>