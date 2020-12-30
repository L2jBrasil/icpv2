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
include_once('config/global_configuration.php');
include_once('config/connection.php');
include_once('config/functions.php');
$pasta = "pags"; // Caminho da pasta onde estão os seus arquivos PHP
$home = "home"; // Página principal
#======== Não edite daqui para baixo ========#
$painel_array = array();
$pags_array = array();
$dir = new DirectoryIterator($pasta);
foreach($dir as $fileInfo){
	if(!$fileInfo->isDot()){
		if($fileInfo->isDir()){
			$subdir = new DirectoryIterator($pasta."/".$fileInfo);
			foreach($subdir as $subfileInfo)
				if(!$subfileInfo->isDot())
					array_push($painel_array, str_replace(".php", "", $subfileInfo->getFilename()));
		}else{
			$ext = strtolower( $fileInfo->getExtension() );
			if(in_array($ext, array('php')) && str_replace(".php", "", $fileInfo->getFilename()) != "painel")
				array_push($pags_array, str_replace(".php", "", $fileInfo->getFilename()));
		}
	}
}
$pagina = !empty(trim($_GET["icp"] ?? "")) ? trim($_GET["icp"]) : $home;
if($pagina == "painel"){
	$get = array();
	$get_url = explode("&amp;", $_SERVER["REQUEST_URI"]);
	for($x=1;$x<count($get_url);$x++){
		$get_value = explode("=", $get_url[$x]);
		$get[$get_value[0]] = $get_value[1];
	}
	$sub_pagina = !empty(trim($get["pagina"])) ? trim($get["pagina"]) : $home;
	$pagina = !in_array($sub_pagina, $painel_array) ? $home : "painel/".$sub_pagina;
}else{
	$pagina = !in_array($pagina, $pags_array) ? $home : $pagina;
}
if(isset($pagina)){
	if(file_exists($pasta."/".$pagina.'.php')){
		@include_once($pasta."/".$pagina.".php");
	}else{
		session_destroy();
		@include_once($pasta."/".$home.".php");
	}
}else{
	@include_once($pasta."/".$home.".php");
}
?>