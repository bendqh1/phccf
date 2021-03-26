// Select contact form:
const contact_form = document.querySelector("#contact_form");

// Replace contact form with success message:

const success = document.createElement('h2')
success.innerHTML = `
<div id="success" class="general_structure success">
תודה על ההתעניינות לעבוד עימי
על כל פנייה בנושאי עבודה או נגישות אשתדל להשיב בהקדם
בברכה
</div>
`

contact_form.replaceWith(success);

