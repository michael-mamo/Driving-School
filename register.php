<?php
include 'manageUser.php';
?>
<?php
$error = false;
$errorMSG = array();

if( isset($_POST['register']) ) {  
    
   

	if(!isset($_POST['username']) || empty($_POST['username']) || !preg_match('/^[a-zA-Z\s]+$/', $_POST['username'])){
        $error = true;
        array_push($errorMSG, "ስም አድራሻ ያስገቡ.");
	}
	
	
	if(!isset($_POST['email']) || empty($_POST['email'])){
        $error = true;
        array_push($errorMSG, "ኢሜይል አድራሻ ያስገቡ.");
    }
    
    if(!isset($_POST['Password']) || empty($_POST['Password'])){
        $error = true;
        array_push($errorMSG, "ማለፊያ ቃል ያስገቡ.");        
		
    }
    if(!isset($_POST['Password']) || empty($_POST['Password_2'])){
        $error = true;
        array_push($errorMSG, "ማለፊያ ቃል ማረጋገጫ ያስገቡ.");                
		
    }
    if(!($_POST['Password'] == $_POST['Password_2'])){
        $error = true;
        array_push($errorMSG, "ተመሳሳይ ማለፊያ ቃል ያስገቡ !");                        
    }
}
if (!$error) {

          $users = new manageUser();
            $users->addUser(); 
        }



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		.warning{
			color: red;
			font-size: 10px;
		}
	</style>
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
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" name="register" onsubmit="return Validate();" name="vform">
				<div class="form-field">
					<h3>ለመመዝገብ</h3>
					<div style="color: red; font-size: 15px;">
					 <?php 
												// Display Error massage
												if($error){
													echo "<i class=\"\">";
													foreach($errorMSG as $msg){
                                                        echo $msg."<br />";
                                                    }
													echo "</i>";
												} 
											?>
										</div>
				</div>
				<div class="form-field form-group">
					<label>ስልክ ቁጥር</label>
					<input type="text" name="email" id = "email" placeholder="09 00 00 00 00" class="form-control">
					<div id="email_error"></div>
				</div>
				
				<div class="form-field form-group">
					<label>ስም</label>
				<input type="text" name="username" id = "uName" placeholder="user Name" class="form-control" id="myrequired"/>	
				<div id="uname_error"></div>
				</div>
				
				<div class="form-field form-group">
					<label>ማለፊያ ቃል</label>
					<input type="password" name="Password" id="sPass" class="form-control">
				</div>
				
				<div class="form-field form-group">
					<label>ማለፊያ ቃል ማረጋገጫ</label>
					<input type="password" name="Password_2" id="scPass" class="form-control">
					<div id="pas_error"></div>
				</div>
				
				<input type="submit" value="መዝግብ" class="btn" name="register">
				
			</form>
	</div>
</div>
</div>
</div>


</div>

 
	

	<!-- <footer><h6>Hawassa University</h6></footer> -->
	<script src="css/bootstrap-validate.js"></script>


</body>
</html>
