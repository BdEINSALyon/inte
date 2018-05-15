<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Astérix By CdpRecords</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="css/style-global.css" />

		<script src="./js/jquery/jquery-1.10.2.js"></script>
		<!-- Notre page de js -->
		<script src="./js/page-carte.js"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="logo"><strong>Astérix</strong> by CDP2018</a>
				<div class="navigation">
					<span class=""><a href="index.php">Introduction</a></span>
					<i class="fas fa-angle-right"></i>
					<span class=""><a href="mot.php">Mot aux parents</a></span>
					<i class="fas fa-angle-right"></i>
					<span class="actual"><a href="carte.php">Découverte du village</a></span>
					<i class="fas fa-angle-right"></i>
					<span class=""><a href="todo.php">To-Do-List</a></span>
				</div>
				<nav>
					<!--<a href="#menu">Menu</a>-->
				</nav>
			</header>

		<!-- Nav
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav> -->

		<!-- Main -->
			<section class="mainMario" id="mainM">
				<div class="inner">
					<!--<div class="image fit">
						<img src="images/pic11.jpg" alt="" />
					</div>-->
					<div class="contentCarte">
						<!-- <h1>Découvre ton village</h1> -->
						<!--<p class="info">Découvre ta nouvelle vie</p>-->

						<div class="rowContent">
							<div class="row-2">
								<div class="liste">
									<div class="titre">Liste des aventures</div>
									<div id="itemTeam" class="element selected">Ta tribu</div>
									<div id="itemInte" class="element ">Organisation intégration</div>
									<div id="itemDeguisement" class="element">Ton déguisement</div>
									<div id="itemWEI" class="element">Le Wei</div>
									<div id="itemTurne" class="element">Ta turne</div>
									<div id="itemKFET" class="element">Le campus et sa KFET</div>
									<div id="itemRestaurant" class="element">Les restaurants</div>
									<div class="element">Le BDE</div>
									<div class="element">Événements de l'année</div>
									<div class="element">Associations</div>
									<div class="element">Scolarité</div>
									<div class="element">Matière</div>
									<div class="element">Filière</div>
									<div class="element">Découvrir Lyon</div>
									<div class="element">Recette du bizuth magique</div>

									<div class="btnBox">
										<div class="titre">Naviguer dans le village</div>


										<div class="rowButton">
											<div class="row-mid">
												<div id="previousAventure">
													<i class="fas fa-angle-left"></i>
												</div>
											</div>
											<div class="row-mid">
												<div id="nextAventure">
													<i class="fas fa-angle-right"></i>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
							<div class="row-6">
								<!-- <div class="titre">Carte de l'aventure</div> -->
								<svg id="carte">
								</svg>

							</div>	
							<div class="row-2">
								<div class="titre">Aperçu</div>
								<p id="summaryInfo" class="summary">
									<!-- Le résumé arrivera là -->
									
								</p>
								<ul class="actions">
									<li><a href="#detailsInfo" class="button alt scrolly">Voir la suite</a></li>
								</ul>
							</div>						
						</div>
						<div class="clearboth"></div>


						<div id="detailsInfo">
							<div class="titre">L'organisation de l'intégration</div>	
							<p>
								<!-- Les détails arriveront là -->
							</p>
						</div>

						<!-- <div id="carte">
							<img src="images/carte_ok.jpg">

							<div id="residenceAB"></div>
							
						</div> -->
					</div>

	
					<!--<div class="centerBloc">
						<ul class="actions">
							<li><a href="generic.html" class="button alt">Découvre ton village</a></li>
						</ul>
					</div>-->
				</div>
			</section>

		
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>
				<div class="copyright">
					<!--&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.-->
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>