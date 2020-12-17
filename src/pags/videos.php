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
if (!$allowGalleryVideos) {
	header("Location: index.php");
	exit;
}
$target = ".videos";
$page = "videos";
?>
<div class="videos">
	<?php
	$reg_por_pag = 6; // Quantos registros por página vai ser mostrado
	$pag = empty(preg_replace("/(\D)/i" , "" , $_POST["page"])) ? 0 : preg_replace("/(\D)/i" , "" , $_POST["page"]);
	$reg_inicial = $pag * $reg_por_pag;
	$reg_atual = $reg_inicial + 1;
	$reg_final = $reg_inicial + $reg_por_pag;
	$showVideoList = explode("|", showVideoList(1,"id DESC",$reg_inicial.", ".$reg_por_pag,false));
	$sql_qtd_reg = explode("|", showVideoList(1,"id DESC",0,false));
	$qtd_total_reg = (count($sql_qtd_reg)-1) == 0 ? 0 : (count($sql_qtd_reg)-1);
	$reg_final = $qtd_total_reg < $reg_final ? $qtd_total_reg : $reg_final;
	?>
	<div id="titulo_meio"><h2>Videos</h2></div>
	<center>
		Total de <b><?php echo $qtd_total_reg; ?></b> videos. Mostrando de <?php echo empty($reg_final) ? 0 : $reg_atual; ?> até <?php echo $reg_final; ?>.
	</center>
	<div style="width:470px; margin:0 auto;">
		<?php
		for($x=0; $x < (count($showVideoList)-1); $x++){
			$vi = 1 + $x;
			$v = 2 + $x;
			$showVideo = explode(";;", $showVideoList[$x]); ?>
			<script type="text/javascript" charset="utf-8">
				$(function() {
					function launch() {
						$('#sign_up<?php echo $v; ?>').lightbox_me({centered: true, onLoad: function() { $('#sign_up<?php echo $v; ?>').find('input:first').focus()}});
					}
		
					$('#try-<?php echo $v; ?>').click(function(e) {
						$("#sign_up<?php echo $v; ?>").lightbox_me({centered: true, onLoad: function() {
							$("#sign_up<?php echo $v; ?>").find("input:first").focus();
						}});
		
						e.preventDefault();
					});
		
					$('table tr:nth-child(even)').addClass('stripe');
				});
			</script>
			<style type="text/css">
				#sign_up<?php echo $v; ?> {
					background: #eef2f7;
					border: 1px solid #333;
					-moz-border-radius: 8px;
					-webkit-border-radius: 8px;
					border-radius: 8px;
					-webkit-box-shadow: 0px 0px 16px #666;  
					-moz-box-shadow: 0px 0px 16px #666;  
					box-shadow: 0px 0px 16px #666;
					width: 560px;
					text-align:center;
					position: relative;
					display: none;
					color:#CD9B1D;
					text-shadow:1px 1px #444;
				}
			</style>
			<div style="float:left; width:215px; max-height:300px; padding:10px;">
				<div style="width:213px; border:1px solid #444; text-align:center; -moz-border-radius: 8px; -webkit-border-radius: 8px; border-radius: 8px; background: rgba(0,0,0,0.3); *background-color: #1a1f26; _background-color: #1a1f26;">
					<div style="height:30px; line-height:30px; background: rgba(0,0,0,0.5); *background-color: #111517; _background-color: #111517; -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; margin-bottom:6px;">
						<?php echo $showVideo[2]; ?>
					</div>
					<a href="#" id="try-<?php echo $v; ?>" class="try sprited"><img src="<?php echo $showVideo[5]; ?>" style="width: 200px; height: auto;"></a><br>
					<div style="background: rgba(255,255,255,0.1); *background-color: #30343b; _background-color: #30343b; -moz-border-radius: 6px; -webkit-border-radius: 6px; border-radius: 6px; width:200px; margin:0 auto; margin-top:10px; margin-bottom:10px; padding-top:5px; padding-bottom:5px;">
						<?php echo $showVideo[1]; ?><br>
						<?php echo $showVideo[3]; ?>
					</div>
				</div>
			</div>
			<div id="sign_up<?php echo $v; ?>">
				<div style="width:560px; height:30px; line-height:30px; -moz-border-radius: 6px 6px 0px 0px; -webkit-border-radius: 6px 6px 0px 0px; border-radius: 6px 6px 0px 0px;
				background: #959595; /* Old browsers */
				/* IE9 SVG, needs conditional override of 'filter' to 'none' */
				background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzk1OTU5NSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQ2JSIgc3RvcC1jb2xvcj0iIzBkMGQwZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzAxMDEwMSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUzJSIgc3RvcC1jb2xvcj0iIzBhMGEwYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9Ijg3JSIgc3RvcC1jb2xvcj0iIzM4MzgzOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxYjFiMWIiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
				background: -moz-linear-gradient(top, #959595 0%, #0d0d0d 46%, #010101 50%, #0a0a0a 53%, #383838 87%, #1b1b1b 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#959595), color-stop(46%,#0d0d0d), color-stop(50%,#010101), color-stop(53%,#0a0a0a), color-stop(87%,#383838), color-stop(100%,#1b1b1b)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top, #959595 0%,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#383838 87%,#1b1b1b 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top, #959595 0%,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#383838 87%,#1b1b1b 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top, #959595 0%,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#383838 87%,#1b1b1b 100%); /* IE10+ */
				background: linear-gradient(to bottom, #959595 0%,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#383838 87%,#1b1b1b 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#959595', endColorstr='#1b1b1b',GradientType=0 ); /* IE6-8 */">
					Enviado por: <?php echo $showVideo[2]; ?><span style="float:right; padding-right:8px;"><a class="close sprited" href="#">X</a></span>
				</div>
					<?php echo $showVideo[4]; ?>
				<div style="width:560px; height:30px; line-height:30px; -moz-border-radius: 0px 0px 6px 6px; -webkit-border-radius: 0px 0px 6px 6px; border-radius: 0px 0px 6px 6px;
				background: #959595; /* Old browsers */
				/* IE9 SVG, needs conditional override of 'filter' to 'none' */
				background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzk1OTU5NSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQ2JSIgc3RvcC1jb2xvcj0iIzBkMGQwZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzAxMDEwMSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUzJSIgc3RvcC1jb2xvcj0iIzBhMGEwYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9Ijg3JSIgc3RvcC1jb2xvcj0iIzM4MzgzOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxYjFiMWIiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
				background: -moz-linear-gradient(top, #959595 0%, #0d0d0d 46%, #010101 50%, #0a0a0a 53%, #383838 87%, #1b1b1b 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#959595), color-stop(46%,#0d0d0d), color-stop(50%,#010101), color-stop(53%,#0a0a0a), color-stop(87%,#383838), color-stop(100%,#1b1b1b)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top, #959595 0%,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#383838 87%,#1b1b1b 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top, #959595 0%,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#383838 87%,#1b1b1b 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top, #959595 0%,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#383838 87%,#1b1b1b 100%); /* IE10+ */
				background: linear-gradient(to bottom, #959595 0%,#0d0d0d 46%,#010101 50%,#0a0a0a 53%,#383838 87%,#1b1b1b 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#959595', endColorstr='#1b1b1b',GradientType=0 ); /* IE6-8 */">
					<?php echo $showVideo[1]." - ".$showVideo[3]; ?>
				</div>
			</div>
			<?php
			if($vi % 2 == 0){
				echo "<div style='float:left; width:470px; heght:1px;'></div>";
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
</div>