let contactForm = document.querySelector("#contact_form")
contactForm.addEventListener("submit", function(event){
	event.preventDefault()
	var xhr = new XMLHttpRequest();
	xhr.open(contactForm.method, contactForm.action, true);
	xhr.setRequestHeader('Accept', 'application/json; charset=utf-8');
	xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
	xhr.send();
});
