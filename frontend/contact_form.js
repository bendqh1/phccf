// Select contact form:
const contact_form = document.querySelector("#contact_form");

// Replace contact form with success message:

const success = document.createElement('div');
success.setAttribute("id", "success");
success.classList.add("general_structure", "success");
success.innerHTML = "תודה על ההתעניינות לעבוד עימי,<br>על כל פנייה בנושאי עבודה או נגישות אשתדל להשיב בהקדם<br>בברכה,"

let formParent = document.querySelector("#formParent");
formParent.removeChild( document.querySelector("#contact_form") );

formParent.appendChild(success);
