<?php
include 'manageUser.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="nav">
			<div class="logo">
			 <a style="text-decoration: none;color: #fff; " href="index.php">መንጃ ፍቃድ መማርያ</a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">መነሻ ገጽ</a></li>
				<li><a href="About-us.php">ስለእኛ</a></li>
				<li><a href="contact-us.php">ያግኙን</a></li>
				<li><a href="Login.php" style="color: yellow;">መግቢያ</a></li>
				<li><a href="Tutorial.php">መማርያ</a></li>
			</ul>
		</div>
	</div>	
	<div class="header">
		<div class="wht">
		<div class="form-area" style="background-color: rgba(0,0,0,0.6);">
		<form method="post" action="contact-us.php" name="register" onsubmit="return Validate();" name="vform">
				<div class="form-field">
					<h3>ለመላክ</h3>
				</div>
				<div class="form-field form-group">
					<label>ኢሜይል አድራሻ</label>
					<input type="email" name="email" id = "email" placeholder="you@example.com" class="form-control">
					<div id="email_error"></div>
				</div>
				
				<div class="form-field form-group">
					<label>ስም</label>
				<input type="text" name="username" id = "uName"  class="form-control" id="myrequired"/>	
				<div id="uname_error"></div>
				</div>
				
				<div class="form-field form-group">
					<label>መልክት: </label>
                    <textarea name="message" cols="45" rows="5" required > </textarea>
				</div>
				
				<input type="submit" value="ላክ" class="btn" name="contact">
				
			</form>
	</div>
</div>
</div>
</div>


</div>

	<?php
            $contact = new manageUser();
            $contact->addContact(); 
             ?>


 
	

	<!-- <footer><h6>Hawassa University</h6></footer> -->
	<script src="css/bootstrap-validate.js"></script>
	<script>
		
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

	</script>




</body>
</html>
