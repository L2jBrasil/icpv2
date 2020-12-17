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
if (!isset($_SESSION["UsuarioNivel"]) || $_SESSION["UsuarioNivel"] < 0 || $_SESSION["UsuarioNivel"] > 1 || !$allowGalleryVideos) {
	session_destroy();
	echo "<script>sair();</script>";
	exit;
}
?>
<div id="titulo_meio"><h2>My Videos</h2></div>
<div style='width:470px; margin:0 auto; text-align:center;'>
	Submit your best videos to the <?php echo $nomedoservidor; ?>!<br /><br />
	All videos will be approved by Staff <?php echo $nomedoservidor; ?> before to be published on the website.<br /><br />
	Tip: Press Alt + H to remove the menus from the game, press again to return.<br /><br />
	<?php
	$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"]));
	if((count($myCharList)-1) > 0){
		?>
		<script type="text/javascript">
			$('.videos').hide();
			pagination('.videos','painel&pagina=myVideos',0);
		</script>
		<div style="background:rgba(70,70,70,0.2); width:311px; padding: 20px; margin:0 auto; border: 1px solid #333; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; text-align:left; line-height:30px; font-weight:normal; color:#999; font-size:12px;">
			Video url: <input type="text" id="link" maxlength="65">
			<div style="font-size:9px; text-align:center; height:24px; line-height:24px; padding-left:18px; margin-top:-7px;">(Ex: http://www.youtube.com/watch?v=kQaLrLUMDbg)</div>
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
				<button class="button" id="sendVideo" onclick="javascript:sendVideo();" style='margin-top:15px;'>Send Video</button>
			</center>
		</div>
		<br>
		<br>
		<div class="videos"></div>
		<div class="answer"></div>
		<?php
	}else{
		echo "You have not created any char on our server yet.";
	}
	?>
</div>