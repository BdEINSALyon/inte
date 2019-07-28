<!DOCTYPE html>
<html>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143625507-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-143625507-1');
	</script>

	<title>Inté 2019 - BDE INSA Lyon</title>
	<link rel="icon" type="image/png" href="../../images/global/cdp_logo.png" />
	<meta charset="utf-8">
	<meta name="keywords" content="insa, lyon, inté">
	<meta name="description" content="Site web pour l'intégration 2019 - Insa de lyon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="..\..\js\timer.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/carte.css">
</head>

<body>

	<?php include("page_template.php");?>

	<div id="pageContent">
		<div class="map-container">
			<img src="../../images/CARTEFIN.jpg" width="1000px" height="auto" usemap="#imgmap">

			<map name="imgmap">
				<area shape="rect" coords="100,250,190,330"  title="Restaurant INSA" onclick="test('RI')">
				<area shape="rect" coords="50,145,92,330"  title="Bâtiment C" onclick="test('C')">
				<area shape="rect" coords="200,145,242,330"  title="Bâtiment D" onclick="test('D')">
				<area shape="rect" coords="260,220,420,350"  title="BMC" onclick="test('BMC')">
				<area shape="rect" coords="340,80,520,215" title="La MDE" onclick="test('MDE')">
				<area shape="rect" coords="425,240,680,360"  title="FIMI" onclick="test('FIMI')">
				<area shape="rect" coords="525,80,720,240"  title="FIMI" onclick="test('FIMI')">
				<area shape="rect" coords="720,145,800,200"  title="FIMI" onclick="test('FIMI')">
				<area shape="rect" coords="700,220,810,330"  title="Bâtiment A" onclick="test('A')">
				<area shape="rect" coords="850,220,970,330"  title="Bâtiment B" onclick="test('B')">
				<area shape="rect" coords="50,350,140,400"  title="Gaston Berger" onclick="test('GB')">
				<area shape="rect" coords="260,400,350,450"  title="INSA/EINSTEIN" onclick="test('INSA')">
				<area shape="rect" coords="500,380,590,430"  title="croix luizet" onclick="test('CROIX')">
			</map>
			<br>
			<section id="description">
				Même si tes 17m² partagés avec ton/ta super coturne te semblent être un beau petit cocon protecteur, il est temps pour toi mon cher biz de partir en exploration. Et oui, tu vas devoir sortir de ta turne pour aller découvrir l’immense souk qu’est notre belle école. Alors enfile ton plus beau sarouel et enfourche ton tapis volant, je t’emmène découvrir le campus de l’INSA Lyon. Cliques sur les bâtimebts pour en savoir plus !
			</section>
			<br>
		</div>
		<br>
		<section>
			Pour un plan un peu plus à l'échelle, rendez-vous <a href="https://www.insa-lyon.fr/fr/carte/campus" target="_blank">ici</a>!
		</section>
		<br>
		<!--<?php include("copryrights.php");?>-->
	</div>
	<script>
		if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
			window.location.href = '../../mobile/fr/carteINSA.php';
		}
		document.getElementById("weiButton").setAttribute("onClick",
			"window.location.href = '../../download_content/wei.pdf';");
		function test(texte) {
			if (texte === "RI") {
				document.getElementById("description").innerHTML = "<h2>Le RI</h2>L’incontournable cantine des Insaliens est sans aucun doute le RI (Restaurant INSA). Il est ouvert tous les jours à l’exception du samedi soir et ne t’inquiète pas tu pourras y déguster autre chose que de la polenta et du chou romanesco… Pour les plus healthy d’entre vous, il y a même une écoligne avec des plats végétariens.<h3>Prévert</h3> Tu veux casser la croûte mais tu es un étudiant trop busy,ne t’inquiète pas, le Prévert est là pour toi. Dans ce snack, tu peux prendre tes repas à emporter midi et soir pendant la semaine et puisqu’on est encore de grands enfants, à l’heure du goûter, il se transforme en coffee shop que tu peux acheter gâteaux, sodas, et fruits avec ta carte étudiante. Retrouves le au rez-de-chaussée du RI.";
			} else if (texte === "C" || texte === "D") {
				document.getElementById("description").innerHTML = "<h2>Bat C et D</h2>Ce sont les bâtiments des deuxièmes années. Tu auras l’occasion de les visiter (voir plus pour les plus TTT d’entre vous). Dans leur turne, les 2A ont leurs propres toilettes et même un évier différent du lavabo ! Alors sache dors-et-déjà que le C et D seront ta motivation première pour te pousser à valider et passer en 2A. Et on espère bien mon petit biz que tu prendras notre relève là-bas.";
			} else if (texte === "MDE") {
				document.getElementById("description").innerHTML = "<h2>MDE</h2>La maison des étudianrs, tu y trouveras plusieurs choses :<h3>COOP</h3>C’est notre caverne d’Ali Baba perso. Des chips à la lessive, en passant par les copies doubles et les capotes, sans oublier le fameux trace cercle, tu pourras y trouver tout l’attirail du parfait petit insalien.<h3>BDE</h3>The place pour acheter tes jetons de lessive et louer des appareils à raclette, c’est le sang quoi<h3>KFET</h3>Parce que des témoignages valent mieux qu’une simple présentation :<br>« C’est vraiment un lieu CONvivial où tu pourras rencontrer des gens de K-lité. »<br>« Tu sais quand tu arrives à la K-Fêt, mais jamais quand tu en ressortiras… »<br>« D’après ce qu’on m’a dit, j’ai bien aimé mes soirées là-bas. »<br>« C’est vraiment le meilleur endroit pour souder ton groupe de pote ! »<br>« De la Guiness à la TripleK en passant par la Chouffe, on y trouve tous notre bonheur ! »<br>«5 étoiles sur le guide du routard, bientôt classé au patrimoine mondial de l’étudiant. »<h3>Olivier/Grillon</h3>L’électrocinétique t’a fait froid dans le dos en td ? Vas donc te réchauffer le cœur avec une petite pizza de l’Olivier ou te remplir la panse avec les patates sautées du Grillon. Je te vois déjà te lécher les babines derrière ton écran et je ne t’ai même pas encore dit que ces deux resto sont ouverts tous les midis (en semaine) et que tu y accèdes avec ta carte étudiante ! Imagine un peu les festins 😉";
			} else if (texte === "BMC") {
				document.getElementById("description").innerHTML = "<h2>Bibliothèque Marie Curie</h2>Pire cauchemar et meilleure amie, je te présente ta deuxième maison (sauf pour les chanceux possesseurs de salle d’et 😉). Comme on le dit ici, 19-22 c’est BMC, et comme par hasard ça rime avec taffer… C’est pas les moments les plus drôles, mais va falloir retrousser ses manches et mettre les mains à la pâte (sans doute pour la première fois de ta vie) si tu veux valider avec sérénité (c ki ca CréniT ?) Sois prêt à y faire quelques craquages nerveux, mais tqt après c’est Kfet pour te remonter le moral !"
			} else if (texte === "FIMI") {
				document.getElementById("description").innerHTML = "<h2>FIMI</h2>Au centre des bâtiments de cours et face au A, tu peux retrouver la fameuse pelouse du FIMI. Pratique pour chiller entre deux cours quand le soleil pointe le bout de son nez, ou pour les batailles de boules de neige en hiver, cette pelouse sera ton petit bout de jardin l’année prochaine ! Et attend de voir le PC en période d’inté, même le rhino s’y ambiance…<h3>Louis Neel</h3>salles de TD de A à D, amphi Vannier et les 4 fameuses travées (avoir froid c’est pour les faibles).<h3>Pierre de Fermat</h3>Amphis, salles de conception et labo de chimie (pas d’explosion svp, celle de la doua c’était déjà assez).<h3>Jean D’alembert</h3>labo de physique, toutes nouvelles salles de TD rien que pour vous."
			} else if (texte === "A" || texte === "B") {
				document.getElementById("description").innerHTML = "<h2>Bâtiments A et B</h2>Voici ta demeure, ton chez-toi que dis-je ton palace où tu vas découvrir le bonheur de pouvoir quitter ta turne à 7h59 et de toujours être à l’heure ! Les Aladdin du bâtiment B font face aux Jasmine du bâtiment A. Pour en savoir plus sur les turnes, je renvoie à la rubrique « ton palais » où tout est bien expliqué pour répondre à tes craintes (mais tqt c’est cool la vie en communauté).<h3>Laverie</h3>Que tu aies un t-shirt et deux caleçons à laver ou plusieurs tonnes d’habits en tout genre, c’est en bas du bâtiment B que tu pourras faire tes lessives. Attention néanmoins à acheter tes jetons avant au BDE.<h3>Point A</h3>Parce que le petit dej est le plus important repas de la journée, on l’a amené à toi. Au point A, qui se trouve en bas du A (tu l’avais deviné) tu pourras prendre des forces pour affronter tes heures de TD. On y mange des fruits, yaourt, boissons chaudes et même des pains au chocolat ou chocolatines, à toi de voir ! Et je te conseille d’amener ton propre mug pour ne pas utiliser de gobelet jetable, parce que c’est bien beau de marcher pour le climat mais faut agir à un moment !"
			} else if (texte == "GB") {
				document.getElementById("description").innerHTML = "<h2>Gaston Berger</h2>Arrêt RI pour ceux qui grugent la queue (mais pas le tram, attention aux contrôleurs)."
			} else if (texte === "INSA") {
				document.getElementById("description").innerHTML = "<h2>Insa einstein</h2>Spot numero 1 pour les pro d’insta qui voudraient une petite photo avec l’insigne de l’INSA."
			} else if (texte === "CROIX") {
				document.getElementById("description").innerHTML = "<h2>Croix luizet</h2>On te conseille de pas aller plus loin, après tu passes en terre ennemie…"
			}
		}
	</script>
</body>

</html>