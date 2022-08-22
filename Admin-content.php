<!DOCTYPE html>
<html>
<head>
	<title>Admin-content</title>
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
        width: 15%;
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

  <?php
 $connection = mysqli_connect("localhost","root","","projectdb");
          if(!$connection){
                echo 'Connection Lost';
                die();
            }

            $cid = "";
            $title = "";
            $content = ""; 

            function getPosts(){

              $posts = array();
              $posts[0] = $_POST['cid'];
              $posts[1] = $_POST['title'];
              $posts[2] = $_POST['content'];
              return $posts;

            }

            if(isset($_POST['search']))
            {
              $data = getPosts();

              $sQuery = "SELECT * FROM content WHERE cid = $data[0]";

              $search_Result = mysqli_query($connection, $sQuery);

              if($search_Result)
              {
                if(mysqli_num_rows($search_Result))
                {
                  while ($row = mysqli_fetch_array($search_Result)) {
                     $cid = $row['cid'];
                     $title = $row['title'];
                     $content = $row['content']; 
                  }
                }else{
                   echo "<script> alert('ያስገቡት የተሳሳተ መረጃ ነው!');</script>";
                }
              }else{
                echo "<script> alert('Result Error');</script>";
              }

            }


if (isset($_POST['insert'])) 
{
  $data = getPosts();
   $insert_Query = "insert into content (cid ,title , content) values ('$data[0]', '$data[1]','$data[2]')";
 
    $insert_Result = mysqli_query($connection, $insert_Query);

    if($insert_Result)
    {
      if(mysqli_affected_rows($connection) > 0)
      {
        echo "<script> alert('በተሳካ ሁኔታ ተጠናቁዋል');</script>";
      }
      else{
        echo "<script> alert('በተሳካ ሁኔታ አልተጠናቀቀም');</script>";
      }
    }
}


if (isset($_POST['delete'])) 
{
  $data = getPosts();
  $delete_Query = "DELETE FROM content WHERE cid = '".$data[0] ."'";
 
    $delete_Result = mysqli_query($connection, $delete_Query);

    if($delete_Result)
    {
      if(mysqli_affected_rows($connection) > 0)
      {
        echo "<script> alert('በተሳካ ሁኔታ ተጠናቁዋል !');</script>";
      }
      else{
        echo "<script> alert('በተሳካ ሁኔታ አልተጠናቀቀም');</script>";
      }
    }
}


if (isset($_POST['update'])) 
{
  $data = getPosts();
  $update_Query = "UPDATE  content SET title = '$data[1]', content = '$data[2]' WHERE cid = '".$data[0] ."'";
 
    $update_Result = mysqli_query($connection, $update_Query);

    if($update_Result)
    {
      if(mysqli_affected_rows($connection) > 0)
      {
        echo "<script> alert('በተሳካ ሁኔታ ተጠናቁዋል !');</script>";
      }
      else{
        echo "<script> alert('በተሳካ ሁኔታ አልተጠናቀቀም !');</script>";
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
        				<h1>ምእራፍ</h1>

                  <form method="post" action="Admin-content.php" >
                    <label>ምእራፍ ቁጥር</label>
                    <input type="number" name="cid" value="<?php echo $cid;?>" style="width: auto;" required onclick="greenBorder('uemail')";>
                     <br><br><br>
                     
                    <label>ምእራፍ ርእስ</label>
                    <textarea name="title"  cols="35" rows="2" required onclick="greenBorder('uname')";> <?php echo $title;?></textarea>
                  
                    <br><br><br>
                  
                    <label>ምእራፍ</label>
                    <textarea name="content" cols="45" rows="8" required="onclick"> <?php echo $content;?></textarea>
                 
                    <br><br><br>
        </div>
      </div>
          
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