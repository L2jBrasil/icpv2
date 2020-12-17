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
if (!$allowRankSevenSigns) {
	header("Location: index.php");
	exit;
}
$row = explode(";",sevenSings());
$nthDay = $row[3]-1;
$currTime = 'we are at work ...';
$ssStatus = $row[2];
$dawnPoint = $row[0];
$twilPoint = $row[1];
$maxPointWidth = 300;
$seal1 = $row[4];
$seal2 = $row[5];
$seal3 = $row[6];
$seal4 = 0;
$seal5 = 0;
$seal6 = 0;
$seal7 = 1;
?>
<div id="titulo_meio"><h2>Seven Signs</h2></div>
<br />
<TABLE style="MARGIN-TOP:0px;" cellSpacing=0 cellPadding=0 border=0 align=center>
	<TBODY>
		<TR vAlign=top>
			<TD style="BACKGROUND: url(images/ss/ssqViewBg.jpg);background-size:contain;background-repeat:no-repeat; width:470px;; height:225px;">
				<TABLE>
					<TBODY>
						<TR vAlign=top>
							<TD>
								<TABLE style="MARGIN: 18px 0px 0px 42px" cellSpacing=0 cellPadding=0 border=0 width=141>
									<TBODY>
										<TR align=middle height=26>
											<TD style="BACKGROUND: url(images/ss/ssqViewimg1.gif); COLOR:#fff; font-size:11px;">
												<!-- 	Subject selection + number of day Start -->
												<?php
												if (0 == $ssStatus) {
													echo 'Start';
												}
												else if (1 == $ssStatus) {
													echo 'Competition <b style="color:#E10000"> day '.$nthDay.'</b>';
												}
												else if (2 == $ssStatus) {
													echo 'Result';
												}
												else {
													echo 'ss result<b style="color:#E10000"> day '.$nthDay.'</b>';
												}
												?>
												<!-- Subject selection + number of day E n d -->
											</TD>
										</TR>
									</TBODY>
								</TABLE>
								<TABLE style="MARGIN: 3px 0px 0px 10px" cellSpacing=0 cellPadding=0 width=107 border=0>
									<TBODY>
										<TR>
											<TD></TD>
											<TD>
												<IMG height=14 src="images/ss/timeBox1.jpg" width=106 border=0>
											</TD>
											<TD></TD>
										</TR>
										<TR>
											<TD vAlign=bottom rowSpan=2>
												<IMG height=98 src="images/ss/timeBox2.jpg" width=41 border=0>
											</TD>
											<TD>
												<!-- Clock Image Start -->
												<?php
												if(1 == $ssStatus){
													$tempImageNum = $nthDay;
												}elseif(0 == $ssStatus) {
													$tempImageNum = 0;
												}else{
													$tempImageNum = $nthDay + 7;   // Adding one week to show img with seal effect
												}
												$timeImage = 'time'.$tempImageNum.'.jpg';
												echo '<img src="images/ss/time/'.$timeImage.'" width="106" height="104" border="0">';
												?>
												<!-- Clock Image E n d -->
											</TD>
											<TD vAlign=bottom rowSpan=2>
												<IMG height=98 src="images/ss/timeBox3.jpg" width=60 border=0>
											</TD>
										</TR>
										<TR>
											<TD>
												<IMG height=11 src="images/ss/timeBox4.jpg" width=106 border=0>
											</TD>
										</TR>
									</TBODY>
								</TABLE>
							</TD>
							<TD>
								<TABLE style="MARGIN: 12px 0px 0px 22px" cellSpacing=0 cellPadding=0 width=180 border=0>
									<TBODY>
										<TR align=middle bgColor=#606d6f height=17>
											<TD style="COLOR:#fff; font-size:11px;">
												<!-- Current Time start - Not Real Time but the time of query -->
												<?php
												$timezone  = -3; //(GMT -5:00) EST (U.S. & Canada)
												echo gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I")));
												?>
												<!-- Current Time E n d -->
											</TD>
										</TR>
									</TBODY>
								</TABLE>
								<TABLE style="MARGIN: 12px 0px 0px 22px" cellSpacing=0 cellPadding=0 border=0>
									<TBODY>
										<TR>
											<TD style="font-size:11px; color:#000;">
												<IMG style="MARGIN: 0px 6px 5px 0px" height=1 src="images/ss/dot.gif" width=1 border=0>
												<font color="#FF0000"><b>Dawn:</b></font>
											</TD>
											<TD style="COLOR: #000; font-size:11px;">
												<!-- Twilight Bar Graph Start -->
												<?php
													$twilPointWidth = ($maxPointWidth * $twilPoint) / 100;
													echo '<img src="images/ss/ssqbar2.gif" width="'.$twilPointWidth.'" height="9" style="max-width:100px;" border="0"> '.$twilPoint;
												?>
												<!-- Twilight Bar Graph E n d -->
											</TD>
										</TR>
										<TR>
											<TD colSpan=2 height=7></TD>
										</TR>
										<TR>
											<TD style="font-size:11px; color:#000;">
												<IMG style="MARGIN: 0px 6px 5px 0px" height=1 src="images/ss/dot.gif" width=1 border=0>
												<font color="#FF0000"><b>Dusk:</b></font>
											</TD>
											<TD style="COLOR: #000; font-size:11px;">
												<!-- Dawn Bar Graph Start -->
												<?php
													$dawnPointWidth = ($maxPointWidth * $dawnPoint) / 100;
													echo '<img src="images/ss/ssqbar1.gif" width="'.$dawnPointWidth.'" height="9" style="max-width:100px;" border="0"> '.$dawnPoint;
												?>
												<!-- Dawn Bar Graph E n d -->
											</TD>
										</TR>
									</TBODY>
								</TABLE>
								<TABLE cellSpacing=0 cellPadding=0 border=0>
									<TBODY>
										<TR vAlign=bottom align=middle height=86>
											<TD>
												<!-- It not 3 then seal must be shown as grey.Seal Status 0 = closed, 1 or 2 = opened  -->
												<!-- Seal #1 -->
												<?php
												if(3 == $ssStatus){
													if (0 == $seal1)
														echo '<img src="images/ss/seals/soa/bongin1close.gif" width="77" height="78" border="0">';
													else
														echo '<img src="images/ss/seals/soa/bongin1open.gif" width="77" height="78" border="0">';
												}else{
													echo '<img src="images/ss/seals/soa/bongin1.gif" width="77" height="78" border="0">';
												}
												?>
											</TD>
											<TD>
												<!-- Seal #2 -->
												<?php
												if(3 == $ssStatus){
													if (0 == $seal2)
														echo '<img src="images/ss/seals/sog/bongin2close.gif" width="77" height="78" border="0">';
													else
														echo '<img src="images/ss/seals/sog/bongin2open.gif" width="77" height="78" border="0">';
												}else{
													echo '<img src="images/ss/seals/sog/bongin2.gif" width="77" height="78" border="0">';
												}
												?>
											</TD>
											<TD>
												<!-- Seal #3 -->
												<?php
												if(3 == $ssStatus){
													if (0 == $seal3)
														echo '<img src="images/ss/seals/sos/bongin3close.gif" width="77" height="78" border="0">';
													else
														echo '<img src="images/ss/seals/sos/bongin3open.gif" width="77" height="78" border="0">';
												}else{
													echo '<img src="images/ss/seals/sos/bongin3.gif" width="77" height="78" border="0">';
												}
												?>
											</TD>
										</TR>
										<TR>
											<TD colSpan=3>
												<div align="center" style="margin-left:10px;">
													<IMG height=16 src="images/ss/bonginName.gif" width=202 border=0> 
												</div>
											</TD>
										</TR>
									</TBODY>
								</TABLE>
							</TD>
						</TR>
					</TBODY>
				</TABLE>
			</TD>
		</TR>
	</TBODY>
</TABLE>