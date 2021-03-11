function redirectAfterSending() {
	setTimeout(()=>{
		window.location.replace("http://walla.co.il");
		return false;
	}, 5000);
}
// redirectAfterSending() is called on submit;
