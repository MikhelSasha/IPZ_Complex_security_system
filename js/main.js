document.getElementById('radio-adm-reg').onchange = function() {
	document.getElementById("adm-reg").style="display: block;";
	document.getElementById("user-reg").style="display: none;";
};
document.getElementById('radio-user-reg').onchange = function() {
	document.getElementById("adm-reg").style="display: none;";
	document.getElementById("user-reg").style="display: block;";
};
