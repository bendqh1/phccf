document.querySelector("#contact-form").addEventListener("submit", function(e) {
    if(!isValid) {
        e.preventDefault(); //stop form from submitting
    } else if (isValid) {
	alert("לחץ לחזרה לדף הקודם");
	window.location.replace("http://walla.co.il");
    }
});
