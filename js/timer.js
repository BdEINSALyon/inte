var inte = new Date("September 13, 2019").getTime();

function updateTimer() {
	today = new Date().getTime();
	interval = inte-today;
	if(interval>0) {
		var days = Math.floor(interval/(1000*60*60*24));
		var hours = Math.floor((interval%(1000*60*60*24))/(1000*60*60));
		var minutes = Math.floor((interval%(1000*60*60))/(1000*60));
		var seconds = Math.floor(interval%(1000*60)/1000);
		document.getElementById("timerText").innerHTML = "PLUS QUE " + days + " JOURS " + hours + " HEURES " + minutes + " MINUTES " + seconds + " SECONDES AVANT L'INTEGRATION !";
		} else {
		document.getElementById("timerText").innerHTML = "PROFITE BIEN DE TON INTEGRATION !!";
		}
	};
var timer = setInterval(updateTimer,1000);
updateTimer();