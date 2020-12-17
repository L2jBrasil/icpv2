<?php
//=======================================================================\\
//  ## ####### #######                                                   \\
//  ## ##      ##   ##                                                   \\
//  ## ##      ## ####  |\  | |¯¯¯ ¯¯|¯¯ \      / |¯¯¯| |¯¯¯| | / |¯¯¯|  \\
//  ## ##      ##       | \ | |-   |    \    /  | | | | |_| |<   ¯\_   \\
//  ## ####### ##       |  \| |___   |     \/\/   |___| | |\  | \ |___|  \\
// --------------------------------------------------------------------\\
//       Brazillian Developer / WebSite: http://www.icpfree.com.br       \\
//                 Email & Skype: ivan1507@gmail.com.br                  \\
//=======================================================================\\
?>
<div id="titulo_meio"><h2>Contato</h2></div>
<?php
if($CreateAccWithEmail || $RememberAccWithEmail){
	?>
	<div style="width:460px; margin:0 auto;">
		<div class="rank_borda" style="width:206px; padding:10px; text-align:left;">
			Seu nome:
		</div>
		<div class="rank_borda" style="width:202px; padding:0px 12px; text-align:left; height: auto;">
			<input type="text" id="contact_name" class="input" maxlength="25" value="" style="width:160px;" />
		</div>
		<div class="rank_borda" style="width:206px; padding:10px; text-align:left; height: 17px;">
			Seu e-mail:
		</div>
		<div class="rank_borda" style="width:202px; padding:0px 12px; text-align:left; height: auto;">
			<input type="text" id="contact_email" class="input" style="width:160px; background-position: center -63px;" />
		</div>
		<div class="rank_borda" style="width:206px; padding:10px; text-align:left; height: 17px;">
			Assunto
		</div>
		<div class="rank_borda" style="width:202px; padding:0px 12px; text-align:left; height: auto;">
			<input type="text" id="contact_subject" class="input" maxlength="25" value="" style="width:160px;" />
		</div>
		<div class="rank_borda" style="width:436px; padding:10px; height: 17px;">
			Mensagem:
		</div>
		<div class="rank_borda" style="width:436px; padding:10px; height: auto;">
			<textarea id="contact_msg" class="textarea"></textarea>
		</div>
		<div class="rank_borda" style="width:436px; padding:10px; height: auto;">
			<button id="btn_contact" onclick="contact();">Enviar</button>
		</div>
	</div>
	<?php
}else{
	echo "<center>Contact form is disabled.</center>";
}
?>