<?php session_start();

 // if(isset($_SESSION['uname'])){

 // }
 // else
 //    header('location:login.php');

?>
<?php 
include 'database.php';
?>
<?php 
if (isset($_POST['insert'])) {

	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];


	$choices = array();
	$choices[1] = $_POST['Choice1'];
	$choices[2] = $_POST['Choice2'];
	$choices[3] = $_POST['Choice3'];
	$choices[4] = $_POST['Choice4'];

    $query = "INSERT INTO questions (question_number,text)
               VALUES('$question_number', '$question_text')";

    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

    if($insert_row){
    	foreach ($choices as $choice => $value) {
    		if($value != ''){
    			if($correct_choice == $choice){
    				$is_correct = 1;
    			}else{
    				$is_correct = 0;
    			}
    			$query = "INSERT INTO choices (question_number, is_correct, text)
               VALUES('$question_number', '$is_correct','$value')";

               $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
               if ($insert_row) {
               	continue;
               }else{
           die('Error : ('.$mysqli->errno .') '.$mysqli->error);
               }

    		}
    	}
     $msg = 'Question has been added';

    }



}

 $q = "SELECT * FROM questions";
    $r = $mysqli->query($q) or die($mysqli->error.__LINE__);
    $total = $r->num_rows;
    $next = $total+1; 

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
label{
	display: inline-block;
	width: 180px;
}
textarea{
	width: 97%;
	padding: 4px;
	border-radius: 5px;
	border: 1px #ccc solid;
}
input[type='number']{
	width: 50%;
	padding: 4px;
	border-radius: 5px;
	border: 1px #ccc solid;
}
@media only screen and (max-width:960px){
	.container{
		width: 80%;
	}
}
li a {
  color: white;
}







	</style>

</head>
<body>


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
        		<div class="row" style="margin-top: -50px;">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px;">
        				 <h3>ፈተና አስገባ</h3>
        				 <?php 
        				 if(isset($msg)){
        				 	 echo "<script> alert('Question Added');</script>";
        				 }
        				 ?>
        			<form method="post" action="Admin-quiz.php" >
                
                  <p>
                    <label>ጥያቄ ቁጥር</label>
                    <input type="number" name="question_number" value="<?php echo $next; ?>" style="width: auto;" required onclick="greenBorder('uemail')";>
                  </p>
                  <p>
                    <label>ጥያቄ: </label>
                    <textarea name="question_text" cols="45" rows="3" required > </textarea>
                </p>

                   <p>
                    <label>ምርጫ #1: </label>
                    <textarea name="Choice1" cols="45" rows="3" required onclick="greenBorder('uemail')";> </textarea>
                   </p>
                   <p>
                    <label>ምርጫ #2: </label>
                    <textarea name="Choice2" cols="45" rows="3" required onclick="greenBorder('uemail')";> </textarea>
                    </p>
                    <p>
                    <label>ምርጫ #3</label>
                    <textarea name="Choice3" cols="45" rows="3" required onclick="greenBorder('uemail')";> </textarea>
                    </p>
                    <p>
                    <label>ምርጫ #4</label>
                    <textarea name="Choice4" cols="45" rows="3" required onclick="greenBorder('uemail')";> </textarea>
                    </p>
                    <p>
                    <label>መልስ ቁጥር</label>
                   <input type="number" name="correct_choice" style="width: auto;"  onclick="greenBorder('uemail')";>
               </p>
                    
                    
                  <input type="submit" value="አስገባ" class="btn" name="insert">
                  <input type="submit" value="አጥፋ" class="btn" name="delete">
                  <input type="submit" value="አሻሽል" class="btn" name="update">
                  <input type="submit" value="ፈልግ" class="btn" name="search">
                
            </form>

        				
        				
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