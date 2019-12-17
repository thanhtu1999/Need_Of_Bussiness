function myFunction() {
	var x = document.getElementById("Menu")
	if (x.className === "Menu_top") {
		x.className += " responsive";
	} else {
		x.className = "Menu_top";
	}
}