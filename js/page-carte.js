

$(document).ready( function() {


	console.log("START fonction v1.0.1");

	$(".element").click( function(){
		console.log($(this).id);

		$(".element").removeClass("selected");
		$(this).addClass("selected");

		loadImgTxt();
	});

	$("#previousAventure").click( function(){
		// console.log("ADD");
		var actualSeclected = $(".selected");

		//On teste si l'élément précedent à la classe element
		if(actualSeclected.prev().hasClass("element")){
			actualSeclected.removeClass("selected");
			actualSeclected.prev().addClass("selected");
			loadImgTxt();
		}

		

		
	});

	$("#nextAventure").click( function(){
		// console.log("ADD");
		var actualSeclected = $(".selected");
		if(actualSeclected.next().hasClass("element")){
			actualSeclected.removeClass("selected");
			actualSeclected.next().addClass("selected");
			loadImgTxt();
		}

		
	});

	// Charger une première fois
	loadImgTxt();
	
});


function loadImgTxt(){

	var completeId = $(".selected").attr('id');
	console.log(completeId);

	var id = completeId.replace("item","")
		console.log(id);

	// On reset
	$("#detailsInfo").css('background-color','#	')


	// Récupère l'image correspondante
	//$("#carte").css("background-image", "url(./images/carte_"+id+".jpg)");
	$("#carte").css("background-image", "url(./content/carte/carte_"+id+".svg)");

	if(id =="WEI"){
		// console.log("WEI");
		$("#detailsInfo p").html('<div id="imgWEI"></div>');
		$.get('content/summary'+id+'.txt', function(data) {
			// console.log(data);
			$("#summaryInfo").html(data);	
			$("#detailsInfo").css('background-color','#f5c644')
		});	
		// $("#imgWEI").css("background-image", "url(./content/carte_"+id+".png)");
	}
	else{

		$.get('content/summary'+id+'.txt', function(data) {
			// console.log(data);
			$("#summaryInfo").html(data);	
		});
		$.get('content/global'+id+'.txt', function(data) {
			// console.log(data);
			$("#detailsInfo p").html(data);	
		});
	}

}