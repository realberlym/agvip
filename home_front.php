<?php 





echo ' 

<!DOCTYPE HTML>
<html>
	<head>
		<title>AGÊNCIA VIP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<script src="assets/js/ie/html5shiv.js"></script>

		<link rel="stylesheet" href="assets/css/main.css"/>
		<link rel="stylesheet" href="assets/css/jquery-ui.css"/>		
		<link rel="shortcut icon" href="http://download.seaicons.com/download/i99486/webalys/kameleon.pics/webalys-kameleon.pics-paper-plane.ico" />
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  		<script src="js/jquery-1.12.4.js"></script>
  		<script src="js/jquery-ui.js"></script>
  		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script>
		$(function() {
			var busca = [
				"Praia São Sebastião",
				"Praia de Suarão",
				"Praia de Intanhaem",
				"Praia Peruibe"
			];
			$("#busca" ).autocomplete({
				source: busca
			});
		});

		</script>

	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="home.php" class="logo"><strong>AGÊNCIA</strong> <span>VIP</span></a>
						<nav>
							<a href="#menu">Entrar</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
					<form action="#" method="post">
						<ul class="links">
							<li><a>E-mail</a> <input type="text" name=""></li>
							<li><a>Senha</a><input type="password" name="psw"></li>
						</ul>
						<ul class="actions vertical">

							<li><button class="button fit" type="submit">Entrar</button></li>

						</ul>
						</form>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h3 style="text-align: center"><a href="#"><span class="icon alt fa-plane" ></span>	Passagens |</a> <a href="##"><span class="icon alt fa-home" ></span> Hoteis |</a>  <a href="###"><span class="icon alt fa-briefcase" ></span> Pacotes |</a> <a href="###"><span class="icon alt fa-car" ></span> Carros |</a>  <a href="###"><span class="icon alt fa-ticket" ></span> Ingresso </a></h3>
							</header>
							<span class="input-group-addon" id="basic-addon1">Onde</span>
							<div>
							<input type="text" id="busca" placeholder="Destino, cidade, estado"  style="width:500px;font-size: 20px; float: left;">  </input>
							<span class="icon alt fa-calendar"><input style="background-color: black" type="date" name=""></span>  <span class="icon alt fa-calendar" ><input style="background-color: black" type="date" name=""></span>
							<button type="button" class="btn btn-primary btn-lg btn-block">Pesquisar</button>
							</div>
  								
  							
					</section>

				<!-- Main -->
					<div id="main">

					';

					for ($i=0; $i <50 ; $i++) { 
						
					}

					echo '

					</div>
				  <!-- Contact -->
					<section id="contact" style="background-color: #1C1C1C">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Nome</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">E-mail</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Mensagem</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar" class="special" /></li>
										<li><input type="reset" value="Limpar campos" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>E-mail</h3>
										<a href="#">contato@agenciavip.com.br</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Telefone</h3>
										<span>(011) 5555-9999</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							</div>
					</footer>

			</div>

	
			
</html>


';

 ?>



