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
<div id="titulo_meio"><h2>Donation history</h2></div>
<div style="width:470px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:60px;">
		Method
	</div>
	<div class="rank_borda rank_title" style="width:101px;">
		Status
	</div>
	<div class="rank_borda rank_title" style="width:50px;">
		Coins
	</div>
	<div class="rank_borda rank_title" style="width:70px;">
		Currency
	</div>
	<div class="rank_borda rank_title" style="width:50px;">
		Donate
	</div>
	<div class="rank_borda rank_title" style="width:115px;">
		Date
	</div>
	<?php
	$donateHistory = explode("|", donateHistory($_SESSION["UsuarioLogin"]));
	for($x=0; $x < (count($donateHistory)-1); $x++){
		$donateHistoryRecords = explode(";", $donateHistory[$x]);
		?>
		<div class="rank_borda" style="width:60px;">
			<?php echo $donateHistoryRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:101px;">
			<?php echo $donateHistoryRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:50px;">
			<?php echo $donateHistoryRecords[2]; ?>
		</div>
		<div class="rank_borda" style="width:70px;">
			<?php echo $donateHistoryRecords[3]; ?>
		</div>
		<div class="rank_borda" style="width:50px;">
			<?php echo $donateHistoryRecords[4]; ?>
		</div>
		<div class="rank_borda" style="width:115px;">
			<?php echo $donateHistoryRecords[5]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
	<div id="titulo_meio"><h2><?php echo $nomeMoeda; ?> Log</h2></div>
	<div class="rank_borda rank_title" style="width:115px;">
		Date
	</div>
	<div class="rank_borda rank_title" style="width:293px;">
		Description
	</div>
	<div class="rank_borda rank_title" style="width:50px;">
		Cost
	</div>
	<?php
	$donateLog = explode("|", donateLog($_SESSION["UsuarioLogin"]));
	for($x=0; $x < (count($donateLog)-1); $x++){
		$donateLogRecords = explode(";", $donateLog[$x]);
		?>
		<div class="rank_borda" style="width:115px;">
			<?php echo $donateLogRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:293px;">
			<?php echo $donateLogRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:50px;">
			<?php echo $donateLogRecords[2]; ?>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>