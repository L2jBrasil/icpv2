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
<div id="titulo_meio"><h2>Notícias postadas</h2></div>
<br>
<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:224px;">
		Title
	</div>
	<div class="rank_borda rank_title" style="width:120px;">
		Date
	</div>
	<div class="rank_borda rank_title" style="width:50px;">
		Edit
	</div>
	<div class="rank_borda rank_title" style="width:50px;">
		Delete
	</div>
	<?php
	$lastNews = explode("|", lastNews($_SESSION["UsuarioLogin"]));
	for($x=0; $x < (count($lastNews)-1); $x++){
		$lastNewsRecords = explode(";", $lastNews[$x]);
		?>
		<div class="rank_borda" style="width:224px;height:20px;line-height:20px;">
			<?php echo $lastNewsRecords[0]; ?>
		</div>
		<div class="rank_borda" style="width:120px;height:20px;line-height:20px;">
			<?php echo $lastNewsRecords[1]; ?>
		</div>
		<div class="rank_borda" style="width:50px;height:20px;line-height:20px;">
			<button id="<?php echo $lastNewsRecords[2]; ?>" onclick="editNews(this.id)" style="width:44px;font-size:9px;">Edit</button>
		</div>
		<div class="rank_borda" style="width:50px;height:20px;line-height:20px;">
			<button id="<?php echo $lastNewsRecords[2]; ?>" onclick="deleteNews(this.id)" style="width:44px;font-size:9px;">Delete</button>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>