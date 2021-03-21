// Select contact form:
const contact_form = document.querySelector("#contact_form");

const labelAsterisks = document.qeurySelectorAll("label");
labelAsterisks.forEach((element) => {
    if (element.textContent.indexOf("*") !== -1) {
        element.textContent.indexOf.style.color = "Red";
    }
});

/*
	// A function to call, on(the)Submit event:
	function passedProcedure() {
		alert("לחץ לחזרה לדף הקודם");
		window.location.replace("http://walla.co.il");
	}

	// On(the)Submit event call passedProcedure():
	contact_form.addEventListener("submit", passedProcedure)
*/
