<?php
	// Ajouter un cookie pour dire que le user a vue la page
	setcookie("hasSeenTODO",true);
?>


<!DOCTYPE HTML>
<!--
	Binary by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->



<html>
	<head>
		<title>Intégration INSA Lyon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="css/style-global.css" />

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


		<script src="./js/jquery/jquery-1.10.2.js"></script>
		<script src="./js/page-todo.js"></script>

	</head>
	<body>

			
		<!-- Header -->
			<header id="header">
				<a href="/" class="logo"><strong>Intégration 2018</strong> INSA Lyon</a>
				<div class="navigation">
					<span class=""><a href="index.php">Introduction</a></span>
					<i class="fas fa-angle-right"></i>
					<span class=""><a href="mot.php">Mot aux parents</a></span>
					<i class="fas fa-angle-right"></i>
					<span class=""><a href="carte.php">Découverte du village</a></span>
					<i class="fas fa-angle-right"></i>
					<span class="actual"><a href="todo.php">To-Do-List</a></span>
				</div>
				<nav>
					<!--<a href="#menu">Menu</a>
					<ul class="actions">
						<li><a href="wei.php" id="participateWEI" class="scrolly button alt">Participer au Wei</a></li>
					</ul>-->
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
			<section id="main">
				<div class="inner">
					<!--<div class="image fit">
						<img src="images/pic11.jpg" alt="" />
					</div>-->
					
	 				<div class="pub">
	 					<i id="fermerPUBTodo" class="fas fa-times"></i>
						<img id="INSA_Bde" src="content/img/INSA_Bde.png"></img>	
					</div>


					<header>
						<h1 class="titreTodo">La checklist d'un petit Astérix</h1>
					</header>


					<div class="todoBloc">
						<div class="titre">Pendant cet été</div>

						<div class="blocList">

							<div class="partListe"><i id="joinFb" class="fab fa-facebook-square"></i>Rejoindre le groupe Facebook "INSA Lyon – Admis en 1ère année 2018/2019 - 62ème promo" <button class="decouvrir" id="linkFB">Rejoindre</button></div>

							<div class="partListe"><i id="downloadIcon" class="fas fa-cloud-download-alt"></i>Télécharger le questionnaire <button class="decouvrir" id="downloadFile">Télécharger le questionnaire</button></div>

							<div class="partListe"><i id="printerIcon" class="fas fa-print"></i>Imprimer et envoyer le questionnaire concocté par tes CDP chéris, à cette adresse(hyper important, sinon tu n'auras pas de parrain!) :  </div> 

							<div class="adresse">INSA, Bureau des élèves, Equipe CdP <br>

							Le Thélème - Maison des Etudiants <br>

							20, Avenue Albert Einstein <br>

							69621 Villeurbanne CEDEX </div>

							<div class="partListe"><i id="sunIcon" class="fas fa-sun"></i>Si tu veux participer au WEI <button class="decouvrir" id="goWEI">Inscription au Wei</button></div>
						 </div>

						

						

						 

						<div class="titre">A la rentrée</div>  

						<div class="blocList">
							<div class="partListe"><i id="adminIcon" class="fas fa-clipboard-list"></i>Chaîne administrative:  </div>  

								<div class="ssElemen">Confirmer ton inscription à la Vie Associative (parce que la VA c'est le feu) </div>  

							<div class="partListe"><i id="heartIcon" class="fas fa-heart"></i>Passer au stand CdP (pour avoir des câlins) et surtout :  </div>  

								<div class="ssElemen">Prendre tes annales de cours </div>  

								<div class="ssElemen">Récupérer ton t-shirt de promo </div>  

								<div class="ssElemen">Demander le nom de ton parrain </div>  

							<div class="partListe"><i id="planeIcon" class="fas fa-globe"></i>Passer au stand Co-WEI pour : </div>  

								<div class="ssElemen">Confirmer ton inscription </div>  

								<div class="ssElemen">Choisir ton bus </div>  

							<div class="partListe"><i id="shopIcon" class="fas fa-shopping-bag"></i> Passer au stand INSA Shop si tu veux utiliser ton coupon </div>  
						</div>
					</div>



	
				</div>
			</section>

		
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li> 
					<span id="joinFBFooter">Rejoins le groupe Facebook "INSA Lyon – Admis en 1ère année 2018/2019 - 62ème promo"</span>	
					
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