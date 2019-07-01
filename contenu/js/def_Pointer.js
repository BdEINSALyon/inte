var def_Area;
var closing_arrow;

function definition(element) {
	def_Area.style.visibility = "visible";
	closing_arrow.style.visibility="visible";
	$.getElement(element);
}

function definition2(element) {
	def_Area.style.visibility = "visible";
	closing_arrow.style.visibility="visible";
	$.getElement2(element);
}
			
function closeDef() {
	def_Area.style.visibility = "hidden";
	closing_arrow.style.visibility="hidden";
}
			
$( document ).ready(function() {
	def_Area = document.getElementById("quick_definition");
	closing_arrow = document.getElementById("close_cross");
	closing_arrow.style.visibility="hidden";
	closing_arrow.setAttribute("src","../../images/global/close_cross.png");
	def_Area.style.visibility = "hidden";
});
$.getElement = function (element) {
	$('#def_text').load('lexik.php #'+element+'');
};
$.getElement2 = function (element) {
	$('#def_text').load('pc/fr/lexik.php #'+element+'');
};
			
function transition() {
	if(closing_arrow.src.match("close_cross_white.png")) {
		closing_arrow.setAttribute("src","../../images/global/close_cross.png");
	}else {
		closing_arrow.setAttribute("src","../../images/global/close_cross_white.png");
	}
}