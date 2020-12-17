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
<div id="titulo_meio"><h2>Character Changes</h2></div>
<div style='width:470px; margin:0 auto; text-align:center; font-size:14px;'>
	<br>
	<div style="width:406px; margin:0 auto;">
		<div class="rank_borda rank_title" style="width:402px;">
			Select the character:
		</div>
	</div>
	<?php
	$myCharList = explode("|", myCharList($_SESSION["UsuarioLogin"]));
	if((count($myCharList)-1) > 0){
		?>
		<div style="width:406px; margin:0 auto;">
			<div class="rank_borda" style="width:382px;height:auto;margin-bottom:18px;padding:10px;">
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
			</div>
		</div>
		<div style="width:442px; margin:0 auto;">
			<?php
			if($allowBaseClassChange){
				?>
				<div style="float:left;width:185px;padding:18px;">
					<div class="rank_borda rank_title" style="width:181px;">
						Base Class Change
					</div>
					<div class="rank_borda" style="width:161px;height:202px;padding:10px;">
						Select the new Base Class:
						<br>
						<br>
						<select id="new_base">
							<option value="Select...">Select...</option>
							<?php
							for ($x=88; $x<119; $x++){
								echo "<option value=\"".$x."\">".classe_name($x)."</option>";
							}
							?>
						</select>
						<br>
						<br>
						<button id="base_change" onclick="javascript:base_change();">Base Change</button>
						<br>
						<br>
						By change your character Base Class all Skills and points in the Olympiads will be reseted.
						<br>
						<br>
						This action will cost <font color="#CD9B1D"><?php echo $baseClasChangePrice; ?></font> <?php echo $nomeMoeda; ?> and is irreversible.
					</div>
				</div>
				<?php
			}
			if($allowNickChange){
				?>
				<div style="float:left;width:185px;padding:18px;">
					<div class="rank_borda rank_title" style="width:181px;">
						Nick Name Change
					</div>
					<div class="rank_borda" style="width:161px;height:202px;padding:10px">
						Choose the new Nick Name:
						<br>
						<br>
						<input type="text" id="new_nick" style="width:118px;height:20px;" autocomplete="off">
						<br>
						<br>
						<button id="nick_change" onclick="javascript:nick_change();">Nick Change</button>
						<br>
						<br>
						Write the character name carefully!
						<br>
						<br>
						This action will cost <font color="#CD9B1D"><?php echo $nickChangePrice; ?></font> <?php echo $nomeMoeda; ?> and is irreversible.
					</div>
				</div>
				<?php
			}
			if($allowSexChange){
				?>
				<div style="float:left;width:185px;padding:18px;">
					<div class="rank_borda rank_title" style="width:181px;">
						Sex Change
					</div>
					<div class="rank_borda" style="width:161px;height:175px;padding:10px;">
						Select the new Sex:
						<br>
						<br>
						<select id="sex">
							<option value="Select...">Select...</option>
							<option value="0">Male</option>
							<option value="1">Female</option>
						</select>
						<br>
						<br>
						<button id="sex_change" onclick="javascript:sex_change();">Base Change</button>
						<br>
						<br>
						This action will cost <font color="#CD9B1D"><?php echo $sexChangePrice; ?></font> <?php echo $nomeMoeda; ?> and is irreversible.
					</div>
				</div>
				<?php
			}
			if($allowAccountChange){
				?>
				<div style="float:left;width:185px;padding:18px;">
					<div class="rank_borda rank_title" style="width:181px;">
						Account Change
					</div>
					<div class="rank_borda" style="width:161px;height:175px;padding:10px">
						Choose the new account:
						<br>
						<br>
						<input type="text" id="new_account" style="width:118px;height:20px;" autocomplete="off">
						<br>
						<br>
						<button id="account_change" onclick="javascript:account_change();">Account Change</button>
						<br>
						<br>
						Write the new account carefully!
						<br>
						<br>
						This action will cost <font color="#CD9B1D"><?php echo $accountChangePrice; ?></font> <?php echo $nomeMoeda; ?> and is irreversible.
					</div>
				</div>
				<?php
			}
			?>
			<div style="float:left;width:442px;padding:18px 0px;">
				<font color="#FF0"><b>*Caution*</b></font>: To use this functions, your character need to be <font color="#f66">OFFLINE</font>.
				<br>
				<br>
				The <b>Staff <?php echo $nomedoservidor; ?></b>  is not responsible for your mistakes!
			</div>
		</div>
		<div class="answer"></div>
		<?php
	}else{
		?>
		<div style="width:406px; margin:0 auto;">
			<div class="rank_borda" style="width:382px;height:auto;margin-bottom:18px;padding:10px;">
				You have not created any characters on our server.
			</div>
		</div>
		<?php
	}
	?>
</div>