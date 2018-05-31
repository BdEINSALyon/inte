

$(document).ready( function() {



	console.log("START fonction v1.0.2");

	$("#downloadFile").click( function(){
		
		//console.log("ADD");

		window.open("download_questionnaire.php");
		
	});

	$("#fermerPUBTodo").click( function(){

		$(".pub").fadeOut();
		
		
	});

	$("#goWEI").click( function(){

		window.location.replace("wei.php");
		
		
	});

	
});

