function selectText (element) {

				var scolarite_button = document.getElementById("scolarite");
				var evenements_button = document.getElementById("evenements");
				var assos_button = document.getElementById("assos");
				var text1 = document.getElementById("text1");
				var text2 = document.getElementById("text2");
				var text3 = document.getElementById("text3");
				
				switch(element) {
					case 'scolarite':
						scolarite_button.style.backgroundColor = "rgba(255,212,39,1)";
						scolarite_button.style.boxShadow = "-2px -2px 10px rgba(0,0,0,0.4), 2px 2px 10px rgba(0,0,0,0.4)";
						evenements_button.style.backgroundColor = "white";
						evenements_button.style.boxShadow = "0px 0px 0px black";
						assos_button.style.backgroundColor = "white";
						assos_button.style.boxShadow = "0px 0px 0px black";
						
						scolarite_button.style.zIndex = "1";
						evenements.style.zIndex = "0";
						assos.style.zIndex = "0";
						
						text1.style.display = "block";
						text2.style.display = "none";
						text3.style.display = "none";
						
						/*document.getElementById("pageContent").style.height = "5200px";
						document.getElementById("content").style.height = "4900px";*/
						
					break;
					case 'evenements':
						scolarite_button.style.backgroundColor = "white";
						scolarite_button.style.boxShadow = "0px 0px 0px black";
						evenements_button.style.backgroundColor = "rgba(255,212,39,1)";
						evenements_button.style.boxShadow = "-2px -2px 10px rgba(0,0,0,0.4), 2px 2px 10px rgba(0,0,0,0.4)";
						assos_button.style.backgroundColor = "white";
						assos_button.style.boxShadow = "0px 0px 0px black";
						
						scolarite_button.style.zIndex = "0";
						evenements.style.zIndex = "1";
						assos.style.zIndex = "0";
						
						
						text1.style.display = "none";
						text2.style.display = "block";
						text3.style.display = "none";
						
						/*document.getElementById("pageContent").style.height = "3450px";
						document.getElementById("content").style.height = "3150px";*/
						
					break;
					case 'assos' :
						scolarite_button.style.backgroundColor = "white";
						scolarite_button.style.boxShadow = "0px 0px 0px black";
						evenements_button.style.backgroundColor = "white";
						evenements_button.style.boxShadow = "0px 0px 0px black";
						assos_button.style.backgroundColor = "rgba(255,212,39,1)";
						assos_button.style.boxShadow = "-2px -2px 10px rgba(0,0,0,0.4), 2px 2px 10px rgba(0,0,0,0.4)";
						
						scolarite_button.style.zIndex = "0";
						evenements.style.zIndex = "0";
						assos.style.zIndex = "1";
						
						text1.style.display = "none";
						text2.style.display = "none";
						text3.style.display = "block";
						
						/*document.getElementById("content").style.height = "1900px";
						document.getElementById("pageContent").style.height = "2200px";*/
						
					break;
				}
			}
			
			window.onload = function() {
				selectText('assos');
			};
			