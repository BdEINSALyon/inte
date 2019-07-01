<!DOCTYPE html>
<html>
	<head>
		<title>Inté 2019 - BDE INSA Lyon</title>
		<link rel="icon" type="image/png" href="images/global/cdp_logo.png" />
		
		<meta charset = "utf-8">
		<meta name="keywords" content="insa, lyon, inté">
		<meta name="description" content="Site web pour l'intégration 2019 - Insa de lyon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script src="js\language_select.js"></script>
		<script src="js\timer.js"></script>
		<script src="js\mobile_menu.js"></script>

		<link rel="stylesheet" href="mobile\css\mobile_bandeau.css">
		<link rel="stylesheet" href="mobile\css\mobile_index.css">
		
	</head>
	<body>	 
		
			<div id = "topBand">
			<div id = "quick_menu" onclick="javascript:displayMenu();"><img id="menu_icon" src="images\global\genie.png"></div>
			<div class = "separation">
				<a href="mobile.php"><img id="logo1" src="images\global\bde_logo.png"></a>
				<a href="https://www.youtube.com/user/INSALyonBdE"><img id="ytb" src="images\global\youtube_icon.png"></a>
				<a href="https://www.instagram.com/bdeinsalyon/"><img id="inst" src="images\global\instagram_icon.png"></a>
				<a href="https://www.facebook.com/groups/2340380032891518/"><img id="fb" src="images\global\facebook_icon.png"></a>
			</div>			
		</div>
		<div id="hidingBackground"></div>
		<div id = "menu">
			<ul id="test">
				<a href="mobile.php"><li class="option"><section>ACCUEIL</section></li></a>
				<a href="mobile\fr\vie_sultant.php"><li class="option"><section>Ta vie de sultan</section></li></a>
				<a href="mobile\fr\arriv_agrabah.php"><li class="option"><section>Ton arrivée à Agrabah</section></li></a>
				<a href="mobile\fr\palais.php"><li class="option"><section>Ton Palais</section></li></a>
				<a href="mobile\fr\agrabah.php"><li class="option"><section>Agrabah</section></li></a>
				<a href="mobile\fr\carteINSA.php"><li class="option"><section>Carte de l'INSA</section></li></a>
				<a href="mobile\fr\lexik.php"><li class="option"><section>Lexique</section></li></a>
				<a href="mobile\fr\to_do_list.php"><li class="option"><section>To Do List</section></li></a>
			</ul>
		</div>
		<div id="sub_menu">
			<div id="topTitle">BIENVENUE À INSAGRABAH !</div>	
		</div>
		<div id="pageContent">
			<div id = "language_selecter">
				<a href="" onClick="setFrench()"><img id="french_flag" src="images\main\french_flag.png"></a>
				<a href="mobile_en.php" onClick="setEnglish()"><img id="english_flag" src="images\main\english_flag.png"></a>
			</div>
			<section id="staticMenu">
					<a href="mobile\fr\vie_sultant.php"><div class = "vie_sultant"><img class="buttonIcon" src="images\main\the_sultan.png"><p>TA VIE DE SULTAN</p></div></a>
					<a href="mobile\fr\arriv_agrabah.php"><div class = "arriv_agrabah"><img class="buttonIcon" src="images\main\agrabah_icon.png"><p>TON ARRIVEE A AGRABAH<p></div></a>
					<a href="mobile\fr\palais.php"><div class = "ton_palais"><img class="buttonIcon" src="images\main\palace_icon.png"><p>TON PALAIS</p></div></a>
					<a href="mobile\fr\carteINSA.php"><div class = "carte"><img class="buttonIcon" src="images\main\carte_icon.png"><p>CARTE DE LA CITE</p></div></a>
					<a href="mobile\fr\lexik.php"><div class = "lexique"><img class="buttonIcon" src="images\main\perroquet_icon.png"><p>LE LEXIQUE</p></div></a>
					<a href="mobile\fr\agrabah.php"><div class = "to_do"><img class="buttonIcon" src="images\main\genie_icon.png"><p>AGRABAH</p></div></a>
			</section>
		</div>
		<div id ="wei_section">
			<p id = "timerText"></p>
			<button id="weiButton" onclick="window.location.href = 'download_content/wei.pdf';">CHOPE TA PLACE POUR LE <b>WEI</b> !</button>
		</div>
		<div id = "illustration">
			<img id = "al" src="images\main\aladdin1.jpg">
		</div>
		<div id = "first_paragraph">
			<h1>Pour bien débuter...</h1>
			<button onclick="window.location.href = 'mobile/fr/to_do_list.php';" class="to_do_list">CHECK LA TO DO LIST !</button>
			<br>
			<h2>Le mot aux parents</h2>
			<section>
				Bonjour Bonjour,
				<br><br>
				Madame, Monsieur,
				<br><br>
				&nbsp &nbsp Comme vous le savez, votre enfant s’apprête à rejoindre l’INSA Lyon et donc quitter le cocon familial. Après tant d’années, il va devoir partir loin de chez lui, découvrir une nouvelle ville, une nouvelle vie. Ses habitudes vont être bouleversées, il va être amené à s’adapter à un nouveau rythme de vie. Mais ne vous inquiétez pas, nous sommes là pour le guider dans ce tournant décisif. Nous, le comité de parrainage et tous les étudiants de l’INSA, serons présents pour l’accompagner à chacun de ses pas. Toutes les questions que vous vous posez trouveront leur réponse sur ce site.
				<br>
				&nbsp &nbsp Nous avons reçu des formations spécialisées afin que cette semaine d’intégration se déroule dans les meilleures des conditions, et assurer sa sécurité lors de son intégration.
			</section>
			<br>
			<section>
				&nbsp &nbsp A son arrivée, il aura une famille (qui ne vous remplacera pas ne vous inquiétez pas), un groupe d’Asterix et un merveilleux parrain ou une merveilleuse marraine qui le guideront vers la réussite et l’accomplissement de leur vie étudiante tout au long de l’année.
				<br>
				&nbsp &nbsp Nous serons surtout là pendant l’intégration qui a pour but de permettre au mieux à votre enfant de trouver ses marques et de se sentir entouré dès son arrivée. Des activités, des repas de famille, des veillées seront organisés pour permettre à nos futurs bizuths (expression affective représentant les premières années) de rencontrer les autres Aladdins de l’INSA et leur nouvelle école. 
				<br>
				&nbsp &nbsp Pour conclure, chers parents, vous pouvez envoyer par la poste votre enfant en toute tranquillité. Malgré le saut dans l’inconnu qu'il s’apprête à réaliser, nous serons là pour l’assister et tout faire pour qu’il se sente bien dans notre incroyable école.
				<br>
			</section>
			<br>
			<h2>Le mot du resp !</h2>
			<section>
				&nbsp &nbsp Salut salut les kheys, tu t’apprêtes à lire le site de l’intégration, il est là pour t’expliquer à peu près tout sur ta vie à l’INSA et sur le déroulement de l’intégration alors pour pas que tu sois perdu en arrivant sur le campus, n’hésites pas à tout lire 😉.<br>
				&nbsp &nbsp Néanmoins, si tu as encore des questions malgré la qualité incroyable de ce site, les CDP sont là pour y répondre sur la page Facebook INSA Lyon – Admis en 1ère année 2019/2020 – 63ème promo. Même si ce n’est pas le cas, c’est important que tu le rejoignes puisqu’il te permettra de rencontrer les autres premières années et de retrouver ta carte étudiante ou toutes sortes d’objets perdus durant l’année (tu comprendras bien assez tôt).
			</section>
			<br>
			<section>
				N’oublie pas de remplir le questionnaire et de l’envoyer avant la date limite pour qu’on puisse t’attribuer une marraine/un parrain ainsi que de t’inscrire au WEI, les places sont limitées et tu regretterais de pas y aller.
			</section>
			<br>
			<div id="button_holder">
				<button onclick="window.location.href = 'download_content/wei.pdf';" class="quick_button">LE WEI</button><button onclick="window.location.href = 'download_content/QUESTIONNAIRE_INTE.pdf';" class="quick_button">LE QUESTIONNAIRE</button><button onclick="window.location.href = 'https://www.facebook.com/groups/2340380032891518/';" class="quick_button">LA PAGE FACEBOOK</button>
			</div>
			<br>
			<section>
				- Julien, Grégoire et surtout Damien (il a travaillé comme un malade pendant les cours) pour le merveilleux site qu’ils nous ont codé.
				<br>
				- Ariane, Chloé, Lucas, Marine, Martin, Timothée pour la rédaction de tous les textes du site.
				<br>
				- Romain et moi-même pour la réalisation du questionnaire.
				<br>
				- Saber pour sa présence.
				<br>
				- (Tu peux retrouver leur dédi perso sur la page dédi.)
				<br>
				- Mathilde, Roxane, Célia et Alexandra qui ne font pas parties de la team mais qui ont écrit le mot aux parents (si y’a un problème avec, vous connaissez les coupables).	
			</section>
			<br>
			<section>
				&nbsp &nbsp J’en profite pour faire une petite dédi à la Doua gang, aux astronautes, au 95 et à mon futur bizuth et ma future bizuthe, dormez bien avant d’arriver, vous en aurez besoin (j’espère vous êtes chauds).

				En tout cas, je t’assure que t’as fait le bon choix en rejoignant l’INSA parce que tu t’apprête à vivre les meilleures années de ta vie et ça commencera dès la première semaine avec l’inté qu’on t’a préparé.
				<br><br>
				Alors repose toi bien parce que ton arrivée va être mouvementée.
				<br>
				Sache qu’on est impatient de te rencontrer à l’inté et on espère que c’est aussi le cas pour toi.
				<br>
				On se retrouve en septembre !
				<br><br>
				Tcho bye cimer l’équipe
				<br><br>
				Louis, resp poly charismatique 2019.
			</section>
			<br><br>
			<h2>Le mot aux parents</h2>
			<section>
				Bonjour Bonjour,
				<br><br>
				Madame, Monsieur,
				<br><br>
				&nbsp &nbsp Comme vous le savez, votre enfant s’apprête à rejoindre l’INSA Lyon et donc quitter le cocon familial. Après tant d’années, il va devoir partir loin de chez lui, découvrir une nouvelle ville, une nouvelle vie. Ses habitudes vont être bouleversées, il va être amené à s’adapter à un nouveau rythme de vie. Mais ne vous inquiétez pas, nous sommes là pour le guider dans ce tournant décisif. Nous, le comité de parrainage et tous les étudiants de l’INSA, serons présents pour l’accompagner à chacun de ses pas. Toutes les questions que vous vous posez trouveront leur réponse sur ce site.
				<br>
				&nbsp &nbsp Nous avons reçu des formations spécialisées afin que cette semaine d’intégration se déroule dans les meilleures des conditions, et assurer sa sécurité lors de son intégration.
			</section>
			<br>
			<section>
				&nbsp &nbsp A son arrivée, il aura une famille (qui ne vous remplacera pas ne vous inquiétez pas), un groupe d’Asterix et un merveilleux parrain ou une merveilleuse marraine qui le guideront vers la réussite et l’accomplissement de leur vie étudiante tout au long de l’année.
				<br>
				&nbsp &nbsp Nous serons surtout là pendant l’intégration qui a pour but de permettre au mieux à votre enfant de trouver ses marques et de se sentir entouré dès son arrivée. Des activités, des repas de famille, des veillées seront organisés pour permettre à nos futurs bizuths (expression affective représentant les premières années) de rencontrer les autres Aladdins de l’INSA et leur nouvelle école. 
				<br>
				&nbsp &nbsp Pour conclure, chers parents, vous pouvez envoyer par la poste votre enfant en toute tranquillité. Malgré le saut dans l’inconnu qu'il s’apprête à réaliser, nous serons là pour l’assister et tout faire pour qu’il se sente bien dans notre incroyable école.
				<br>
			</section>
			<br><br>
		</div>
	</body>
</html>