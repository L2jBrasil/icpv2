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

/*=======================================================================================*\
||############################| CONEXÃO COM BANCO DE DADOS |#############################||
\*=======================================================================================*/
$db_ip = "127.0.0.1";						# IP do banco de dados
$db_name = "l2jbrasil";						# Nome do banco de dados
$db_user = "db_user";						# Usuario do banco de dados
$db_pass = "db_pass";						# Senha do banco de dados
$db_data = "L2j";							# Coloque: "L2j" para conexão MySQL ou "L2OFF" para conexão MSSQL.
$cached_port = 2012;						# Uso para L2OFF, não mexer! Default: 2012
$L2jVersaoRussa = false; 					# Coloque: "true" caso esteja usando uma versão l2j russa (Ex:L2CCCP,L2Scripts)
$L2jVersaoClassic = false; 					# Coloque: "true" caso esteja usando uma versão l2j Classic (Ex:Kamael, Dawn of heroes)
$L2jVersaoAcis = false; 					# Coloque: "true" caso esteja usando uma versão l2j baseada no projeto aCis
$l2jOldAcis = false;                        # Coloque: "true" caso esteja usando uma versão da aCis com versão inferior a 980


/*=======================================================================================*\
||##############################| INFORMAÇÕES DO SERVIDOR |##############################||
\*=======================================================================================*/
$titulodosite = "ICPNetworks V2 - FREE";	# Titulo do site
$nomedoservidor = "L2 ICP SERVER";			# Nome do seu servidor
$fakePlayers = false;						# Ativar jogadores online fake no site
$fakePlayersNum = 50;						# Porcentagem de jogadores fake (Ex: 50 = 50%)
$inventoryDwarfLimit = 150;					# Tamanho do inventário para anões
$inventoryNoDwarfLimit = 100;				# Tamanho do inventário para outros personagens
$goldBarValue = 500000000;					# Valor de cada gold bar em adenas. Default: 500000000 (500kk)

//---------------------------------------------------------------------------------------//
//--> Reward System <--------------------------------------------------------------------//
//---------------------------------------------------------------------------------------//
$allowRewardSystem = true;					# Habilitar o Reward System
$rewardOnlinetime = true;					# Habilitar a troca de tempo online por premio(s)
$rewardOnlinetimeDays = 1;					# Quantidade de dias online para receber o(s) premio(s)
$rewardOnlinetimeItems = "57,10000;";		# Premios (Id,Quantidad;Id,Quantidade;...)
$rewardPvP = true;							# Habilitar a troca de PVP por premio(s)
$rewardPvPCount = 10;						# Quantidade de PVP para receber o(s) premio(s)
$rewardPvPItems = "3470,20;";				# Premios (Id,Quantidad;Id,Quantidade;...)
$rewardPk = true;							# Habilitar a troca de PK por premio(s)
$rewardPkCount = 5;							# Quantidade de PK para receber o(s) premio(s)
$rewardPkItems = "57,15000;3470,10;";		# Premios (Id,Quantidad;Id,Quantidade;...)
$rewardLoc = "INVENTORY";					# Local onde o player receberá o(s) premio(s)

//---------------------------------------------------------------------------------------//
//--> Prime Shop <-----------------------------------------------------------------------//
//---------------------------------------------------------------------------------------//
$allowPrimeShop = true;						# Habilitar a Prime Shop
$itemPrimeShopLoc = "WAREHOUSE";			# Local que o player receberá o item ao comprar na Prime Shop (WAREHOUSE ou INVENTORY)

//---------------------------------------------------------------------------------------//
//--> Player Store <---------------------------------------------------------------------//
//---------------------------------------------------------------------------------------//
$allowPlayerItemStore = true;				# Permitir que jogadores vendam itens
$allowPlayerCharStore = true;				# Permitir que jogadores vendam personagens
$allowAuction = true;						# Permitir leilão de itens ou personagens
$timeAuction = 7;							# Dias de duração do leilão
$intervalBidAuction = 5;					# Intervalo minimo de lance em um leilão
$allowSalePvpItems = true;					# Permitir venda de items {PvP}
$allowSaleAugItems = true;					# Permitir venda de items augmentados
$allowComboItems = true;					# Permitir venda de multiplos itens
$itemStoreLoc = "WAREHOUSE";				# Local que o player receberá o item ao comprar na loja de players (WAREHOUSE ou INVENTORY)

