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
$staff = showProfileStaff($_SESSION["UsuarioLogin"]);
$gms = explode(";", $staff);
?>
<div id="titulo_meio"><h2>Admin Profile</h2></div>
<br>
<center>
	Dica: tamanho indicado da imagem: 100x100px
</center>
<div style="width:460px; margin:0 auto;">
	<div style="float:left; width:100%; padding-top:30px;"></div>
	<div class="rank_borda downloads" style="width:102px; height:102px;">
		<img id="profileImg2" src="<?php echo file_exists("images/profiles/".$gms[0]) && !empty($gms[0]) ? "images/profiles/".$gms[0] : "images/screenshots/noimage.jpg"; ?>" width="100" height="100" border="1"><input type="file" id="fileToUpload" name="fileToUpload" style="width:115px;margin-top:-15px;margin-left:-6px;">
	</div>
	<div class="rank_borda" style="width:308px; padding:11px; text-align:left;">
		<input id="gm_name" type="text" style="width:308px; background:none; padding-left: 10px; margin:-7px;" placeholder="GM Anonymous" value="<?php echo $gms[1]; ?>" />
	</div>
	<div class="rank_borda" style="width:308px; padding:11px; text-align:left;">
		<input id="gm_office" type="text" style="width:308px; background:none; padding-left: 10px; margin:-7px;" placeholder="Game Master" value="<?php echo $gms[2]; ?>" />
	</div>
	<div class="rank_borda" style="width:308px; padding:11px; text-align:left;">
		<strong><input id="gm_email" type="text" style="width:308px; background:none; padding-left: 10px; margin:-7px;" placeholder="-" value="<?php echo $gms[3]; ?>" />
	</div>
	<div style="text-align:right;padding-right:5px;padding-top:5px;font-size:12px;float:left;width:455px;">
		<a href="javascript: void(0)" onclick="deleteProfile();">Excluir perfil</a>
	</div>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>
<br>
<center><button id="btn_staff" onclick="staffProfile();"><?php echo empty($staff) ? "Criar" : "Editar"; ?> profile</button></center>