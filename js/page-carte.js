

$(document).ready( function() {




	console.log("START fonction v1.0.1");

	$(".element").click( function(){
		//console.log($(this).id);

		$(".element").removeClass("selected");
		$(this).addClass("selected");

		loadImgTxt();
	});

	// Pour aller à l'aventure suivante
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

		//console.log(actualSeclected.next().attr('id') );

		if(actualSeclected.next().hasClass("element") && actualSeclected.next().attr('id') != "itemCapelle"){
			actualSeclected.removeClass("selected");
			actualSeclected.next().addClass("selected");
			loadImgTxt();
		}

		
	});


	$(".areaZone").hover( function(event){

		var completeId = $(this).attr('id');
		var idSurvole = completeId.replace("area","");
		//console.log(idSurvole);

		var completeId = $(".selected").attr('id');
		var idActif = completeId.replace("item","");

		// console.log(idSurvole);
		// console.log(idActif);



    	$("#description").css("display","block");
    



		if( idSurvole != idActif ){
			//$("#item"+idActif).addClass("onWait");
			//$("#item"+idSurvole).addClass("onSurvole");

			//console.log($("#item"+idSurvole+"").html());
			
			$("#description").html( $("#item"+idSurvole+"").html() );
			

		}
		else{

			var myText = $("#item"+idSurvole+"").clone()    //clone the element
						    .children() //select all the children
						    .remove()   //remove all the children
						    .end()  //again go back to selected element
						    .text();
			$("#description").text( myText );
		}



		

		//$("#itemTeam").css("font-weight","bold");
		//$("#carte").css("transition","1s");
		if(idSurvole != 'Capelle'){
			$("#carte").attr("src","content/carte/carte_"+idSurvole+".png");
		}
		
	}, function(){


		$("#description").css("display","block");

		var completeId = $(this).attr('id');
		var idSurvole = completeId.replace("area","");
		//console.log(idSurvole);

		var completeId = $(".selected").attr('id');
		var idActif = completeId.replace("item","");

		if( idSurvole != idActif ){
			//$("#item"+idActif).removeClass("onWait");
			//$("#item"+idSurvole).removeClass("onSurvole");
		}

		// On supprime le bloc de hover
		$("#description").css("display","none");

		//$("#itemTeam").css("font-weight","normal");

		if(idSurvole != 'Capelle'){
			$("#carte").attr("src","content/carte/carte_"+idActif+".png");
		}
		
	});



	$(".areaZone").mousemove( function(event){

		// var x = event.clientX;
 		 // var y = event.clientY;

    	// var x = (event.pageX - $('#carte').offset().left) + $(window).scrollLeft();
    	var y = (event.pageY +20);
    	var x = (event.pageX +15) ;
		//var y = (event.pageY - $('#carte').offset().top) + $(window).scrollTop();

    	$("#description").css("top",y+"px");
    	$("#description").css("left",x+"px");


	});


	$(".areaZone").click( function(){
		console.log("CLICK");

		var completeId = $(this).attr('id');
		var idClicked = completeId.replace("area","");
		console.log(idClicked);

		$(".selected").removeClass("selected");
		$("#item"+idClicked).addClass("selected");

		loadImgTxt();
		$('html, body').animate({
	        scrollTop: $("#detailsInfo").offset().top-50
	    }, 2000);
		
	});



	if (jQuery.ui) {
	  // UI loaded
	  console.log("loaded");
	}
	


	// Charger une première fois
	loadImgTxt();
	//gtip();
	
});




