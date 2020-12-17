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
<script>
	$('.answer').hide();
</script>
<div id="titulo_meio"><h2>Reward System</h2></div><br>
<span id="text_rewards"></span>
<?php
$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"]));
if((count($myCharList)-1) > 0){
	if(!$rewardOnlinetime && !$rewardPvP && !$rewardPk)
		echo "<center>Rewards system is disabled.</center>";
	?>
	<br><br>
	<?php
	$reward = array();
	if($rewardOnlinetime){
		echo "Each ".number_format($rewardOnlinetimeDays,0,".",".")." day(s) online, you win: ";
		$onlineItems = explode(";", $rewardOnlinetimeItems);
		for($x=0;$x<(count($onlineItems)-1);$x++){
			$OI = explode(",", $onlineItems[$x]);
			echo $OI[1] > 999 ? kkk($OI[1])." of " : kkk($OI[1])." ";
			echo getItemName($OI[0]);
			if($x==(count($onlineItems)-2))
				echo ".";
			elseif($x==(count($onlineItems)-3))
				echo " and ";
			else
				echo ", ";
		}
		echo "<br>";
		array_push($reward, "Online time");
	}
	if($rewardPvP){
		echo "Each ".number_format($rewardPvPCount,0,".",".")." PvP(s), you win: ";
		$pvpItems = explode(";", $rewardPvPItems);
		for($z=0;$z<(count($pvpItems)-1);$z++){
			$PI = explode(",", $pvpItems[$z]);
			echo $PI[1] > 999 ? kkk($PI[1])." of " : kkk($PI[1])." ";
			echo getItemName($PI[0]);
			if($z==(count($pvpItems)-2))
				echo ".";
			elseif($z==(count($pvpItems)-3))
				echo " and ";
			else
				echo ", ";
		}
		echo "<br>";
		array_push($reward, "PvP\'s");
	}
	if($rewardPk){
		echo "Each ".number_format($rewardPkCount,0,".",".")." Pk(s), you win: ";
		$pkItems = explode(";", $rewardPkItems);
		for($y=0;$y<(count($pkItems)-1);$y++){
			$PkI = explode(",", $pkItems[$y]);
			echo $PkI[1] > 999 ? kkk($PkI[1])." of " : kkk($PkI[1])." ";
			echo getItemName($PkI[0]);
			if($y==(count($pkItems)-2))
				echo ".";
			elseif($y==(count($pkItems)-3))
				echo " and ";
			else
				echo ", ";
		}
		echo "<br>";
		array_push($reward, "Pk\'s");
	}
	if(count($reward) == 1)
		$px = 458;
	elseif(count($reward) == 2)
		$px = 227;
	elseif(count($reward) == 3)
		$px = 150;
	$text = null;
	if(count($reward) > 0){
		$text .= "Exchange your ";
		for($k=0;$k<count($reward);$k++){
			$text .= $reward[$k];
			if($k==(count($reward)-1))
				$text .= null;
			elseif($k==(count($reward)-2))
				$text .= " or ";
			else
				$text .= ", ";
		}
		$text .= " for prizes!";
	}
	?>
	<script>
		$('#text_rewards').html('<?php echo $text; ?>');
	</script>
	<br><br>
	<div style="width:462px; margin:0 auto;">
		<?php
		if($rewardOnlinetime){
			?>
			<div class="rank_borda rank_title" style="width:<?php echo $px; ?>px;">
				Online Time
			</div>
			<?php
		}
		if($rewardPvP){
			?>
			<div class="rank_borda rank_title" style="width:<?php echo $px; ?>px;">
				PvP's
			</div>
			<?php
		}
		if($rewardPk){
			?>
			<div class="rank_borda rank_title" style="width:<?php echo $px; ?>px;">
				Pk's
			</div>
			<?php
		}
		$rewards = explode(";", reward($_SESSION["UsuarioLogin"]));
		if($rewardOnlinetime){
			?>
			<div class="rank_borda" style="width:<?php echo $px; ?>px;height:auto;padding:10px 0px;">
				<span id="current_online"><?php echo remainingTime($rewards[0],true); ?></span>
			</div>
			<?php
		}
		if($rewardPvP){
			?>
			<div class="rank_borda" style="width:<?php echo $px; ?>px;height:auto;padding:10px 0px;">
				<span id="current_pvp"><?php echo number_format($rewards[1],0,".","."); ?></span>
			</div>
			<?php
		}
		if($rewardPk){
			?>
			<div class="rank_borda" style="width:<?php echo $px; ?>px;height:auto;padding:10px 0px;">
				<span id="current_pk"><?php echo number_format($rewards[2],0,".","."); ?></span>
			</div>
			<?php
		}
		if($rewardOnlinetime){
			?>
			<div class="rank_borda" style="width:<?php echo $px; ?>px;height:auto;padding:10px 0px;">
				<span id="online_reward"><?php echo number_format(floor($rewards[0] / (86400 * $rewardOnlinetimeDays)),0,".","."); ?></span> rewards available<br>
				<input type="checkbox" value="online" id="online_rwrd" style="vertical-align:-15%;"> Get Online Reward
			</div>
			<?php
		}
		if($rewardPvP){
			?>
			<div class="rank_borda" style="width:<?php echo $px; ?>px;height:auto;padding:10px 0px;">
				<span id="pvp_reward"><?php echo number_format(floor($rewards[1] / $rewardPvPCount),0,".","."); ?></span> rewards available<br>
				<input type="checkbox" value="pvp" id="pvp_rwrd" style="vertical-align:-15%;"> Get PvP Reward
			</div>
			<?php
		}
		if($rewardPk){
			?>
			<div class="rank_borda" style="width:<?php echo $px; ?>px;height:auto;padding:10px 0px;">
				<span id="pk_reward"><?php echo number_format(floor($rewards[2] / $rewardPkCount),0,".","."); ?></span> rewards available<br>
				<input type="checkbox" value="pk" id="pk_rwrd" style="vertical-align:-15%;"> Get Pk Reward
			</div>
			<?php
		}
		?>
		<div style="float:left; width:100%; padding-top:30px;"></div>
	</div>
	<?php
	if(count($reward) > 0){
		?>
		<center>
			Select the character to receive:
			<br><br>
			<select id="charid" style="min-width:150px;">
				<?php
				for($x=0; $x < (count($myCharList)-1); $x++){
					$myCharListResult = explode(";", $myCharList[$x]);
					if($myCharListResult[2] == "0"){
						echo"<option value=".$myCharListResult[1].">".$myCharListResult[0]."</option>";
					}else{
						echo"<option value=".$myCharListResult[1]." disabled>".$myCharListResult[0]." - Char Online</option>";
					}
				}
				?>
			</select>
			<br><br>
			<button onclick="javascript:getReward();">Get Rewards</button>
		</center>
		<div class="answer"></div>
		<?php
	}
}else{
	echo "You have not created any char on our server yet.";
}
?>