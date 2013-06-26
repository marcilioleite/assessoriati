<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>ACONTEC</title>
		<meta name="description" content="" />
		<meta name="author" content="Marcilio Leite" />

		<meta name="viewport" content="width=device-width; initial-scale=1.0" />

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />

		<link rel="stylesheet" href="<?php echo UrlHelper::getStylesheetPath("bootstrap.min") ?>" />
		<link rel="stylesheet" href="<?php echo UrlHelper::getStylesheetPath("bootstrap-responsive.min") ?>" />
	    <style>
	    	.body-content {
	    		margin-top: 20px;
	    	}
	    </style>
		<script src="<?php echo UrlHelper::getJavascriptPath("jquery-2.0.2.min") ?>"></script>
		<script src="<?php echo UrlHelper::getJavascriptPath("bootstrap.min") ?>"></script>

		<script src="<?php echo UrlHelper::getJavascriptPath("noty/jquery.noty") ?>"></script>
		<script src="<?php echo UrlHelper::getJavascriptPath("noty/layouts/center") ?>"></script>
		<script src="<?php echo UrlHelper::getJavascriptPath("noty/layouts/centerLeft") ?>"></script>
		<script src="<?php echo UrlHelper::getJavascriptPath("noty/layouts/centerRight") ?>"></script>
		<script src="<?php echo UrlHelper::getJavascriptPath("noty/themes/default") ?>"></script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">ACONTEC</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active">
								<a href="#">Calendário</a>
							</li>
							<li>
								<a href="#about">Funcionários</a>
							</li>
							<li>
								<a href="<?php echo UrlHelper::getRoot() ?>clientes" id="menu-clientes">Clientes</a>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="menu-configuracoes">Configuração <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo UrlHelper::getRoot() ?>servicos">Serviços</a>
									</li>
									<li class="divider"></li>
									<li class="nav-header">
										Segurança
									</li>
									<li>
										<a href="<?php echo UrlHelper::getRoot() ?>permissoes">Permissões</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="body-content container">
