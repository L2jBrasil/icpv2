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
if (!isset($_SESSION)){ session_start(); }
include "config/global_configuration.php";
include "config/connection.php";
include "config/functions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $titulodosite; ?></title>
		
		<link href='images/favicon.png' rel='shortcut icon'/>
		<link href='images/favicon.png' rel='icon' type='image/png'/>
		
		<link rel="stylesheet" href='css/icpnetworks.css' type='text/css' />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/cookiealert.css" type="text/css" media="screen" />
		
		<!-- PNG FIX for IE6 -->
		<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
		<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
		<![endif]-->
		
		<script type="text/javascript" src='js/jquery-1.7.1.min.js'></script>
		<script type="text/javascript" src='js/slide.js'></script>
		<script type="text/javascript" src="js/PopBox.js"></script>
		<script type="text/javascript" src="js/jquery.lightbox_me.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/ajaxfileupload.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/icpnetworks.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.dimensions.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.tooltip.js" charset="utf-8"></script>
        <script src="https://kit.fontawesome.com/2809acce50.js" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/cookiealert.js"></script>
		
		<?php include("fb-g-tracks.php"); ?>
	</head>
	<body>
		<!-- Panel -->
		<div id="toppanel">
			<!-- login -->	
			<div id="panel">
				<?php include('pags/painel.php'); ?>
			</div>
			<!-- login -->	
		
			<!-- top -->	
			<div class="tab">
				<ul class="login">
					<li class="left">&nbsp;</li>
					<li class="saudacao">
						<?php
						echo isset($_SESSION["UsuarioLogin"]) ? "Hello ".$_SESSION["UsuarioLogin"]."! <button id='0' onclick='javascript:sair();'>Exit</button>" : "Hello guest!";
						?>
					</li>
					<span class="icpnetworks">
						<?php
						echo isset($_SESSION["UsuarioNivel"]) && $_SESSION["UsuarioNivel"] == 1 ? "<li class=\"sep\">|</li><li><a href=\"javascript: void(0)\" onclick=\"admUserPanel('1')\">Admin Panel</a></li>" : null;
						?>
					</span>
					<li class="sep">|</li>
					<li id="toggle">
						<a id="open" class="open" href="javascript: void(0)">
							<?php echo isset($_SESSION["UsuarioLogin"]) ? "Open Panel" : "Login | Register"; ?>
						</a>
						<a id="close" style="display: none;" class="close" href="javascript: void(0)">Close Panel</a>			
					</li>
					<li class="right">&nbsp;</li>
				</ul> 
			</div>
			<!-- top -->
			
		</div>
		<!-- panel -->
		
		<div class="loading_home"><img src="images/loading2.gif" width="100" height="100"></div>
		<div class="items_premium"></div>
		<div class="players_store_chars"></div>
		<div class="players_store"></div>
		<div class="players_store_auction"></div>
		
		<!-- site -->
		<div id="estrutura">
			<div id="header">
				<div class="floatleft" id="logo"></div>
				<div class="floatright" id="status">
					<div class="content-status">
						<h2 style="background:none;">Server Status</h2>
						<li><a href="javascript: void(0)">login server: <font color="#00e921">Online</font></a></li>
						<li><a href="javascript: void(0)">game server: <font color="#00e921">Online</font></a></li>
					</div>
				</div>
			</div>
			<div id="menu">
				<ul>
					<li><a href="javascript: void(0)" onclick="javascript:abre('home');"><i class="fa fa-home icon" aria-hidden="true"></i> Home</a></li>
					<li><a href="javascript: void(0)" onclick="javascript:abre('regras');"><i class="fa fa-exclamation-triangle icon" aria-hidden="true"></i> Rules</a></li>
					<li><a href="javascript: void(0)" onclick="javascript:abre('downloads');"><i class="fa fa-download icon" aria-hidden="true"></i> Downloads</a></li>
					<li><a href="javascript: void(0)" onclick="javascript:abre('info');"><i class="fa fa-info-circle icon" aria-hidden="true"></i> Info</a></li>
					<li><a href="javascript: void(0)" onclick="javascript:abre('doacao');"><i class="fa fa-credit-card icon" aria-hidden="true"></i> Donate</a></li>
					<li><a href="javascript: void(0)" onclick="javascript:abre('staff');"><i class="fa fa-diamond icon" aria-hidden="true"></i> Staff</a></li>
					<li><a href="javascript: void(0)" onclick="javascript:abre('contato');"><i class="fa fa-envelope icon" aria-hidden="true"></i> Contact</a></li>
					<li><a href="#" target="_blank"><i class="fa fa-university icon" aria-hidden="true"></i> forum</a></li>
				</ul>
			</div>
			<div id="conteudo">
				<div id="centro-conteudo">
					<div class="floatleft" id="left">
						<div id="painel">
							<div id="centro-painel">
								<h2>Status</h2>
								<li><a href="javascript: void(0)">Online Players: <?php echo playersOnline(); ?></a></li>
								<li><a href="javascript: void(0)">Population: <?php echo population(); ?></a></li>
								<li><a href="javascript: void(0)">Created Clans: <?php echo clans(); ?></a></li>
							</div>
						</div>
						<div id="estatisticas">
							<br />
							<h2>Statistics</h2>
							<br />
							<div id="centro-estatisticas">
								<?php
								if($allowInformer){
									?>
									<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('informer');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Informer</a>
									<?php
								}
								if($allowRankCastles){
									?>
									<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_castles');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Castle Sieges</a>
									<?php
								}
								if($allowRankClanhall){
									?>
									<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_clanhalls');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Clan Hall Info</a>
									<?php
								}
								if($allowRankSevenSigns){
									?>
									<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_7signs');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Seven Signs</a>
									<?php
								}
								if($allowRankBosses){
									?>
									<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_bosses');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Raid Boss</a>
									<?php
								}
								if($allowRankServerClasses){
									?>
									<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_stat_class');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Server Classes</a>
									<?php
								}
								if($allowRankRaidPoints || $allowRankPvp || $allowRankHeros || $allowRankClassPvp || $allowRankOly || $allowRankPk || $allowRankClan || $allowRankAdena || $allowRankOnline){
									?>
									<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rankings');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Rankings</a>
									<?php
								}
								?>
							</div>
						</div>
						<div id="media">
							<div id="centro-media">
								<br />
								<h2>Social Media</h2>
								<br />
								<iframe scrolling="no" frameborder="0" allowtransparency="true" style="border: medium none; overflow: hidden; width: 183px; height: 325px; border: 1px solid #252525px; margin-left:31px;" src="<?php echo isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? "https://" : "http://"; ?>www.facebook.com/plugins/likebox.php?id=250350185072159&amp;width=183&amp;connections=6&amp;stream=false&amp;header=false&amp;height=325"></iframe>
							</div>
						</div>
					</div>
					<div class="floatleft" id="center" style="min-height: 853px;">
						<div id="centro-center">
							<?php
							include("links.php");
							?>
						</div>
					</div>
				</div>
				<div class="floatright" id="right">
					<div id="estatisticas">
						<?php
						if($allowRankPvp){
							?>
							<br />
							<h2>Top PvP</h2>
							<div style="width:220px; margin:10px; text-align:center;">
								<?php
								$topPvpIndex = explode("|", topPvp(10));
								for($x=0; $x < (count($topPvpIndex)-1); $x++){
									$topPvpIndexRecords = explode(";", $topPvpIndex[$x]);
									if($x<3){ $img = "<img src='images/".($x+1).".gif'>"; }else{ $img = ($x+1)."º"; }
									echo"<div style='float:left; font-size:14px; width:33px; border-bottom: 1px solid #252525; height:14px; padding-bottom: 3px;'>".$img."</div><div style='float:left; width:157px; font-size:14px; border-bottom: 1px solid #252525; height:14px; padding-bottom: 3px;'>".$topPvpIndexRecords[0]."</div><div style='float:left; width:30px; font-size:14px; border-bottom: 1px solid #252525; height:14px; padding-bottom: 3px;'>".$topPvpIndexRecords[1]."</div>";
								}
								?>
								<div style="clear:both;"></div>
							</div>
							<?php
						}
						if($allowRankPk){
							?>
							<br>
							<h2>Top PK</h2>
							<div style="width:220px; margin:10px; text-align:center;">
								<?php
								$topPkIndex = explode("|", topPk(10));
								for($x=0; $x < (count($topPkIndex)-1); $x++){
									$topPkIndexRecords = explode(";", $topPkIndex[$x]);
									if($x<3){ $img = "<img src='images/".($x+1).".gif'>"; }else{ $img = ($x+1)."º"; }
									echo"<div style='float:left; font-size:14px; width:33px; border-bottom: 1px solid #252525; height:14px; padding-bottom: 3px;'>".$img."</div><div style='float:left; width:157px; font-size:14px; border-bottom: 1px solid #252525; height:14px; padding-bottom: 3px; height:14px; padding-bottom: 3px;'>".$topPkIndexRecords[0]."</div><div style='float:left; width:30px; font-size:14px; border-bottom: 1px solid #252525;'>".$topPkIndexRecords[1]."</div>";
								}
								?>
								<div style="clear:both;"></div>
							</div>
							<?php
						}
						if($allowGalleryVideos){
							?>
							<div id="media">
								<div id="centro-media">
									<br />
									<h2>Videos</h2>
									<br />
									<?php
									$showVideoIndexList = explode("|", showVideoList(1,"rand()",1));
									for($x=0; $x < (count($showVideoIndexList)-1); $x++){
										$showVideoIndex = explode(";;", $showVideoIndexList[$x]);
										?>
										<a href="#" id="try-1" class="try sprited"><img width='176' src="<?php echo $showVideoIndex[5]; ?>" style=" margin-left:31px; margin-bottom:5px; border: 5px solid #252525;"></a><br />
										<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('videos');"><i class="fa fa-video-camera icon" aria-hidden="true"></i> Videos Gallery</a>
										<div id="sign_up">
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
											Sent by: <?php echo $showVideoIndex[2]; ?><span style="float:right; padding-right:8px;"><a class="close sprited" href="#">X</a></span>
											</div>
												<?php echo $showVideoIndex[4]; ?>
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
											<?php echo $showVideoIndex[1]." - ".$showVideoIndex[3]; ?>
											</div>
										</div>
										<?php
									}
									?>
								</div>
							</div>
							<?php
						}
						if($allowGalleryScreenshots){
							?>
							<div style="width:220px; height:1px; border-bottom: 1px solid #252525; margin-top:20px; margin-left:auto; margin-right:auto;"></div>
							<div id="media">
								<div id="centro-media">
									<br />
									<h2>ScreenShots</h2>
									<br />
									<?php
									$showImageIndexList = explode("|", showImageList(1,"rand()",1));
									for($x=0; $x < (count($showImageIndexList)-1); $x++){
										$showImageIndex = explode(";", $showImageIndexList[$x]);
										?>
										<img alt="" src="images/screenshots/<?php echo $showImageIndex[4]; ?>" style="width: 176px; height: auto; max-height:150px; margin-left:31px; margin-bottom:5px; border: 5px solid #252525;" pbsrc="images/screenshots/<?php echo $showImageIndex[4]; ?>" pbCaption="Author: <?php echo $showImageIndex[2]." - ".$showImageIndex[1]." - ".$showImageIndex[3]; ?>" class="PopBoxImageSmall" onClick="Pop(this,50,'PopBoxImageLarge');" />
										<?php
									}
									?>
									<br />
									<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('screenshots');"><i class="fa fa-camera icon" aria-hidden="true"></i> ScreenShots Gallery</a>
									<br />
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<!-- site -->
		
		<!-- rodape -->
		<div id="footer">
			<div class="padrao-footer">
				<table width="968" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<th width="111" scope="col">
							<img src="images/selo_seguro.png" alt="Site 100% seguro - Icp Networks" width="100" height="70" />
						</th>
						<th width="207" scope="col">
							<a href="http://icpfree.com.br">
								<img src="images/selo_icp.png" alt=" Icp Networks - design &amp; desenvolvimentos web" width="200" height="70" border="0" />
							</a>
						</th>
						<th width="580" scope="col">
							<img src="images/ncsoft.gif" width="190">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/lineage2.gif" width="190">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/teen.gif" width="190"><br />
						</th>
					</tr>
				</table>
			</div>
			<div class="bot-footer">
				Optimized for resolution of 1024x768 © Copyright 2020, developed by: <a href="http://www.icpfree.com.br" target="_blank"><font color="#fff"><b>ICPNetworks</b></font></a>. | WebSite licensed for: <b><?php echo $nomedoservidor; ?></b>
			</div>
		</div>
		<!-- rodape -->
		<a id="goTop"></a>
		<!-- START Bootstrap-Cookie-Alert -->
		<div class="alert text-center cookiealert" role="alert">
			<b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website. <a href="https://cookiesandyou.com/" target="_blank">Learn more</a>
			<button type="button" class="btn btn-primary btn-sm acceptcookies">
				I agree
			</button>
		</div>
		<!-- END Bootstrap-Cookie-Alert -->
		<!-- Include cookiealert script -->
		<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
	</body>
</html>