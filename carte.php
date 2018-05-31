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
		

		<script src="./js/jquery/jquery-1.10.2.js"></script>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>






		<script src="./js/page-carte.js"></script>


		

		
		<!-- Notre page de js -->
		
		

		
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
					<span class="actual"><a href="carte.php">Découverte du village</a></span>
					<i class="fas fa-angle-right"></i>
					<span class=""><a href="todo.php">To-Do-List</a></span>
				</div>
				<nav>
					

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
									<div id="itemTeam" class="element selected ">
										Ta tribu
										<div class="btnDecouvert">
											<button class="decouvrir">Découvrir</button>
										</div>
									</div>
									<div id="itemInte" class="element ">Organisation intégration</div>
									<div id="itemDeguisement" class="element ">Ton déguisement</div>
									<div id="itemWEI" class="element">Le Wei</div>
									<div id="itemTurne" class="element ">Ta turne</div>
									<div id="itemKFET" class="element ">Le campus et la KFET</div>
									<div id="itemRestaurant" class="element ">Les restaurants</div>
									<div id="itemBDE" class="element ">Le BDE</div>
									<div id="itemEvent"  class="element ">Événements de l'année</div>
									<div id="itemAssociations"  class="element ">Associations</div>
									<div id="itemScolarite"  class="element ">Scolarité</div>
									<div id="itemMatiere"  class="element ">Matière</div>
									<div id="itemFiliere"  class="element ">Filière</div>
									<div id="itemLyon"  class="element ">Découvrir Lyon</div>
									<div id="itemRecette"  class="element ">Recette du bizuth magique</div>
									<div id="itemLexique"  class="element ">Le Lexique</div>
									<div id="itemResp"  class="element ">Le mot de la Resp</div>
									<div id="itemCapelle"  class="element hidden">Amphi Capelle ... Ah non lol</div>

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
								<div class="contentCarte">
									<img id="carte" src="content/carte/carte_Team.png" usemap="#logo" ></img>
									<div id="description"></div>
								</div>

								<map name="logo" id="Map">
								    <area alt="" title="Ta tribu" class="areaZone" id="areaTeam" class="zone" shape="poly" coords="526,526,539,544,543,557,549,574,556,603,560,623,563,643,561,672,557,684,552,697,541,702,525,703,509,697,497,685,487,665,489,621,496,584,509,547,515,532" />
								    <area alt="" class="areaZone"  id="areaInte" shape="poly" coords="394,533,400,536,400,542,404,550,410,554,422,560,430,562,432,570,431,575,426,579,426,588,424,596,429,606,432,618,436,627,438,633,419,641,407,641,394,643,379,643,369,642,356,637,355,630,364,615,367,603,369,585,368,580,361,578,363,565,369,561,378,557,385,553,390,549,390,543,389,537" />
								    <area target="" class="areaZone" alt="" title=""  id="areaDeguisement" coords="225,446,233,449,233,456,236,466,241,474,249,478,257,480,258,488,268,480,267,472,276,471,281,478,286,483,287,490,289,499,291,508,291,515,287,521,279,522,269,524,261,526,254,529,243,527,234,522,235,517,227,517,217,517,215,508,221,502,226,498,227,486,224,482,233,481,229,475,227,469,225,462,223,453" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaWEI" coords="30,211,36,217,43,227,52,239,63,249,72,259,81,255,94,240,109,237,122,231,128,221,145,211,158,203,172,195,180,183,179,176,171,170,165,163,183,157,197,154,197,143,199,124,197,112,189,104,175,95,161,88,148,81,128,80,112,80,105,89,93,95,81,115,81,126,87,133,95,148,106,152,113,154,98,165,72,177,59,187,46,198" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaTurne"  coords="311,358,317,350,321,343,329,340,339,339,353,338,368,338,379,343,389,351,396,358,404,368,409,374,410,385,402,389,401,400,400,413,390,416,378,418,370,417,359,421,350,422,340,422,332,419,326,411,326,403,331,399,327,386,323,377,317,369" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaKFET" coords="619,562,628,561,639,559,649,564,664,564,696,567,715,567,755,562,787,560,812,558,840,549,832,521,822,501,806,483,790,464,777,450,767,436,747,423,727,421,709,423,692,427,679,430,671,431,654,445,637,470,629,495,622,513,617,531,615,547" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaRestaurant" coords="690,393,705,402,714,408,739,409,754,409,774,413,786,420,804,423,821,423,833,420,838,416,835,410,845,408,860,406,874,402,872,382,865,365,858,349,852,333,845,319,829,306,815,289,783,283,766,283,763,276,760,263,752,254,749,249,743,247,744,261,750,271,742,277,736,287,727,291,718,307,709,327,713,333,703,341,700,351,696,367,693,381" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaEvent" coords="366,133,371,136,375,145,384,155,398,167,415,172,419,182,425,192,416,197,417,209,417,227,418,242,406,255,393,266,383,276,373,283,355,280,336,273,325,267,334,237,335,212,328,202,320,196,323,182,332,174,346,165,356,149,359,137" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaAssociations" coords="243,348,276,347,282,346,294,345,305,354,314,367,326,383,327,398,321,407,326,425,319,430,298,432,273,431,251,431,236,426,227,426,225,401,217,394,210,394,215,373,230,357" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaScolarite" coords="364,334,364,323,364,314,354,313,350,306,371,287,388,268,406,255,419,247,423,242,434,246,442,249,444,260,456,255,460,265,480,279,492,286,511,298,507,311,502,321,501,342,500,351,470,354,447,353,411,352,391,350,379,340,371,335,384,345" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaMatiere" coords="339,507,339,485,334,479,338,466,354,443,370,422,377,417,394,417,402,411,402,403,412,403,423,395,438,401,448,410,455,426,469,429,473,440,484,447,493,460,503,474,511,481,511,493,507,508,499,513,489,515,454,519,437,524,420,525,405,525,393,528,375,526,348,519,340,517" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaFiliere" coords="498,439,517,445,533,444,547,442,561,438,577,437,596,431,591,416,586,402,596,394,585,378,576,368,562,350,546,329,547,309,523,310,516,317,525,330,518,338,510,347,498,355,482,366,474,375,478,388,497,392,496,415" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaLyon" coords="877,561,876,577,876,589,878,651,878,709,901,708,908,710,937,709,960,705,957,664,956,618,957,599,947,587,957,572,945,560" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaBDE"  coords="588,294,578,316,575,333,584,342,584,355,598,362,605,374,613,383,610,401,609,419,618,426,630,421,649,419,662,419,654,393,667,372,678,353,710,333,697,332,703,314,690,279,673,274,647,276,617,285" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaRecette" coords="630,181,619,192,614,198,608,208,607,217,607,232,607,244,635,246,693,241,716,238,713,226,711,217,721,211,713,201,705,196,699,191,690,184,682,177,668,176,642,177,657,175" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaLexique" coords="697,152,692,161,684,177,699,187,709,197,718,211,715,218,724,224,749,224,780,220,790,220,786,187,795,185,784,173,774,163,761,150,747,146,705,148,727,145" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaResp" coords="549,84,539,81,529,81,529,88,530,102,519,106,507,115,492,119,496,133,499,151,503,161,498,171,507,180,488,172,475,188,481,198,476,216,482,232,471,243,480,257,495,257,500,275,522,270,519,249,529,219,540,214,550,211,566,230,551,244,541,258,554,267,567,263,575,276,601,276,609,270,596,248,600,224,606,193,601,176,590,172,582,155,579,136,564,124,565,108,568,97,556,90" shape="poly">
								    <area target="" class="areaZone" alt="" title=""  id="areaCapelle" href="" coords="650,584,642,599,616,612,614,628,622,641,616,673,609,684,648,695,678,687,702,678,690,649,692,628,694,617,666,602" shape="poly">
								</map>

							</div>	

							<div class="row-2">
								<div class="debut">
									<div class="titre">Aperçu</div>
									<p id="summaryInfo" class="summary">
										<!-- Le résumé arrivera là -->
										
									</p>
									
								</div>

								<div class="fond">
									<div class="btnTodo	">
										Tu penses connaître ton village ?
										<ul class="actions">
											<li><a href="todo.php" class="button alt scrolly">Passe à la to-do-list</a></li>
										</ul>
									</div>

								</div>
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
				<input type="hidden" id="hasSeenTODO" value=<?php echo $_COOKIE['hasSeenTODO'] ?>></div>
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

		<!-- Scripts 
			<script src="assets/js/jquery.min.js"></script>-->
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>