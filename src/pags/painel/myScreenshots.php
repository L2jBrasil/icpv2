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
$target = ".screenshots";
$page = "painel&pagina=myScreenshots";
$reg_por_pag = 6; // Quantos registros por página vai ser mostrado
$pag = empty(preg_replace("/(\D)/i" , "" , $_POST["page"])) ? 0 : preg_replace("/(\D)/i" , "" , $_POST["page"]);
$reg_inicial = $pag * $reg_por_pag;
$reg_atual = $reg_inicial + 1;
$reg_final = $reg_inicial + $reg_por_pag;
$showImageList = explode("|", showMyImageList(1,"id DESC",$reg_inicial.", ".$reg_por_pag,$_SESSION["UsuarioLogin"]));
$sql_qtd_reg = explode("|", showMyImageList(1,"id DESC",0,$_SESSION["UsuarioLogin"]));
$qtd_total_reg = (count($sql_qtd_reg)-1) == 0 ? 0 : (count($sql_qtd_reg)-1);
$reg_final = $qtd_total_reg < $reg_final ? $qtd_total_reg : $reg_final;
?>
<center>
	Total of <b><?php echo $qtd_total_reg; ?></b> ScreenShots. Showing of <?php echo empty($reg_final) ? 0 : $reg_atual; ?> to <?php echo $reg_final; ?>.
</center>
<div style="width:470px; margin:0 auto;">
	<?php
	for($x=0; $x < (count($showImageList)-1); $x++){
		$showImage = explode(";", $showImageList[$x]); ?>
		<div style="float:left; width:215px; max-height:300px; padding:10px;">
			<div style="width:213px; border:1px solid #444; text-align:center; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; background: rgba(0,0,0,0.3); *background-color: #1a1f26; _background-color: #1a1f26;">
				<div style="height:30px; line-height:30px; background: rgba(0,0,0,0.5); *background-color: #111517; _background-color: #111517; -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; margin-bottom:6px;">
					<?php echo $showImage[2]; ?>
				</div>
				<img alt="" src="images/screenshots/<?php echo $showImage[4]; ?>" style="width: 200px; height: auto; max-height:150px;" pbsrc="images/screenshots/<?php echo $showImage[4]; ?>" pbCaption="<?php echo"Autor: ".$showImage[2]." - ".$showImage[1]." - ".$showImage[3]; ?>" class="PopBoxImageSmall" onclick="Pop(this,50,'PopBoxImageLarge');" /><br>
				<div style="background: rgba(255,255,255,0.1); *background-color: #30343b; _background-color: #30343b; -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; width:200px; margin:0 auto; margin-top:10px; margin-bottom:10px; padding-top:5px; padding-bottom:5px;">
					<?php echo $showImage[1]; ?><br>
					<?php echo $showImage[3]; ?>
				</div>
			</div>
		</div>
		<?php
		if(($x+1) % 2 == 0){
			echo"<div style='float:left; width:470px; heght:1px;'></div>";
		}
	}
	?>
	<div style="clear:both;"></div>
</div>
<div style="width:470px; float:left; text-align:center; margin:10px 0px;">
	<?php
	include("pags/paginacao.php");
	?>
</div>