function loadImgTxt(){

	var completeId = $(".selected").attr('id');
	//console.log(completeId);
	var id = completeId.replace("item","")
	//console.log(id);


	$(".onWait").removeClass("onWait");
	$(".onSurvole").removeClass("onSurvole");
	$(".btnDecouvert").remove(); // On supprime tous les buttons btnDecouverte
	$(".selected").append('<div class="btnDecouvert"><button class="decouvrir">Découvrir</button></div>'); // On ajouter un btn là où on a cliqué 
	loadBtnClick();

	// On reset
	$("#detailsInfo").css('background-color','#ffffff')


	// Récupère l'image correspondante
	//$("#carte").css("background-image", "url(./images/carte_"+id+".jpg)");
	//$("#carte").css("background-image", "url(./content/carte/carte_"+id+".png)");
	$("#carte").attr("src","content/carte/carte_"+id+".png");



	if(id=="Matiere"){
		
		$("#detailsInfo .titre").html("Les Matières à l'INSA");
	}
	else if(id=="Team"){
		
		$("#detailsInfo .titre").html("Découverte de ta tribu");
	}
	else if(id=="Event"){
		
		$("#detailsInfo .titre").html("Les incontournamix de l'année");
	}
	else if(id=="KFET"){
		
		$("#detailsInfo .titre").html("Le campus et la K-Fêt");
	}
	else if(id=="Deguisement"){
		
		$("#detailsInfo .titre").html("Ton déguisement pour l'inté");
	}
	else if(id=="Scolarite"){
		
		$("#detailsInfo .titre").html("Ta scolarité");
	}
	else if(id=="BDE"){
		
		$("#detailsInfo .titre").html("Le Bureau Des Elèves - BDE");
	}
	else if(id=="Inte"){
		
		$("#detailsInfo .titre").html("Organisation de l'inté");
	}
	else if(id=="Turne"){
		
		$("#detailsInfo .titre").html("Ta chaumière de l'année prochaine");
	}
	else if(id=="Restaurant"){
		
		$("#detailsInfo .titre").html("La Restauration à l'Insa");
	}
	else if(id=="Filiere"){
		
		$("#detailsInfo .titre").html("Les filières à l'INSA");
	}
	else if(id=="Lexique"){
		
		$("#detailsInfo .titre").html("Le lexique pour mieux comprendre ce site");
	}
	else if(id=="Associations"){
		
		$("#detailsInfo .titre").html("Les assos insaliennes");
	}
	else if(id=="Lyon"){
		
		$("#detailsInfo .titre").html("Lyon, la plus belle des villes");
	}
	else if(id=="Recette"){
		
		$("#detailsInfo .titre").html("Code d'honneur du bizuth");
	}
	else if(id=="Resp"){
		
		$("#detailsInfo .titre").html("Le mot de la resp");
	}
	else{
		$("#detailsInfo .titre").html("[A DEFINIR]");
	}


	if(id =="WEI"){
		// console.log("WEI");
		$("#detailsInfo p").html('<div id="imgWEI"></div>');
		$.get('content/summary'+id+'.txt', function(data) {
			// console.log(data);
			$("#summaryInfo").html(data);	
			$("#detailsInfo").css('background-color','#f5c644')
			$("#detailsInfo .titre").addClass("hidden");
		});	
		// $("#imgWEI").css("background-image", "url(./content/carte_"+id+".png)");
	}
	else{
		$("#detailsInfo .titre").removeClass("hidden");

		$.get('content/summary'+id+'.txt', function(data) {
			// console.log(data);
			$("#summaryInfo").html(data);



		});
		$.get('content/global'+id+'.txt', function(data) {
			// console.log(data);
			$("#detailsInfo p").html(data);	

			if(id == "Lexique"){
				console.log("TEST");
				$("#accordion").accordion({
			      heightStyle: "content",
			      collapsible: true
			    });
			}

			loadBtnClick();
		});


	}

}


jQuery( document ).ready(function( $ ) {
   	// $('.areaZone').tooltip(

   	// );


});


function loadBtnClick(){

	$(".decouvrir").click( function(){
		
		$('html, body').animate({
	        scrollTop: $("#detailsInfo").offset().top-50
	    }, 100);
	});


	$("#linkInsa").click( function(){
		// console.log("ADD");
		window.open("https://www.insashop.fr/");
		
	});

}