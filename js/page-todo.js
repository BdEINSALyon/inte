

$(document).ready( function() {



	console.log("START fonction v1.0.3");

	$("#downloadFileWei").click( function(){
		
		//console.log("ADD");

		window.open("FormulaireAdhesionVAWEI.pdf");
		
	});

	$("#downloadFile").click( function(){
		
		//console.log("ADD");

		window.open("Questionnaire_INSA.pdf");
		
	});
	

	$("#linkFB").click( function(){
		
		//console.log("ADD");

		window.open("https://www.facebook.com/groups/200773947209831/");
		
	});

	$("#fermerPUBTodo").click( function(){

		$(".pub").fadeOut();
		
		
	});

	$("#goWEI").click( function(){

		window.location.replace("wei.php");
		
		
	});

	
});

