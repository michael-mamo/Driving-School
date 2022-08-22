<!DOCTYPE html>
<html>
<head>
	<title>Admin-user</title>
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
    .btn{
        margin: 15px;
        text-align: center;
        padding: 10px;
        background-color: #105a81;
       /* display: block;*/
        width: 20%;
        color: white;
        border-radius: 6px;
        font-weight: bold;
        text-transform: uppercase;
        box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);
        transition: ease-in all 0.2s;

    }
    .btn:hover{
        cursor: pointer;
        transition: ease-in all 0.2s;
        background-color: #10db31;
  }
  .form-field h5{
    text-align: center;
    color: #fafafa;
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
.left-menu{
  float: right;
  margin-top:-312px;
  margin-right: 89px;
  list-style: none;
  /*position: absolute;*/
  padding-left: 0;
}
.left-menu a {
  text-decoration: none;
}
.left-menu ul li {
  list-style: none;
  color: black;
}
li a {
  color: white;
}










	</style>

</head>
<body>

  <?php
 $connection = mysqli_connect("localhost","root","","projectdb");
          if(!$connection){
                echo 'Connection Lost';
                die();
            }

            $id = "";
            $email = "";
            $username = ""; 
            

            function getPosts(){
              $upassword = $_POST['password'];
              $password = md5($upassword); 
              $posts = array();
              $posts[0] = $_POST['id'];
              $posts[1] = $_POST['phone'];
              $posts[2] = $_POST['username'];
              $posts[3] = $password;
              return $posts;

            }

if (isset($_POST['insert'])) 
{
  $data = getPosts();
   $insert_Query = "insert into user (email ,username , password) values ('$data[1]', '$data[2]','$data[3]')";
 
    $insert_Result = mysqli_query($connection, $insert_Query);

    if($insert_Result)
    {
      if(mysqli_affected_rows($connection) > 0)
      {
        echo "<script> alert('Data Inserted');</script>";
      }
      else{
        echo "<script> alert('Data Not Inserted');</script>";
      }
    }
}



?>



<div id="wrapper">
    <div class="overlay">
      <nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">  
        <ul class="nav sidebar-nav sidenav" style="color: black; text-align: center; background-color: #105a81;">
        <li style="padding-bottom: 40px; padding-top: 10px; color: #fff;"><a href="#">መቆጣጠሪያ</a></li>
        <li><a href="Admin-user.php" >ተጠቃሚዎች</a></li>
         <li><a href="Admin-quiz.php">ፈተና</a></li>
         <li><a href="Admin-content.php">ምእራፍ </a></li>
         <li><a href="report.php">ሪፖርት</a></li>
         <li><a href="ad-admin.php">ማስታወቂያ</a></li>
         <li><a href="logout.php">ውጣ</a></li>
      </ul>
    </nav>

     
        <div class="page-content-wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px;">

                  <form method="post" action="Admin-user.php" >
        <div class="form-field">
          <h2> ተጠቃሚዎች </h2>
        <div class="form-field">
        <label>ስልክ ቁጥር</label>
        <input type="text" name="phone" id = "phone" placeholder="0909090909">
        </div>
        <div class="form-field">
        <label>መጠቀሚያ ስም</label>
        <input type="text" name="username" id = "uemail" placeholder="መጠቀሚያ ስልክ">
        </div>
        <div class="form-field">
        <label>የይለፍ ቃል</label>
        <input type="password" name="password" id = "password" placeholder="የይለፍ ቃል">
        </div>
      </div>
          
        <input type="submit" value="አስገባ" class="btn" name="insert">
        
      </form>
                      
        				
        			</div>
        			
        		</div>
        		
        	</div>
        	
        </div>



		</div>
	</div>
  <div class="left-menu">

  <!--  <?php                   
                        $con = mysqli_connect("localhost","root","","projectdb");
                        if(!$con){
                            echo 'Connection Lost';
                            die();
                        }
                        
                        $q="select * from user";
                        $query = mysqli_query($con, $q);
                         ?>
                        <h4>Users</h4>
                       <?php
                        while ($rows = mysqli_fetch_array($query)) {
                          ?>

 <div style="font-weight: bold; font-size: 20px; display: ruby-base;"> <?php echo $rows['id'] . $rows['username']; ?></div>

                       <?php } ?> -->

                     </div>

   

	<script src="css/bootstrap.min.js"></script>
	<script src="script.js"></script>
	<script src="css/jquery.min.js"></script>






</body>
</html>