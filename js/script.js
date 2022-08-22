
// var valid = /^[a-zA-Z]+$/;

		var email  = document.forms["vform"] ["email"];
		var username  = document.forms["vform"]["username"];
		var Password  = document.forms["vform"]["Password"];
		var Password_2  = document.forms["vform"]["Password_2"];

		var uname_error = document.getElementById("uname_error");
		var email_error = document.getElementById("email_error");
		var pas_error = document.getElementById("pas_error");

		username.addEventListener("blur" , nameVerify , true);
		email.addEventListener("blur" , emailVerify , true);
		password.addEventListener("blur" , passwordVerify , true);


console.log();


  function Validate(){

if (username.value == "") {
	username.style.border = "1px solid red";
	uname_error.textContent = "username required";
	username.focus();
	return false;
}

if (email.value == "") {
	email.style.border = "1px solid red";
	email_error.textContent = "email required";
	email.focus();
	return false;
}

if (password.value == "") {
	password.style.border = "1px solid red";
	password_error.textContent = "password required";
	password.focus();
	return false;
}

}

  function nameVerify(){

  	if (!fname.value == valid) {
  		username.style.border = "1px solid #5E6E66";
  		username_error.innerHTML = "Invalid User Name";
  		return true;
  	}
  }

    function emailVerify(){

  	if (email.value != "") {
  		email.style.border = "1px solid #5E6E66";
  		email_error.innerHTML = "";
  		return true;
  	}
  }

   function passwordVerify(){

  	if (password.value != "") {
  		password.style.border = "1px solid #5E6E66";
  		password_error.innerHTML = "";
  		return true;
  	}
  }
