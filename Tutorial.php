<?php session_start(); ?>




<!DOCTYPE html>
<html>
<head>
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
	left: 0;
	width: 220px;
	margin: 0;
	padding:0;
	list-style: none;
	display: inline-block;
	/*height: 100%;*/

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
.left-menu{
  float: right;
	margin-top:30px;
	margin-right: 89px;
	list-style: none;
	/*position: absolute;*/
	padding-left: 0;
	font-size: 17px;
	font-weight: bolder;
	font-family: monospace;
	

}

.left-menu a {
	text-decoration: none;
	color: #000;

}
.left-menu ul li {
	list-style: none;
	color: black;
	text-transform: uppercase;
}
.left-menu ul li:hover {
	
	background: #10acac; 
	font-size: 20px;
}

p {
	font-size: 17px;
	line-height: 30px;
	color: #000;
}








	</style>

</head>
<body>


	<div id="wrapper">
		<div class="overlay">
			<nav class="navbar navbar-inverse" id="sidebar-wrapper" role="navigation">	
				<ul class="nav sidebar-nav sidenav sidenav1" style="color: black; text-align: center; background-color: #002;">
				<li style="padding-bottom: 40px; padding-top: 10px; color: #fff;"><a href="index.php">????????? ??????</a></li>
				 <li><a href="Tutorial.php">???????????? 1</a></li>
				 <li><a href="Ch2.php">???????????? 2</a></li>
				 <li><a href="Ch3.php">???????????? 3</a></li>
				 <li><a href="Ch4.php">???????????? 4</a></li>
				 <li><a href="Ch5.php">???????????? 5</a></li>
				 <li><a href="Ch6.php">???????????? 6</a></li>	
				 <li><a href="Ch7.php">???????????? 7</a></li>
				 <li><a href="Ch8.php">???????????? 8</a></li>
				 <li><a href="Ch9.php">???????????? 9</a></li>
				 <li><a href="Ch10.php">???????????? 10</a></li>
				 <li><a href="Ch11.php">???????????? 11</a></li>
				 <li><a href="Ch12.php">???????????? 12</a></li>
				 <li><a href="Ch13.php">???????????? 13</a></li>
				 <li><a href="Ch14.php">???????????? 14</a></li>
				 <li><a href="quiz.php">????????? ?????????</a></li>
				 <li><a href="signs.php">??????????????? ???????????????</a></li>
				 <li><a href="punish.php">????????????</a></li>
				 <li><a href="video.php">????????? ?????????</a></li>
				 <li><a href="user-ad.php">??????????????????</a></li>
			</ul>
		</nav>

		<?php
	if (isset($_SESSION["uname"])){
		$user = $_SESSION["uname"];
		
                ?>
                <div class="left-menu">
                	<ul>
                <li><a href="change.php"><?php echo $user; ?></a></li>
                <li><a href="userReport.php"> ????????????</a></li>
                <li><a href="revision.php"> ?????????</a></li>
                <li><a href="logout.php"> ??????</a></li>

                </ul>
                </div>

                <?php
                  }
               else{
                   ?>
				
				<?php 
                  }
			        ?>
<?php                   
                        $con = mysqli_connect("localhost","root","","projectdb");
                        if(!$con){
                            echo 'Connection Lost';
                            die();
                        }
                        
                        $q="SELECT * FROM content WHERE cid = '1'";
                        $query = mysqli_query($con, $q);
                        
                        while ($rows = mysqli_fetch_array($query)) {
                          $content = $rows['content'];
                          $title = $rows['title'];

                       } 
                       ?>
        				

     
        <div class="page-content-wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px;">
        				<form method="post" action="search-content.php">
        			<input type="text" name="search" class="searchIn" placeholder="?????????">
        			<input type="submit" value="?????????">
        			 
        			 </form>
        				<h1><?php echo $title; ?> </h1>
        				<p>
        					<?php echo $content; ?>
        				</p>
 
        				
        			</div>
        			
        		</div>
        		
        	</div>
        	
        </div>



		</div>
	</div>




	<script src="css/bootstrap.min.js"></script>
	<script src="script.js"></script>
	<script src="css/jquery.min.js"></script>

</body>
</html>