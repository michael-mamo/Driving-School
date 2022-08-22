<?php
include 'manageContent.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title>Tutorial</title>
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
        color: #fafafa;
        font-size: 12px;
        margin: 5px 0;
        font-weight: bold;
        text-align: left;
    }
    .form-field input{
        text-align: left;
        font-size: 1.1rem;
        padding: 3px;
        display: block;
        width: 100%;
        border-radius: 4px;
        border: none;
        box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);

    }
    .btn{
        margin: 15px;
        text-align: center;
        padding: 10px;
        background-color: #000;
        display: block;
        width: 50%;
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
        background-color: #111;
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
  margin-top:0px;
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







	</style>

</head>
<body>


	<div id="wrapper">
		<div class="overlay">
			<nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">	
				<ul class="nav sidebar-nav sidenav" style="color: black; text-align: center; background-color: #000;">
				<li style="padding-bottom: 40px; padding-top: 10px; color: #fff;"><a href="index.php">መነሻ ገጽ</a></li>
				 <li><a href="user.php">ተጠቃሚዎች</a></li>
				 <li><a href="Exxam.php">ፈተና</a></li>
				 <li><a href="content.php">ምእራፍ </a></li>
				 <li><a href="report.php">ሪፖርት</a></li>
				 <li><a href="#">ምእራፍ 5</a></li>
			</ul>
		</nav>

     
        <div class="page-content-wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px;">
        				<h1>ምእራፍ</h1>

                   <form method="post" action="content.php" >
                 
                    <label>ምእራፍ ቁጥር</label>
                    <input type="text" name="cid" style="width: auto;" required onclick="greenBorder('uemail')";>
                     <br><br><br>
                     
                    <label>ምእራፍ ርእስ</label>
                    <textarea name="title" cols="45" rows="5" required onclick="greenBorder('uname')";> </textarea>
                  
                    <br><br><br>
                  
                    <label>ምእራፍ</label>
                    <textarea name="content" cols="45" rows="8" required="onclick"> </textarea>
                 
                    <br><br><br>

                    <input type="submit" value="መዝግብ" class="btn" name="register">
                      
        				</form>

        			</div>
        			
        		</div>
        		
        	</div>
        	
        </div>

        

		</div>
	</div>

  <div class="left-menu">
  <ul>
    <li>
          <a href="#">
            <span><i class="fa fa-user"></i></span>
            <a href="editContent.php"><span>Update</span></a>
          </a>
        </li>
        <li>
          <a href="#">
            <span><i class="fa fa-user"></i></span>
            <span><a href="delete.php"> Delete </a></span>
          </a>
        </li>
        <li>
          <a href="#">
            <span><i class="fa fa-user"></i></span>
            <span>Add</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span><i class="fa fa-user"></i></span>
            <span>Log out</span>
          </a>
        </li>
  </ul>
</div>


  <?php
            $contents = new manageContent();
            $contents->addContent(); 
             ?>




	<script src="css/bootstrap.min.js"></script>
	<script src="script.js"></script>
	<script src="css/jquery.min.js"></script>

</body>
</html>