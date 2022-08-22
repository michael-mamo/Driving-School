<?php session_start(); ?>


<?php

                        $connection = mysqli_connect("localhost","root","","projectdb");
                        if(!$connection){
                            echo 'Connection Lost';
                            die();
                        }
                         $user = $_SESSION["uname"];
                         $uname = "";
                         $email = "";

 $sQuery = "SELECT * FROM user WHERE username = $user";

              $search_Result = mysqli_query($connection, $sQuery);

              if($search_Result)
              {
                if(mysqli_num_rows($search_Result))
                {
                  while ($row = mysqli_fetch_array($search_Result)) {
                     $email = $row['email'];
                     $uname = $row['username']; 
                  }
              }
          }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tutorial-ምእራፍ 9</title>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<style type="text/css">
	
  body{
  	position: relative;
  	overflow-x: hidden;
  }
  body,
  html{height: 100%;}

  .nav .open > a,
  .nav .open > a:hover,
  .nav .open > a:focus{background-color: transparent;}

#wrapper{
	padding-left: 0;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease; 
}
#wrapper .toggled{
   padding-left: 220px;
}

#sidebar-wrapper{
	/*z-index: 1000;*/
	left: 220px;
	width: 0;
	height: 100%;
	margin-left: -220px;
	/*background: #1a1a1a;*/
	background-color: #000;
/*	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;*/

}
/*#sidebar-wrapper::-webkit-scrollbar{
	display: none;
}*/
#wrapper.toggled #sidebar-wrapper{
	width: 220px;
}

#page-content-wrapper{
	width: 100%;
	padding-top: 70px;
}


#wrapper.toggled #page-content-wrapper{
	position: absolute;
	margin-right: 220px;
}

.sidebar-nav{
	position: absolute;
	top: 0;
	width: 220px;
	margin: 0;
	padding:0;
	list-style: none;
	display: inline-block;
}

.sidebar-nav li{
	position: relative;
	line-height: 20px;
	display: inline-block;
	width: 100%;
}
.container{
	padding-right: 10px;
	margin-left: 210px;
}
/*.sidebar-nav li:before{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	z-index: -1;
	height: 100%;
	width: 3px;
}*/
.sidenav > ul > a {
	color: black !important;
}
.searchIn{
		text-align: left;
		font-size: 16px;
		padding-top: 3px;
		/*display: block;*/
		width: 70%;
		border-radius: 4px;
		border-color: rgba(0,0,0,0.3);
		box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);

	}

	.btn2 {
		margin: 1px;
		text-align: center;
		padding: 10px;
		background-color: #fff;
		width: 8%;
		color: white;
		border-radius: 6px;
		font-weight: bold;
		box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);
}

.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 200px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}
.form-area{
        width: 120%;
        align-content: center;
        margin: -10% auto 0 auto;
        background-color: transparent;
        border-radius: 100px;
        border-width: 200px;
        border-color: #fff;
        padding: 1.5rem;
    }
    .form-field{
        padding: 10px;
        display: block;

    }
    .form-field label{
        display: block;
        color: black;
        font-size: 12px;
        margin: 5px 0;
        font-weight: bold;
        text-align: left;
    }
    .form-field input{
        text-align: left;
        font-size: 14px;
        padding: 3px;
        display: block;
        width: 60%;
        border-radius: 4px;
        border: none;
        box-shadow: 0 2px 3px 0 rgba(0,0,0,0.6);

    }









	</style>

</head>
<body>


	<div id="wrapper">
		<div class="overlay">
			<nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">	
				<ul class="nav sidebar-nav sidenav" style="color: black; text-align: center; background-color: #002;">
				<li style="padding-bottom: 40px; padding-top: 10px; color: #fff;"><a href="index.php">መነሻ ገጽ</a></li>
				<li><a href="Tutorial.php">ምእራፍ 1</a></li>
				 <li><a href="Ch2.php">ምእራፍ 2</a></li>
				 <li><a href="Ch3.php">ምእራፍ 3</a></li>
				 <li><a href="Ch4.php">ምእራፍ 4</a></li>
				 <li><a href="Ch5.php">ምእራፍ 5</a></li>
				 <li><a href="Ch6.php">ምእራፍ 6</a></li>	
				 <li><a href="Ch7.php">ምእራፍ 7</a></li>
				 <li><a href="Ch8.php">ምእራፍ 8</a></li>
				 <li><a href="Ch9.php">ምእራፍ 9</a></li>
				 <li><a href="Ch10.php">ምእራፍ 10</a></li>
				 <li><a href="Ch11.php">ምእራፍ 11</a></li>
				 <li><a href="Ch12.php">ምእራፍ 12</a></li>
				 <li><a href="Ch13.php">ምእራፍ 13</a></li>
				 <li><a href="Ch14.php">ምእራፍ 14</a></li>
				 <li><a href="quiz.php">ሙከራ ፈተና</a></li>
				 <li><a href="signs.php">የመንገድ ምልክቶች</a></li>
				 <li><a href="#">ቅጣቶች</a></li>			</ul>
		</nav>


        				

     
        <div class="page-content-wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px;">

        			<form method="post" action="change.php" >
        			<div class="form-field form-group">
					<label>ስም</label>
					
				<input type="text" name="uname" id = "uemail" placeholder="user Name" class="form-control" id="myrequired"/ value="<?php echo $uname; ?>">
					
				</div>
				<div class="form-field form-group">
					<label>ኢሜይል አድራሻ</label>

					<input type="email" name="email" id = "uname" placeholder="you@example.com" class="form-control" value="<?php echo $email; ?>">
					
				</div>
				<div class="form-field form-group">
					<label>ይድሮ ማለፊያ ቃል</label>
					<input type="password" name="oldpass" id="uPassword_1" class="form-control">
				</div>
				<div class="form-field form-group">
					<label>አዲስ ማለፊያ ቃል</label>
					<input type="password" name="newpass" id="uPassword_1" class="form-control">
				</div>
				<div class="form-field form-group">
					<label>ማለፊያ ቃል ማረጋገጫ</label>
					<input type="password" name="conpass" id="uPassword_2" class="form-control">
					
				</div>
				
				<input type="submit" value="ቀይር" class="btn" name="change">
				
			</form>
 
        				
        			</div>
        			
        		</div>
        		
        	</div>
        	
        </div>



		</div>
	</div>

<?php

if(isset($_POST['change'])){
                        $connection = mysqli_connect("localhost","root","","projectdb");
                        if(!$connection){
                            echo 'Connection Lost';
                            die();
                        }

               $user = $_SESSION["uname"];
               $username = $_POST['uname'];
               $email = $_POST['email'];
               $oldPass = $_POST['oldpass'];
               $newPass= $_POST['newpass'];
               $conPassword = $_POST['conpass'];
    
        //check if the username and password are correct
        $CheckQuery = "SELECT * FROM user where username = '$user' and password = '$oldPass'";
        $result = mysqli_query($connection, $CheckQuery);
        //check if the quey is failed or not
        if(!$result){
            die("Invalid username or password");
        }
        else{
            $row = mysqli_fetch_array($result);
            if($row['username'] == $user && $row['password'] == $oldPass){
                $update = "UPDATE user set username = '$username' , password = '$newPass', email = '$email' where username = '$user'";
                $result = mysqli_query($connection, $update);
                echo "<script> alert('Updated succfully');</script>";
            }
            else
            {
              echo "<script> alert('error changing');</script>";

            }

           
        }
    }

?>




	<script src="css/bootstrap.min.js"></script>
	<script src="script.js"></script>
	<script src="css/jquery.min.js"></script>

</body>
</html>