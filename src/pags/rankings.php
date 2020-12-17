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
<div id="titulo_meio"><h2>Rankings</h2></div>
<div style='width:430px; margin:0 auto;'>
	<div style="float:left;width:50%;height:auto;">
		<?php
		if($allowRankOnline){
			?>
			<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_online');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Top Online</a>
			<?php
		}
		if($allowRankHeros){
			?>
			<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_hero');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Top Heroes</a>
			<?php
		}
		if($allowRankOly){
			?>
			<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_oly');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Top Olympiads</a>
			<?php
		}
		if($allowRankClan){
			?>
			<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_clan');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Top Clan</a>
			<?php
		}
		if($allowRankRaidPoints && $db){
			?>
			<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_raidpoints');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Top Raid Points</a>
			<?php
		}
		?>
	</div>
	<div style="float:left;width:50%;height:auto;">
		<?php
		if($allowRankPvp){
			?>
			<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_pvp');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Top PvP</a>
			<?php
		}
		if($allowRankClassPvp){
			?>
			<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_pvp_class');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Top Class PvP</a>
			<?php
		}
		if($allowRankPk){
			?>
			<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_pk');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Top Pk</a>
			<?php
		}
		if($allowRankAdena){
			?>
			<a href="javascript: void(0)" class="btn-default" onclick="javascript:abre('rank_adena');"><i class="fa fa-star-o icon" aria-hidden="true"></i> Top Adena</a>
			<?php
		}
		?>
	</div>
</div>