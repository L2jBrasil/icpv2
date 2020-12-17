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
$quant_pag = ceil((count($sql_qtd_reg)-1)/$reg_por_pag);
if($quant_pag > 0){
	if($pag > 0){
		echo "<a href=\"javascript: void(0);\" onclick=\"javascript:pagination('".$target."','".$page."','".($pag-1)."')\" class=\"pag\"><b>&laquo; Previous</b></a>";
	}else{
		echo "<span class=\"null\">&laquo; Previous</span>";
	}
	for($x=1;$x<=$quant_pag;$x++){
		if($pag == ($x-1)){
			echo "&nbsp;<span class=\"pagoff\">[".$x."]</span>&nbsp;";
		}else{
			echo "&nbsp;<a href=\"javascript: void(0);\" onclick=\"javascript:pagination('".$target."','".$page."','".($x-1)."')\" class=\"pag\"><b>".$x."</b></a>&nbsp;";
		}
	}
	if(($pag+1) < $quant_pag){
		echo "<a href=\"javascript: void(0);\" onclick=\"javascript:pagination('".$target."','".$page."','".($pag+1)."')\" class=\"pag\"><b>Next &raquo;</b></a>";
	}else{
		echo "<span class=\"null\">Next &raquo;</span>";
	}
}
?>