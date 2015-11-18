function clicked() {
	
	var user=document.getElementById('login-username');
	var pass = document.getElementById('login-password');
	
	var coruser ="provimd7";
	var corpass="56789";
	
	if (user.value==coruser){
		
		if(pass.value==corpass){
		    window.open('searchpatient.html');
			
		}
		else {
			window.alert("Incorrect Username or Password");
			
		}
		
	}else {
		window.alert("Incorrect Username or Password");	
		}
	
}