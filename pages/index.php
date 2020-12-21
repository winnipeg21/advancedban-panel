<?php

$__configuration = AdvancedBans::getConfiguration( );
$__language = AdvancedBans::getLanguage( );
$__theme = AdvancedBans::getTheme( );
$__root = AdvancedBans::getRoot( );
$__cookie = AdvancedBans::getCookie( );
$__network = AdvancedBans::getNetwork( );

$__network->send( );

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title>Ban Panel | RevivalMC</title>
        <link rel="icon" href="https://bans.revivalmc.co/static/resources/images/icon.png">
        <!-- Search Engine -->
		<meta name="description" content="View all punishment history on RevivalMC" >
		<meta name="image" content="https://bans.revivalmc.co/static/resources/images/icon.png">
		<meta name="theme-color" content="#75bc30">
		<!-- Schema.org for Google -->
		<meta itemprop="name" content="Ban Panel | RevivalMC">
		<meta itemprop="description" content="View all punishment history on RevivalMC" >
		<meta itemprop="image" content="https://bans.revivalmc.co/static/resources/images/icon.png">
		<!-- Twitter -->
		<meta name="twitter:card" content="summary">
		<meta property="twitter:url" content="https://bans.revivalmc.co">
		<meta name="twitter:title" content="Ban Panel | RevivalMC">
		<meta name="twitter:description" content="View all punishment history on RevivalMC" >
		<meta name="twitter:site" content="@revivalmcs">
		<meta name="twitter:image:src" content="https://bans.revivalmc.co/static/resources/images/icon.png">
		<!-- Open Graph general (Facebook, Pinterest & Google+) -->
		<meta name="og:title" content="Ban Panel | RevivalMC">
		<meta name="og:description" content="View all punishment history on RevivalMC" >
		<meta name="og:image" content="https://bans.revivalmc.co/static/resources/images/icon.png">
		<meta name="og:url" content="https://bans.revivalmc.co">
		<meta name="og:site_name" content="RevivalMC">
		<meta name="og:type" content="website">
		
		<meta name="msapplication-tooltip" content="<?= $__configuration->get(["language", "title"]) ?>">
		<!--<meta name="msapplication-navbutton-color" content="#fafafa">-->
		<meta name="msapplication-starturl" content=".">
		<meta name="msapplication-TileColor" content="#fafafa">
		<meta name="msapplication-TileImage" content="static/resources/images/icons/ms-icon-144x144.png">
		
		<!-- tasks -->
		
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		
		<!--<link rel="manifest" id="manifest">-->
		<link rel="apple-touch-icon" sizes="57x57" href="static/resources/images/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="static/resources/images/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="static/resources/images/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="static/resources/images/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="static/resources/images/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="static/resources/images/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="static/resources/images/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="static/resources/images/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="static/resources/images/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="static/resources/images/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="static/resources/images/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="static/resources/images/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="static/resources/images/icons/favicon-16x16.png">
		
		<link rel="stylesheet" media="screen" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		
		<link rel="stylesheet" media="screen" href="static/resources/css/bootstrap.min.css">
		
		<link rel="stylesheet" media="screen" href="static/resources/css/advancedban.css">
		
		<?= $__theme->get("stylesheet", "css") ?>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
				<a class="navbar-brand" href="https://revivalmc.co"><?= $__configuration->get(["language", "title"]) ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><!-- toggle --></span>
				</button>
				<div class="collapse navbar-collapse" id="navigation">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="./"><?= $__language->get("punishments", "Punishments") ?></a>
						</li>
						
						<?php
						
						if($__configuration->get(["player_count", "enabled"]) === true) {
							
							?>
							<li class="nav-item clipboard" data-clipboard-text="<?= $__configuration->get(["player_count", "host"]) . ":" . $__configuration->get(["player_count", "port"]) ?>">
								<a class="nav-link"><span class="badge badge-primary players"><?= $__language->get("error_not_evaluated", "N/A") ?></span> <?= $__language->get("players", "Players") ?></a>
							</li>
							<?php
							
						}
						
						?>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="splash text-center">
			<div class="container">
				<h1><?= $__configuration->get(["language", "title"]) ?></h1> 
				<p><?= $__configuration->get(["language", "description"]) ?></p>
			</div>
		</div>
		
		<div class="content">
			<div class="search">
				<div class="container">
					<input type="text" class="form-control" id="input" placeholder="<?= $__language->get("search", "Search") ?>">
					<div class="text-center">
						<div class="dropdown search-type">
							<button class="btn btn-primary dropdown-toggle" type="button" id="punishmentType" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?= $__language->get("type", "Type") ?> <span class="caret"><!-- icon --></span></button>
							<div class="dropdown-menu" aria-labelledby="punishmentType">
								<a class="dropdown-item" data-search="BAN"><?= $__language->get("ban", "Ban") ?></a>
								<a class="dropdown-item" data-search="TEMP_BAN"><?= $__language->get("temp_ban", "Temp. Ban") ?></a>
								<a class="dropdown-item" data-search="MUTE"><?= $__language->get("mute", "Mute") ?></a>
								<a class="dropdown-item" data-search="TEMP_MUTE"><?= $__language->get("temp_mute", "Temp. Mute") ?></a>
								<a class="dropdown-item" data-search="WARNING"><?= $__language->get("warning", "Warning") ?></a>
								<a class="dropdown-item" data-search="TEMP_WARNING"><?= $__language->get("temp_warning", "Temp. Warning") ?></a>
								<a class="dropdown-item" data-search="KICK"><?= $__language->get("kick", "Kick") ?></a>
								<a class="dropdown-item" data-search="IP_BAN"><?= $__language->get("ip_ban", "I.P. Ban") ?></a>
							</div>
						</div>
						
						<div class="dropdown search-status">
							<button class="btn btn-primary dropdown-toggle" type="button" id="punishmentStatus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?= $__language->get("status", "Status") ?> <span class="caret"><!-- icon --></span></button>
							<div class="dropdown-menu" aria-labelledby="punishmentStatus">
								<a class="dropdown-item" data-search="<?= $__language->get("active", "Active") ?>"><?= $__language->get("active", "Active") ?></a>
								<a class="dropdown-item" data-search="<?= $__language->get("inactive", "Inactive") ?>"><?= $__language->get("inactive", "Inactive") ?></a>
							</div>
						</div>
						
						<button class="btn btn-primary" type="button" id="filter">Filter</button>
					</div>
				</div>
			</div>
		
			<div class="punishment-wrapper container">
				<div class="load text-center">
					<img src="static/resources/images/borb.gif">
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="static/resources/javascript/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="static/resources/javascript/popper.min.js"></script>
		<script type="text/javascript" src="static/resources/javascript/clipboard.min.js"></script>
		<script type="text/javascript" src="static/resources/javascript/fuse.min.js"></script>
		<script type="text/javascript" src="static/resources/javascript/bootstrap.min.js"></script>
		
		<script type="text/javascript" src="static/resources/javascript/AdvancedBans/User/Language.class.js"></script>
		
		<script type="text/javascript" src="static/resources/javascript/AdvancedBans/Storage/Cookie.class.js"></script>
		
		<script type="text/javascript" src="static/resources/javascript/AdvancedBans/Configuration.class.js"></script>
		<script type="text/javascript" src="static/resources/javascript/AdvancedBans/Template.class.js"></script>
		
		<script type="text/javascript" src="static/resources/javascript/AdvancedBans/AdvancedBans.class.js"></script>
		
		<script type="text/javascript" src="static/resources/javascript/include/functions/parseDate.js"></script>
		
		<script type="text/javascript" src="static/resources/javascript/advancedbans.js"></script>
		
		<?= $__theme->get("script", "js") ?>
	</body>
	<footer>
		<ul class="nav justify-content-center">
		  <li class="nav-item">
		    <a class="nav-link" href="https://revivalmc.co">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="https://shop.revivalmc.co">Shop</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="https://revivalmc.co/vote">Voting</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="https://revivalmc.co/discord">Discord</a>
		  </li>
		</ul>
		<div style="text-align: center;color: #eee">
			Panel by <a href="https://mathhulk.com/">Matthulk</a>
		</div>
	</footer>
</html>