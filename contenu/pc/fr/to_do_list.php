<!DOCTYPE html>
<html>
	<head>
		<title>Inté 2019 - BDE INSA Lyon</title>
		<link rel="icon" type="image/png" href="../../images/global/cdp_logo.png" />
		<meta charset = "utf-8">
		<meta name="keywords" content="insa, lyon, inté">
		<meta name="description" content="Site web pour l'intégration 2019 - Insa de lyon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script src="..\..\js\timer.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<link rel="stylesheet" href="..\css\to_do_list.css">
		
	</head>
	<body>	 
	
		<?php include("page_template.php");?>
	
		<div id = "pageContent">
			<h1>TO DO LIST</h1>
			<p class = "subTitle">
				&nbsp &nbsp Tu pensais en avoir fini avec la paperasse après Parcoursup, et bien non ! Pour que tu ne sois pas trop perdu avant la rentrée, on t’a fait une petite To Do List à remplir avant et pendant l’inté.
			</p>
			<br>
			<h2>Dans l’immédiat</h2>
			<section>
			&nbsp &nbsp  Rejoindre le groupe « INSA Lyon – 63ème promo – 2019/2023 » : c’est là que tu pourras poser toutes les questions aux 2èmes années.
			</section>
			<br>
			<button onclick="window.open('https://www.facebook.com/groups/2340380032891518/');" class="quick_button">LA PAGE FACEBOOK</button>
			<br><br>
			<h2>Pendant les vacances</h2>
			<section>
			&nbsp &nbsp   Réaliser l'inscription administrative.
			</section>
			<br>
			<section>
			&nbsp &nbsp   Remplir le questionnaire de parrainage avec soin pour qu’on puisse te trouver une marraine/un parrain et une famille qui te correspondra et t’intégrera la première semaine (ça serait bête de se retrouver seul)
			</section>
			<br>
			<button onclick="window.open('../../download_content/QUESTIONNAIRE_INTE.pdf');" class="quick_button">LE QUESTIONNAIRE</button>
			<br><br>
			<section>
			&nbsp &nbsp   Préparer ton meilleur déguisement d’Aladdin, n’achète pas de déguisement tout fait : on t’a préparé un petit tuto dans la page : « Ton arrivée à Agrabah ». 
			</section>
			<br>
			<section>
			&nbsp &nbsp   S’inscrire au WEI et prendre ta carte VA (sans quoi tu ne peux pas y aller). Clique sur le bouton « Choppe ta place au wei » pour obtenir les informations. Dépêche-toi, les places sont limitées.
			</section><br>
			<button onclick="window.open('../../download_content/wei.pdf');" class="quick_button">LE WEI</button>
			<br><br>
			<h2>Pendant les vacances mais plutôt vers la fin </h2>
			<section>
			&nbsp &nbsp   Réunir tous les papiers nécessaires au dossier que tu devras apporter lors de ton arrivée, ce serait bête de rater l’INSA à cause d’une signature oubliée. 
			</section>
			<br><br>
			<h2>En arrivant à l’INSA </h2>
			<section>
			&nbsp &nbsp   Faire la chaîne administrative dans le bâtiment Pierre de Fermat pour être enfin inscrit officiellement à l’INSA Lyon 
			</section>
			<br>
			<section>
			&nbsp &nbsp   Aller récupérer les clés de ta turne en bas du bâtiment A 
			</section>
			<br>
			<section>
			&nbsp &nbsp   Passer aux stand VA, WEI, stand de ta filière si tu n’es pas en classique et récupérer ton pack parrain 
			</section>
			<br>
			<section>
			&nbsp &nbsp   Retrouver ta famille sur la pelouse du FIMI 
			</section>
			<br>
			<section>
			&nbsp &nbsp   Faire la chaîne d’inté et vivre pleinement cette inté de folie !! 
			</section>
			<br>

			<br><br><br>
			<br>
			<!--<?php include("copryrights.php");?>-->		
		</div>
		<script>
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				window.location.href = '../../mobile/fr/to_do_list.php';
			}
			document.getElementById("weiButton").setAttribute( "onClick", "window.location.href = '../../download_content/wei.pdf';" );
		</script>	
	</body>
</html>
