/*=======================================================================================*\
||##############################| INFORMAÇÕES DE DOAÇÕES |###############################||
\*=======================================================================================*/
$nomeMoeda = "ICP Golds";					# Nome moeda de doação
$qtd_moeda = 1;								# Quantidade de moedas a cada 1 real
//---------------------------------------------------------------------------------------//
$email_pagseguro = "seuemail@pagseguro.com";# Email do PagSeguro
$token_pagseguro = "TOKEN";					# Token gerado pelo PagSeguro
$usdDonate = true;							# Receber doação em dolar (somente com paypal)
$email_paypal = "seuemail@paypal.com";		# Email do PayPal
//---------------------------------------------------------------------------------------//
$AceptDeposit = true;						# Aceitar doações por deposito bancário
$email_comprovante = "donate@site.com.br";	# Email para receber o comprovante de doação via depósito
$bancoNome = "Caixa Economica Federal / Casas Lotérica";	# Nome do seu banco
$bancoAgencia = "0123";						# Número da agencia
$bancoConta = "0001234-5";					# Número da conta
$bancoFavorecido = "ICPNetworks";			# Nome do favorecido
$bancoCPF = "123.456.789-00";				# CPF do favorecido

//---------------------------------------------------------------------------------------//
//--> Character Changes <----------------------------------------------------------------//
//---------------------------------------------------------------------------------------//
$allowBaseClassChange = true;				# Permitir troca de classe base
$baseClasChangePrice = 50;					# Número em moedas do preço para trocar de classe base
$allowNickChange = true;					# Permitir troca de nickname
$nickChangePrice = 40;						# Número em moedas do preço para trocar de nickname
$allowSexChange = true;						# Permitir troca de sexo
$sexChangePrice = 30;						# Número em moedas do preço para trocar de sexo
$allowAccountChange = true;					# Permitir trocar char de conta
$accountChangePrice = 20;					# Número em moedas do preço para trocar o char de conta

//---------------------------------------------------------------------------------------//
//--> Safe Enchanting System <-----------------------------------------------------------//
//---------------------------------------------------------------------------------------//
$allowEnchantItems = true;					# Habilitar o encantamento seguro de itens
$enchant_d = 1;								# Valor em moedas para encantar um item grade D
$enchant_c = 2;								# Valor em moedas para encantar um item grade C
$enchant_b = 3;								# Valor em moedas para encantar um item grade B
$enchant_a = 4;								# Valor em moedas para encantar um item grade A
$enchant_s = 5;								# Valor em moedas para encantar um item grade S
$enchant_s80 = 6;							# Valor em moedas para encantar um item grade S80
$enchant_s84 = 7;							# Valor em moedas para encantar um item grade S84
$enchant_max = 25;							# Limite máximo de encantamento de item do servidor
$allowEnchantPvpItems = true;				# Permitir encantar items {PvP}
$allowEnchantAugItems = true;				# Permitir encantar items augmentados


/*=======================================================================================*\
||###############################| INFORMAÇÕES DE EMAIL |################################||
\*=======================================================================================*/
$CreateAccWithEmail = false;				# Habilitar cadastro com confirmação de conta por email (precisa ter um servidor de email)
$RememberAccWithEmail = false;				# Habilitar recuperação de senha por email (precisa ter um servidor de email)
$host_smtp = "smtp.icpnetworks.com.br";		# Endereço do HOST SMTP do email
$host_port = 25;							# Porta do HOST SMTP
$email_contato = "contact@icpfree.com.br";	# Email
$senha_email_contato = "icpfree";			# Senha do email


/*=======================================================================================*\
||#############################| INFORMAÇÕES DE DOWNLOADS |##############################||
\*=======================================================================================*/
$url_system = "http://www.mediafire.com/?f2qm6htluqa4f9y";	# Link de download da System, Patch ou Launcher
$url_client = "http://computergames.ro/download/lineage-ii-the-chaotic-throne-high-five-client/";	# Link de download do Cliente


/*=======================================================================================*\
||#################################| PAGINAS PERMITIDAS |################################||
\*=======================================================================================*/
$allowMyAccount = true;
$allowInformer = true;
$allowRankServerClasses = true;
$allowRankPvp = true;
$allowRankClassPvp = true;
$allowRankPk = true;
$allowRankClan = true;
$allowRankClanhall = true;
$allowRankCastles = true;
$allowRankHeros = true;
$allowRankOly = true;
$allowRankSevenSigns = true;
$allowRankBosses = true;
$allowRankRaidPoints = true;
$allowRankOnline = true;
$allowRankAdena = true;
$allowGalleryScreenshots = true;
$allowGalleryVideos = true;
?>