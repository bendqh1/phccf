const contactForm = document.querySelector("#contact_form");
contactForm.addEventListener("submit", event.preventDefault() );

// Construct an HTTP request
var xhr = new XMLHttpRequest();
xhr.open(form.method, form.action, true);
xhr.setRequestHeader('Accept', 'application/json; charset=utf-8');
xhr.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');

// Send the collected data as JSON
xhr.send(JSON.stringify(data));

// Callback function
xhr.onloadend = function (response) {
	if (response.target.status === 0) {

		// Failed XmlHttpRequest should be considered an undefined error.
		formStatus.className += ' alert-danger';
		formStatus.innerHTML = form.dataset.formError;

		} else if (response.target.status === 400) {

			// Bad Request
			formStatus.className += ' alert-danger';
			formStatus.innerHTML = JSON.parse(responseText).error;

		} else if (response.target.status === 200) {

			// Success
			formStatus.className += ' alert-success';
			formStatus.innerHTML = form.dataset.formSuccess;

		}
	};
};
