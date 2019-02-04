function validate() {
	var name=document.getElementById('username');
	if(name.value=='ishan') { alert("Good for you"); return true; }
	else { alert("Be more of Ishan"); return false; }
}