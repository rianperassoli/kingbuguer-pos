<!DOCTYPE html>
<html>
<head>
	<title>King Burger</title>
	<meta charset="utf-8">
	<meta name="description" content="O mais Maraviwonderful Hamburger de Iraceminha de Bacon">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="images/logo.png">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<header>
		<nav>
			<a href="index.php" title="Home" class="logo">
				<img src="images/kingburger.png"
				alt="King Burger" title="King Burger">
			</a>

			<a href="#" id="menu">
				<i class="fa fa-bars"></i>
			</a>

			<ul>
				<li>
					<a href="home" title="Home">Home</a>
				</li>
				<li>
					<a href="sobre" title="Sobre">Sobre</a>
				</li>
				<li>
					<a href="cardapio" title="Cardápio">Cardápio</a>
				</li>
				<li>
					<a href="contato" title="Contato">Contato</a>
				</li>
			</ul>
		</nav>

		<div class="clear"></div>

		<div class="msg">
			<h1>Mega Max Burger</h1>
			<p>4 Hamurgueres de Carne de Boi, mais 500 gramas de bacon</p>
		</div>

		<img src="images/6.png" alt="Mega Max Burguer" title="Mega Max Burger" class="max">

	</header>

	<main>
		<?php
			//recuperar o parametro
			if ( isset ( $_GET["param"] ) ) {
				$pagina = $_GET["param"];
			} else {
				$pagina = "home";
			}

			//echo $pagina;
			$pagina = "paginas/".$pagina.".php";
			//verificar se o arquivo
			if ( file_exists($pagina) )
				include $pagina;
			else
				include "paginas/erro.php";  
		?>

		<section id="local">
			<h1 class="center">Encontre-nos</h1>

			<div class="linha container">
				<div class="item">
					<i class="fas fa-map"></i>
					<p>Av. Araucária, 1000<br>
					Maravilha - SC</p>
				</div>
				<div class="item">
					<i class="fas fa-mobile"></i>
					<p>(49) 3665-1406</p>
				</div>
				<div class="item">
					<i class="fas fa-envelope"></i>
					<p>contato@kb.com.br</p>
				</div>
			</div>
		</section>

	</main>

	
	<footer>
		<div class="rigth">
			<a href="http://fb.com" > <i class="fa fa-facebook-square"></i> </a>
			<a href="http://twitter.com" > <i class="fa fa-twitter-square"></i> </a>
			<a href="http://youtube.com" > <i class="fa fa-youtube-square"></i> </a>
			<a href="http://instagram.com" > <i class="fa fa-instagram"></i> </a>
		</div>	
	</footer>

	<script type="text/javascript">
		$("#menu").click( function(){
			$("nav ul").toggle();
		})
	</script>
</body>
</html>