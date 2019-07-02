<!DOCTYPE html>
<html>
	<head>
		<title>Integration 2019 - BDE INSA Lyon</title>
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
				<a href="mobile.php"><li class="option"><section>HOME</section></li></a>
				<a href="mobile\en\vie_sultant.php"><li class="option"><section>YOUR SULTAN'S LIFE</section></li></a>
				<a href="mobile\en\arriv_agrabah.php"><li class="option"><section>YOUR ARRIVAL AT AGRABAH</section></li></a>
				<a href="mobile\en\palais.php"><li class="option"><section>YOUR PALACE</section></li></a>
				<a href="mobile\en\agrabah.php"><li class="option"><section>AGRABAH</section></li></a>
				<a href="mobile\en\carteINSA.php"><li class="option"><section>MAP OF THE CAMPUS</section></li></a>
				<!--<a href="mobile\en\lexik.php"><li class="option"><section>Lexique</section></li></a>-->
				<a href="mobile\en\to_do_list.php"><li class="option"><section>TO DO LIST</section></li></a>
			</ul>
		</div>
		<div id="sub_menu">
			<div id="topTitle">WELCOME TO AGRABAH</div>	
		</div>
		<div id="pageContent">
			<div id = "language_selecter">
				<a href="#" onClick="setFrench()"><img id="french_flag" src="images\main\french_flag.png"></a>
				<a href="mobile.php" onClick="setEnglish()"><img id="english_flag" src="images\main\english_flag.png"></a>
			</div>
			<section id="staticMenu">
					<a href="mobile\en\vie_sultant.php"><div class = "vie_sultant"><img class="buttonIcon" src="images\main\the_sultan.png"><p>YOUR SULTAN'S LIFE</p></div></a>
					<a href="mobile\en\arriv_agrabah.php"><div class = "arriv_agrabah"><img class="buttonIcon" src="images\main\agrabah_icon.png"><p>YOUR ARRIVAL AT AGRABAH<p></div></a>
					<a href="mobile\en\palais.php"><div class = "ton_palais"><img class="buttonIcon" src="images\main\palace_icon.png"><p>YOUR PALACE</p></div></a>
					<a href="mobile\en\carteINSA.php"><div class = "carte"><img class="buttonIcon" src="images\main\carte_icon.png"><p>MAP OF THE CAMPUS</p></div></a>
					<!--<a href="mobile\en\lexik.php"><div class = "lexique"><img class="buttonIcon" src="images\main\perroquet_icon.png"><p>LE LEXIQUE</p></div></a>-->
					<a href="mobile\en\agrabah.php"><div class = "to_do"><img class="buttonIcon" src="images\main\genie_icon.png"><p>AGRABAH</p></div></a>
			</section>
		</div>
		<div id ="wei_section">
			<p id = "timerText"></p>
			<button id="weiButton" onclick="window.location.href = 'download_content/wei.pdf';">CHOPE TA PLACE POUR LE <b>WEI</b> et la <b>VA</b> !</button>
		</div>
		<div id = "illustration">
			<img id = "al" src="images\main\aladdin1.jpg">
		</div>
		<div id = "first_paragraph">
			<h1>To get started...</h1>
			<button onclick="window.location.href = 'mobile/fr/to_do_list.php';" class="to_do_list">CHECK LA TO DO LIST !</button>
			<br>
			<h2>NOTE FOR THE PARENTS</h2>
			<section>
				&nbsp &nbsp As you know, your child is about to join the INSA of Lyon and then leave the family house. He will have to experience a new life in a new city. It will for sure impact his habits, and he'll have to get used to a new way of life. But no worries, we are here to get his back. We are current INSA students and we're ready to help him the best we can. You may find some answers to many questions on this website.<br>
				<br>
				&nbsp &nbsp We received custom formations to make sure the integration week will go well, and make sure new students will be safe here.
			</section>
			<br>
			<section>
				&nbsp &nbsp When he arrives, he'll join a family, just a group of Asterixs and a wonderful big brother/sister whom will lead him to success in class all during the year.
				<br>
				&nbsp &nbsp Activities, family dinners, parties... will be organised to make new students meet themselves and discover their new school!
				<br>
				&nbsp &nbsp As a conclusion, we planned everything to make sure your kid live the best integration ever.
				<br>
			</section>
			<br>
			<h2>Message from the resp</h2>
			<section>
				&nbsp &nbsp Hey hey fellas, you're about to navigate through your integration website, it aims to explain you almost everything about dayly life at INSA and what's on earth is going to happen during the integration ! Make sure you read it all.<br>
				&nbsp &nbsp However, you may still have some questions after reading it, feel free to ask those on the facebook group "Facebook INSA Lyon – Admis en 1ère année 2019/2020 – 63ème promo" (current INSA students will answer you with big pleasure!). Note: even if you don't have any question you'd better join it to meet people, moreover that group might be useful to you during the year!
			</section>
			<br>
			<section>
				Don't forget to answer the survey (so that we can find you a great big brother/sister) and to register for the integration week-end (WEI) and community life (VA).
			</section>
			<br>
			<div id="button_holder">
				<button onclick="window.location.href = 'download_content/wei.pdf';" class="quick_button">THE WEI and VA</button><button onclick="window.location.href = 'download_content/QUESTIONNAIRE_INTE.pdf';" class="quick_button">THE SURVEY</button><button onclick="window.location.href = 'https://www.facebook.com/groups/2340380032891518/';" class="quick_button">FACEBOOK GROUP</button>
			</div>
			<br>
			<section>
				As a conclusion, you made the good choice joining INSA, I promise. You're about to live the best five years of you're entire life and it begins with the integration week!
				<br><br>
				Then have some rest, trust me you'll need a lot of stamina!
				<br>
				We can't wait to meet you, hope you feel the same!
				<br>
				See you on september!
				<br><br>
				Kiss
				<br><br>
				Louis, charismatic wbesite's responsible.
			</section>
			<br><br>
		</div>
		<script>
			window.onload = function() {
				setEnglish();
			};
		</script>
	</body>
</html>