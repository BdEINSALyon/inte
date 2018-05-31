

$(document).ready( function() {




	console.log("START fonction v1.0.1");

	$(".element").click( function(){
		//console.log($(this).id);

		$(".element").removeClass("selected");
		$(this).addClass("selected");

		loadImgTxt();
	});


	$("#motParent_Avion").hover( function(){

		console.log("Hover");
		$("#motParent_Avion").attr('src','content/img/motParent_Fin_blue.svg');

		$("#motParent_Avion").css('transition','1.5s');
		$("#motParent_Avion").css('margin-left','10em');

		
	}, function(){

		$("#motParent_Avion").attr('src','content/img/motParent_Fin_black.svg');
		$("#motParent_Avion").css('transition','1.5s');
		$("#motParent_Avion").css('margin-left','0em');

	});


	$("#motParent_Avion").click( function(){
		console.log("CLICK");

		window.location.replace("carte.php");
		
	});

	$("#fermerPUB").click( function(){

		$("#INSA_McDo").fadeOut();
		$("#fermerPUB").fadeOut();
		
	});

	


	
});

