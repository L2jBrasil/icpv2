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
if (!isset($_SESSION["UsuarioNivel"]) || $_SESSION["UsuarioNivel"] < 0 || $_SESSION["UsuarioNivel"] > 1 || !$allowGalleryScreenshots) {
	session_destroy();
	echo "<script>sair();</script>";
	exit;
}
?>
<div id="titulo_meio"><h2>My Screenshots</h2></div>
<div style='width:470px; margin:0 auto; text-align:center;'>
	Submit your best screenshots to the <?php echo $nomedoservidor; ?>!<br /><br />
	All screenshots will be approved by Staff <?php echo $nomedoservidor; ?> before to be published on the website.<br /><br />
	Tip: Press Alt + H to remove the menus from the game, press again to return.<br /><br />
	<?php
	$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"]));
	if((count($myCharList)-1) > 0){
		?>
		<script type="text/javascript">
			$('.screenshots').hide();
			pagination('.screenshots','painel&pagina=myScreenshots',0);
		</script>
		<div style="background:rgba(70,70,70,0.2); width:311px; padding: 20px; margin:0 auto; border: 1px solid #333; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; text-align:left; line-height:30px; font-weight:normal; color:#999; font-size:12px;">
			<form name="form" action="" method="POST" enctype="multipart/form-data">
				Photo: <input type="file" id="fileToUpload" name="fileToUpload" style="width:270px;"><br>
				Legend: <input type="text" id="legend" maxlength="30"><br>
				Select the author:
				<select id="charname" style="min-width:150px;">
					<?php
					for($x=0; $x < (count($myCharList)-1); $x++){
						$myCharListResult = explode(";", $myCharList[$x]);
						echo"<option value=".$myCharListResult[0].">".$myCharListResult[0]."</option>";
					}
					?>
				</select>
				<center>
					<button class="button" id="buttonUpload" onclick="return ajaxFileUpload();" style='margin-top:15px;'>Send ScreenShot</button>
				</center>
			</form>
		</div>
		<br>
		<br>
		<div class="screenshots"></div>
		<div class="answer"></div>
		<?php
	}else{
		echo "You have not created any char on our server yet.";
	}
	?>
</div>