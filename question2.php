<?php session_start();
include 'database.php';

 // if(isset($_SESSION['uname'])){

 // }
 // else
 //    header('location:login.php');
?>
<?php 
  //set question number
  $number = (int) $_GET['n'];

  // get question

  $query = "SELECT * FROM questions
              WHERE question_number = $number";

              $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

              $question = $result->fetch_assoc();


// get answer

  $query = "SELECT * FROM choices
              WHERE question_number = $number";

              $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $q = "SELECT * FROM questions";
    $r = $mysqli->query($q) or die($mysqli->error.__LINE__);
    $total = $r->num_rows;

          



?>




<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
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
.start{
	display: inline-block;
	color: $666;
	background: #f4f4f4;
	border: 1px dotted #000;
	padding: 6px 13px;

}
.current{
	display: inline-block;
	color: $666;
	background: #f4f4f4;
	border: 1px dotted #000;
	padding: 6px 13px;
	

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
				 <li><a href="#">የመንገድ ምልክቶች</a></li>
				 <li><a href="#">ቅጣቶች</a></li>			</ul>
		</nav>

     
        <div class="page-content-wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px; font-size: 17px; font-family: serif;">
        				<h1>  ፈተና </h1>

        				<div class="current">ጥያቄ <?php echo $question['question_number'];?> ከ <?php echo $total?></div>
        				<br><br>
        				<p class="question">
        					<?php echo $question['question_number'];?>. <?php echo $question['text'];?>
        				</p>
        				<form method="post" name="quiz" action="process2.php">
        					<ul class="choices" style="list-style: none;">

        						<?php
        						while ($row = $choices->fetch_assoc()): ?>

        						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>">  <?php echo $row['text']?></li>

        					<?php endwhile; ?>

        					</ul>

        					<input class="btn" type="submit" value="ቀጣይ">
        					<input type="hidden" name = "number" value="<?php echo $number ?>">

        				</form>
        				
        			</div>
        			
        		</div>
        		
        	</div>
        	
        </div>



		</div>
	</div>



	<script src="css/bootstrap.min.js"></script>
	<script src="script.js"></script>
	

</body>
</html>