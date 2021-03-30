let contactForm = document.querySelector("#contact_form")
contactForm.addEventListener("submit", function(event){
	event.preventDefault()
	var xhr = new XMLHttpRequest();
	xhr.open(contactForm.method, contactForm.action, true);
	xhr.setRequestHeader('Accept', 'application/json; charset=utf-8');
	xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
	xhr.send();
});

/*

const success = document.createElement('div');
success.setAttribute("id", "success");
success.classList.add("general_structure", "success");
success.innerHTML = "תודה על ההתעניינות לעבוד עימי,<br>על כל פנייה בנושאי עבודה או נגישות אשתדל להשיב בהקדם<br>בברכה,"

let formParent = document.querySelector("#formParent");
formParent.removeChild( document.querySelector("#contact_form") );

formParent.appendChild(success);

*/
