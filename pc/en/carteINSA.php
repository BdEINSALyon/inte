<!DOCTYPE html>
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143625507-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            
            gtag('config', 'UA-143625507-1');
        </script>

		<title>Integration 2019 - BDE INSA Lyon</title>
		<link rel="icon" type="image/png" href="../../images/global/cdp_logo.png" />
		<meta charset = "utf-8">
		<meta name="keywords" content="insa, lyon, inté">
		<meta name="description" content="Site web pour l'intégration 2019 - Insa de lyon">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script src="..\..\js\timer.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/carte.css">
	</head>
	<body>	 
	
		<?php include("page_template.php");?>
	
		<div id = "pageContent">
			<section>
				Work still in progress !
			</section>
			<br>
			<!--<?php include("copryrights.php");?>-->		
		</div>
		<script>
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				window.location.href = '../../mobile/en/carteINSA.php';
			}
			document.getElementById("weiButton").setAttribute( "onClick", "window.location.href = '../../download_content/wei.pdf';" );
		</script>		
	</body>
</html>
























