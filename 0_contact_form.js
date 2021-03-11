function redirectAfterSending() {
	setTimeout(()=>{
		window.location.replace("http://walla.co.il");
		return false;
	}, 10000);
}
// redirectAfterSending() is called on submit;
