<?php

	echo '
	
		<link rel="stylesheet" href="..\css\pageStyle.css">
		<link rel="stylesheet" href="..\css\bandeau.css">
		<link rel="stylesheet" href="..\css\styleMenu.css">
		
		<script src="..\..\js\def_Pointer.js"></script>
	
		<div id = "background"></div>
		<img id = "imageBackground" src = "..\..\images\global\agrabah_background.png">
		
		<div id = "topBand">
			<a href="../../pc_en.php"><img id="logo1" src="..\..\images\global\bde_logo.png"></a>
			<a href="../../pc_en.php"><img id="logo2" src="..\..\images\global\cdp_logo.png"></a>
			<div id="countdown">
				<p id = "timerText"></p>
			</div>
			<button id="weiButton" onclick="window.open(\'../../download_content/wei.pdf\');">REGISTER FOR THE <b>WEI/VA</b> !</button>
			<div class = "separation"></div>
			<div id ="link_holder">
				<a href="https://www.youtube.com/user/INSALyonBdE"><img id="ytb" src = "..\..\images\global\youtube_icon.png"></a>
				<a href="https://www.instagram.com/bdeinsalyon/"><img id="inst" src = "..\..\images\global\instagram_icon.png"></a>
				<a href="https://www.facebook.com/groups/2340380032891518/"><img id="fb" src = "..\..\images\global\facebook_icon.png"></a>
			</div>
		</div>
		
		<content>
			<div class="lampe"><img src = "..\..\images\global\genie.png"></div>
				<ul class="menu">
					<li id="first_c" class="lienMenu"><a href="../../pc_en.php" >HOME</a></li>
					<li><a href="vie_sultant.php" class="lienMenu">Your sultan\'s life</a></li>
					<li><a href="arriv_agrabah.php" class="lienMenu">Your arrival at Agrabah</a></li>
					<li><a href="palais.php" class="lienMenu">Your palace</a></li>
					<li><a href="agrabah.php" class="lienMenu">Agrabah</a></li>
					<li><a href="carteINSA.php" class="lienMenu">Map of the campus</a></li>
					<!--<li><a href="lexik.php" class="lienMenu">Lexique</a></li>-->
					<li><a href="to_do_list.php" class="lienMenu">To Do List</a></li>
				</ul>
			<div class="lampe2"><img src = "..\..\images\global\genie.png"></div>
			<div id = "hidding_background"></div>	
		</content>
		
		<section id="quick_definition">
			<div id = "def">
					<div id="parent">
						<p id = "def_text"></p>
					</div>
				<button onmouseenter="transition()" onmouseleave="transition()" onClick="javascript:closeDef();"><img id ="close_cross" src = ""></button>
			</div>
			
		</section>
	';
 ?>
























