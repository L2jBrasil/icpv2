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
<div id="titulo_meio"><h2>ScreenShots</h2></div>
<center>(aguardando aprovação)</center>
<br>
<br>
<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:204px;">
		Autor
	</div>
	<div class="rank_borda rank_title" style="width:120px;">
		ScreenShot
	</div>
	<div class="rank_borda rank_title" style="width:70px;">
		Aprovar
	</div>
	<div class="rank_borda rank_title" style="width:50px;">
		Deletar
	</div>
	<?php
	$screenshots = explode("|", admScreenshot());
	for($x=0; $x < (count($screenshots)-1); $x++){
		$screenshot = explode("[]", $screenshots[$x]);
		?>
		<div class="rank_borda" style="width:204px;height:20px;line-height:20px;">
			<?php echo $screenshot[2]; ?>
		</div>
		<div class="rank_borda" style="width:120px;height:20px;line-height:20px;">
			<a href="javascript: void(0)" pbsrc="images/screenshots/<?php echo $screenshot[4]; ?>" pbCaption="<?php echo"Autor: ".$screenshot[2]." - ".$screenshot[1]." - ".$screenshot[3]; ?>" class="PopBoxImageSmall" onclick="Pop(this,50,'PopBoxImageLarge');"> Visualizar</a>
		</div>
		<div class="rank_borda" style="width:70px;height:20px;line-height:20px;">
			<button id="<?php echo $screenshot[0]; ?>" onclick="editScreenshot(this.id);" style="width:64px;font-size:9px;"><?php echo empty($screenshot[5]) ? "Aprovar" : "Reprovar"; ?></button>
		</div>
		<div class="rank_borda" style="width:50px;height:20px;line-height:20px;">
			<button id="<?php echo $screenshot[0]; ?>" onclick="deleteScreenshot(this.id);" style="width:44px;font-size:9px;">Deletar</button>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>