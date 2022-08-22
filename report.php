<?php 
include 'database.php';
?>


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
        background-color: #105a81;
        display: block;
        width: 6%;
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
        		<div class="row">
                <div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px; margin-top: -40px;">
        				<h1>ሪፖርት</h1>

           <h5>ተጠቃሚዎች</h5>
                <table width="500" border="2" cellpadding="2" cellspacing="1">
                  <tr bgcolor="#2ECCFA">
                    <th>ቁጥር</th>
                    <th>ስም</th>
                    <th>ኢሜይል አድራሻ</th>
                     <th>የተመዘገበበት ቀን</th>
                  </tr>
                  <?php 
                $query = "SELECT *FROM  user";
                 $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>".$row['id']."</td>";
                  echo "<td>".$row['username']."</td>";
                  echo "<td>".$row['email']."</td>";
                   echo "<td>".$row['registration_date']."</td>";
                  echo "</tr>";
                 
                }
                ?>

                </table>
                <h5>ምእራፍዎች</h5>

                 <table width="500" border="2" cellpadding="2" cellspacing="1">
                  <tr bgcolor="#2ECCFA">
                    <th>ምእራፍ ቁጥር</th>
                    <th>ምእራፍ ርእስ</th>
                  </tr>
                  <?php 
                $query = "SELECT *FROM  content";
                 $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>".$row['cid']."</td>";
                  echo "<td>".$row['title']."</td>";
                  echo "</tr>";
                 
                }
                ?>

                </table>

                 <h5>አስተያየቶች</h5>
                <table width="500" border="2" cellpadding="2" cellspacing="1">
                  <tr bgcolor="#2ECCFA">
                    <th>ኢሜይል አድራሻ</th>
                    <th>ስም</th>
                    <th>አስተያየት</th>                   
                  </tr>
                  <?php 
                $query = "SELECT *FROM  contact";
                 $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>".$row['email']."</td>";
                  echo "<td>".$row['name']. " </td>";
                  echo "<td>".$row['message']."</td>";
                  echo "</tr>";
                 
                }
                ?>

                </table>

                


                      
        				
        			</div>
              <button class="btn" onclick="myFunction()">Print</button>
        			
        		</div>
        		
        	</div>
        	
        </div><script>
function myFunction() {
  window.print();
}
</script>
       



		</div>




	</div>



	<script src="css/bootstrap.min.js"></script>
	<script src="script.js"></script>
	<script src="css/jquery.min.js"></script>

</body>
</html>