var text1 = document.getElementById("text1");
			var text2 = document.getElementById("text2");
			var text3 = document.getElementById("text3");
			var selected1 = false;
			var selected2 = false;
			var selected3 = false;
			var selecters = document.getElementsByClassName("select");
			function selection(element) {
				switch(element) {
					case 1:
						if(!selected1) {
							selected1=true;
							selecters[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
							selecters[0].style.boxShadow = '2px 2px 5px 5px rgba(0,0,0,0.2)';
							selecters[1].style.boxShadow = '0';
							selecters[2].style.boxShadow = '0';
							
							selecters[0].style.backgroundColor = 'rgba(255,212,39,1)';
							selecters[1].style.backgroundColor = 'white';
							selecters[2].style.backgroundColor = 'white';
							
							text1.style.display = 'block';
							text2.style.display = 'none';
							text3.style.display = 'none';
							
							selecters[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
						}else{
							selected1=false;
							reset();
						}
					break;
					case 2:
						if(!selected2) {
							selected2=true;
							selecters[0].style.boxShadow = '0';
							selecters[1].style.boxShadow = '2px 2px 5px 5px rgba(0,0,0,0.2)';
							selecters[2].style.boxShadow = '0';
							
							selecters[0].style.backgroundColor = 'white';
							selecters[1].style.backgroundColor = 'rgba(255,212,39,1)';
							selecters[2].style.backgroundColor = 'white';
							
							text1.style.display = 'none';
							text2.style.display = 'block';
							text3.style.display = 'none';
							
							selecters[1].scrollIntoView({ behavior: 'smooth', block: 'center' });
						}else{
							selected2=false;
							reset();
						}
					break;
					case 3:
						if(!selected3) {
							selected3=true;
							selecters[0].style.boxShadow = '0';
							selecters[1].style.boxShadow = '0';
							selecters[2].style.boxShadow = '2px 2px 5px 5px rgba(0,0,0,0.2)';	
							
							selecters[0].style.backgroundColor = 'white';
							selecters[1].style.backgroundColor = 'white';
							selecters[2].style.backgroundColor = 'rgba(255,212,39,1)';

							text1.style.display = 'none';
							text2.style.display = 'none';
							text3.style.display = 'block';
							selecters[2].scrollIntoView({ behavior: 'smooth', block: 'center' });
						}else {
							selected3=false;
							reset();
						}
					break;
				}
			}
			function reset() {
				selecters[0].style.boxShadow = '0';
				selecters[1].style.boxShadow = '0';
				selecters[2].style.boxShadow = '0';
							
				selecters[0].style.backgroundColor = 'white';
				selecters[1].style.backgroundColor = 'white';
				selecters[2].style.backgroundColor = 'white';
							
				text1.style.display = 'none';
				text2.style.display = 'none';
				text3.style.display = 'none';
			}