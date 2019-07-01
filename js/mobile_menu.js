var statue = false;
function displayMenu() {
	var back = document.getElementById("hidingBackground");
	if(!statue) {
		statue=true;
		document.getElementById("menu").style.left = "0";
		document.getElementById("topBand").style.backgroundColor = "rgba(255,212,39,1)";
		back.style.opacity = "0.5";
		back.style.width ="100%";
					
	}else {
		statue=false;
		document.getElementById("menu").style.left = '-50%';
		document.getElementById("topBand").style.backgroundColor = "rgba(240,240,240,1)";
		back.style.opacity = '0';
		back.style.width ='0%';
	}
}
$(document).ready(function() {
	$('#hidingBackground').click(function() {
		console.log("test");
		if(statue) {
			displayMenu();
		}
	});
});