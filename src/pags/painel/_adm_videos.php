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
<div id="titulo_meio"><h2>Videos</h2></div>
<center>(aguardando aprovação)</center>
<br>
<br>
<div style="width:460px; margin:0 auto;">
	<div class="rank_borda rank_title" style="width:204px;">
		Autor
	</div>
	<div class="rank_borda rank_title" style="width:120px;">
		Video
	</div>
	<div class="rank_borda rank_title" style="width:70px;">
		Aprovar
	</div>
	<div class="rank_borda rank_title" style="width:50px;">
		Deletar
	</div>
	<?php
	$videos = explode("|", admVideo());
	for($x=0; $x < (count($videos)-1); $x++){
		$video = explode("[]", $videos[$x]);
		$v = 2 + $x;
		?>
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
		<div class="rank_borda" style="width:204px;height:20px;line-height:20px;">
			<?php echo $video[2]; ?>
		</div>
		<div class="rank_borda" style="width:120px;height:20px;line-height:20px;">
			<a href="javascript: void(0)" id="try-<?php echo $v; ?>" class="try sprited"> Visualizar</a>
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
				Sent by: <?php echo $video[2]; ?><span style="float:right; padding-right:8px;"><a class="close sprited" href="#">X</a></span>
				</div>
					<?php echo $video[4]; ?>
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
				<?php echo $video[1]." - ".$video[3]; ?>
				</div>
			</div>
		</div>
		<div class="rank_borda" style="width:70px;height:20px;line-height:20px;">
			<button id="<?php echo $video[0]; ?>" onclick="editVideo(this.id);" style="width:64px;font-size:9px;"><?php echo empty($video[5]) ? "Aprovar" : "Reprovar"; ?></button>
		</div>
		<div class="rank_borda" style="width:50px;height:20px;line-height:20px;">
			<button id="<?php echo $video[0]; ?>" onclick="deleteVideo(this.id);" style="width:44px;font-size:9px;">Deletar</button>
		</div>
		<?php
	}
	?>
	<div style="float:left; width:100%; padding-top:30px;"></div>
</div>