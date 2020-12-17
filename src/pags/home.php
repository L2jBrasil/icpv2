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
?>
<div id="titulo_meio"><h2>Latest news!</h2></div>
<div id="news">
	<?php
	$showNews = explode("|", showNews(5));
	for($x=0; $x < (count($showNews)-1); $x++){
		$showNewsRecords = explode(";", $showNews[$x]);
		?>
		<div id="news_left">
			<img src="<?php echo file_exists("images/profiles/".$showNewsRecords[5]) && !empty($showNewsRecords[5]) ? "images/profiles/".$showNewsRecords[5] : "images/screenshots/noimage.jpg"; ?>" width="100" height="100" border="1" style="margin-bottom: 4px;"><br>
			Posted by: <?php echo empty($showNewsRecords[4]) ? "GM Anonymous" : $showNewsRecords[4]; ?><br>
			Date: <?php echo $showNewsRecords[3]; ?>
		</div>
		<div id="news_right">
			<div id="news_title">
				<?php echo $showNewsRecords[2]; ?>
			</div>
			<div id="news_text">
				<?php echo nl2br($showNewsRecords[1]); ?>
			</div>
		</div>
		<div style="margin-top:5px; margin-bottom:5px; -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40); filter: alpha(opacity=40); -moz-opacity: 0.4; -khtml-opacity: 0.4; opacity: 0.4; width:100%; height:1px; border-bottom:1px dotted #999; float:left;"></div>
		<?php
	}
	?>
</div>