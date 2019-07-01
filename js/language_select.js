function setEnglish() {
	var fr = document.getElementById("french_flag");
	var en = document.getElementById("english_flag");
				
	fr.style.opacity="0.5";
	fr.style.boxShadow="-2px -2px 0px 0px rgba(0,0,0,0), 2px 2px 0px 0px rgba(0,0,0,0)";
					
	en.style.opacity="1";
	en.style.boxShadow="-2px -2px 5px 5px rgba(0,0,0,0.2), 2px 2px 5px 5px rgba(0,0,0,0.2)";
}
				
function setFrench() {
	var fr = document.getElementById("french_flag");
	var en = document.getElementById("english_flag");
				
	en.style.opacity='0.5';
	en.style.boxShadow='-2px -2px 0px 0px rgba(0,0,0,0), 2px 2px 0px 0px rgba(0,0,0,0)';
					
	fr.style.opacity='1';
	fr.style.boxShadow='-2px -2px 5px 5px rgba(0,0,0,0.2), 2px 2px 5px 5px rgba(0,0,0,0.2)';
}