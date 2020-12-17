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
if (!$allowRankCastles) {
	header("Location: index.php");
	exit;
}
?>
<div id="titulo_meio"><h2>Castles / Siege</h2></div>
<?php
$rankCastelosArray = explode(";", rankCastelos());
for($x=0;$x<(count($rankCastelosArray)-1);$x++){
	$rankCastelos = explode("|", $rankCastelosArray[$x]);
	$rankAtt = explode(":", $rankCastelos[4]);
	$rankDef = explode(":", $rankCastelos[5]);
	switch($rankCastelos[0]){
		case "gludio_castle":
			$castle_name = "Gludio";
			break;
		case "dion_castle":
			$castle_name = "Dion";
			break;
		case "giran_castle":
			$castle_name = "Giran";
			break;
		case "oren_castle":
			$castle_name = "Oren";
			break;
		case "aden_castle":
			$castle_name = "Aden";
			break;
		case "innadrile_castle":
			$castle_name = "Innadril";
			break;
		case "godad_castle":
			$castle_name = "Goddard";
			break;
		case "rune_castle":
			$castle_name = "Rune";
			break;
		case "schutt_castle":
			$castle_name = "Schuttgart";
			break;
		default:
			$castle_name = $rankCastelos[0];
			break;
	}
	?>
	<div id="castelos_estrutura">
	<div id="castle_title">Castelo de <?php echo ucfirst($castle_name); ?></div>
	<center><img src="images/castelos/castle_<?php echo strtolower($castle_name); ?>.jpg" title="Castelo de <?php echo ucfirst($castle_name); ?>" style="-moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; width:418px;" /></center>
	<div id="castle_descricao">
	<span style="color:#999;">Dono:</span> <?php echo $rankCastelos[1]; ?><br>
	<?php if(!$L2jVersaoClassic){ ?>
	<span style="color:#999;">Taxa:</span> <?php echo $rankCastelos[2]; ?>%<br>
	<?php } ?>
	<span style="color:#999;">Próxima Siege:</span>
	<?php
	if($db){
		if($L2jVersaoClassic){
			echo date("d/m/Y H:i:s", strtotime($rankCastelos[3]));
		}else{
			echo date("d/m/Y H:i:s", ($rankCastelos[3]/1000));
		}
	}else{
		echo $rankCastelos[3] > strtotime(date('Y-m-d H:i:s')) ? date("d/m/Y H:i:s",$rankCastelos[3]) : "Sem data prevista";
	}
	?>
	<br>
	<span style="color:#999;">Atacantes:</span> <?php for($i=0;$i<(count($rankAtt)-1);$i++){ if((count($rankAtt)-2)==$i){ echo $rankAtt[$i]."."; }else{ echo $rankAtt[$i].", "; } } ?><br>
	<span style="color:#999;">Defensores:</span> <?php for($i=0;$i<(count($rankDef)-1);$i++){ if((count($rankDef)-2)==$i){ echo $rankDef[$i]."."; }else{ echo $rankDef[$i].", "; } } ?>
	</div>
	</div>
	<?php
}
?><br>