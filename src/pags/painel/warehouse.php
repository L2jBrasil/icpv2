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
<div id="char_warehouse">
	<div id="char_warehouse_top">
		<div id="char_warehouse_close">
			<a href="javascript: void(0)" onclick="closeWindow('stats_char');">X</a>
		</div>
	</div>
	<div id="char_warehouse_meio">
		<div class="inventario_items" style="padding-top:1px;">
			<?php
			$sql = explode("|", showWarehouseItems($_POST["char_id"],$_POST["login"]));
			for($x=0;$x<(count($sql)-1);$x++){
				$item = explode(",", $sql[$x]);
				$foto = file_exists("images/icons/".$item[19].".png") ? $item[19] : 404;
				if(($x % 6) == 5)
					$px = 0;
				elseif(($x % 2) == 1)
					$px = 0;
				elseif(($x % 3) == 2)
					$px = 0;
				elseif(($x % 5) == 4)
					$px = 0;
				else
					$px = 1;
				?>
				<script type="text/javascript">
					$(function() {
						$("#fancy<?php echo $x+2; ?>").tooltip({
							track: true,
							delay: 0,
							showURL: false,
							fixPNG: true,
							showBody: "<br>",
							extraClass: "pretty fancy",
							top: -15,
							left: 15
						});
					});
				</script>
				<style type="text/css">
					#tooltip.fancy<?php echo $x+2; ?>{
						padding-top: 5em;
						height: 100px;
					}
				</style>
				<span id='fancy<?php echo $x+2; ?>' title="
					<br>
					<?php echo showItemDetails($item); ?>">
					<img src='images/icons/<?php echo $foto; ?>.png' style='width:32px; height:32px; margin-bottom:1px; margin-right:<?php echo $px; ?>px;'>
				</span>
				<?php
			}
			?>
		</div>
	</div>
</div>