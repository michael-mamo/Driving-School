<?php
session_start();
include 'manageUser.php';
?>
<?php
$error = false;
$errorMSG = array();

if( isset($_POST['send']) ) {  
	
	
	if(!isset($_POST['email']) || empty($_POST['email'])){
        $error = true;
        array_push($errorMSG, "ኢሜይል አድራሻ ያስገቡ.");
    }

if (!$error) {

           $con = mysqli_connect("localhost","root","","projectdb");
          if(!$con){
                echo 'Connection Lost';
                die();
            }

           if(isset($_POST['send'])){
                        $uemail = $_POST["email"];
                        $sql = "SELECT * FROM user WHERE email='$uemail'";
                        $result = mysqli_query($con , $sql);

                        if (!$result) {
                        	echo "<script>alert('email Doesn't Exist' ); </script>";
                        }
                        else{
                        	while($row = mysqli_fetch_assoc($result)) {
                                $user = $row["username"];
                            }

                        	 echo "<script>alert('Please Check your Email'); </script>";
                        	 $to = $uemail;
                        	 $subject = 'Password Reset Link';
                        	 $message_body = '
                        	 Hello '.$user.', you have request password reset use this link
                        	http://localhost/Finalpro/reset.php';

                        	mail($to, $subject, $message_body);

                        }

        }
    }
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
					<h3>የተረሳ ማለፊያ ቃል ለመቀየር</h3>
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
					<label>ኢሜይል አድራሻ</label>
					<input type="email" name="email" id = "email" placeholder="you@example.com" class="form-control">
					<div id="email_error"></div>
				</div>
				
				<input type="submit" value="ላክ" class="btn" name="send">
				
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
