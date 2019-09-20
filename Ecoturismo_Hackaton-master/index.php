<!DOCTYPE HTML>

<html>
	<head>
		<title> Ecoturismo </title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Language" content="pt-br">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="js/acao.js"></script>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<img class="img" src="img/logo.png">
						<h1>Ecoturismo</h1>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#ecoturismo" class="active">Turismo Ecológico</a></li>
							<li><a href="#objetivo">Objetivos</a></li>
							<li><a href="#eventos">Eventos</a></li>
							<li><a href="#criar">Criar Evento</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Sobre -->
							<section id="ecoturismo" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Mas o que é Ecoturismo?</h2>
										</header>
										<p>O ecoturismo é um segmento do turismo voltado para a contemplação, atividades de lazer,
											 esportivas ou educacionais no meio natural de forma a preservar os patrimônios naturais
											  e culturais do local visitado. Além disso o ecoturismo é ainda uma forma de despertar a
												 consciência ecológica dos turistas através da interpretação e integração com o ambiente
												  e a comunidade local, gerando benefícios tanto para o visitante quanto para a comunidade
													 ou local visitado.</p>
										<ul class="actions">

										</ul>
									</div>
									<span class="image"><img src="img/eco.jpg"/></span>
								</div>
							</section>

						<!-- Objetivos --> <!-- https://fontawesome.com/icons/copy?style=regular link dos icones-->
							<section id="objetivo" class="main special">
								<header class="major">
									<h2>Objetivos do Ecoturismo</h2>
								</header>
								<ul class="features">
									<li>
										<span class="icon solid major style1 fas fa-leaf"></span>
										<br><br>
										<p> Promover e desenvolver turismo com bases cultural e ecologicamente sustentáveis</p>
									</li>
									<li>
										<span class="icon major style3 fab fa-pagelines"></span>
										<br><br>
										<p>Promover e incentivar investimentos em conservação dos recursos culturais e naturais utilizados</p>
									</li>
									
								</ul>
								<footer class="major">

								</footer>
							</section>

						<!-- Serviços -->
							<section id="eventos" class="main special">
								<header class="major">
									<h2>Eventos Disponíveis</h2>
									
								</header>
								<?php

								include('listar.php');

								?>
								
								<p class="content"></p>
								<footer class="major">
									<ul class="actions special">

									</ul>
								</footer>
							</section>

						<!-- Criar Evento -->
							<section id="criar" class="main special">
								<header class="major">
									<h2>Crie um evento você também!</h2>
										<form class="form" method="POST" action="cadastrar.php">
										
					 	<input type="text" class="form-control" name="nome" placeholder="Título">
					 	<br>
					 	<input type="date" class="form-control" name="data" placeholder="Data do Evento">
						<br>
						<input type="text" class="form-control" name="endereco" placeholder="Endereço">
					 	<br>
					 	<input type="number" class="form-control" name="tel" placeholder="Telefone para Contato">
						<br>
						<textarea class="form-control" rows="3" name="descricao" placeholder="Descrição do Evento"></textarea>						

								</header>
								<footer class="major">
									<ul class="actions special">
										<li><button class="button" id="btn" style="background: linear-gradient(to right, #6ca615, #007f1d)"> Enviar </button></li>
									</ul>
								</footer>
							</section>
						</form>
							

					</div>

				<!-- Footer // Rodapé -->
					<footer id="footer">

						<section>
			        <img id="logo-footer" src="img/monga.png">
						</section>

						<section>
							<p id="txt">Av Getúlio Vargas, 67 - Centro | <b>Tel: (13) 3445-3000
								Atendimento:</b> De 2ª a 6ª das 8h30 às 16h30</p>
						</section>
						<p class="copyright">&copy; 2019, Todos os direitos reservados.
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
