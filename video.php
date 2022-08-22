<!DOCTYPE html>
<html>
<head>
	<title>ቪዲዮ ምስል</title>
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
.min_video {
	display: inline-block;
	margin: 0px 0px 20px 0px;
	padding: 20px 20px 20px 20px;
}
.videos_container {
	margin-left: 20px;
	display: table;
}
#dd{
	display: none;
}
#lecture{
    font-family: "segoe ui light";
    background-color: #001;
   /* border-radius: 10px 0 10px 0;*/
    font-size: 16px;
    color:#fff;
    margin-left: 30px;
    width: 70px;
    height: 70px;
}
#lecture:hover{
    cursor:pointer;
    background-color: brown;
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
				 <li><a href="punish.php">ቅጣቶች</a></li>
				 <li><a href="video.php">ቪዲዮ ምስል</a></li>
				 <li><a href="user-ad.php">ማስታወቂያ</a></li>			</ul>
		</nav>

     
        <div class="page-content-wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px;">
        				<h1>ቪዲዮ ምስል</h1>

        				 <script>
                    var s = true;
                    function exportlecture(){
                         var xx = document.getElementById('dd');
                    if(s){
                       xx.style.display = "block"; 
                        s = false;
                    }else{
                        xx.style.display = "none";
                        s = true;
                    }
                    }
                  
                </script>
                <div class="videos_container">
                <button id="lecture" onclick="exportlecture();">ቪዲዮ ምስል</button>
                    <div id="dd">
                        <div class="min_video">
                        <video width="300" height="200" controls>
                          <source src="Video/car license in ethiopia 1.webm" type="video/webm">
                        </video>
                      <strong>መሰረታዊ የተሽከርካሪ ክፍሎች</strong>
                    </div>
                    <div class="min_video">
                        <video width="300" height="200" controls>
                          <source src="Video/car license in ethiopia 2.webm" type="video/webm">
                        </video>
                       <strong> የፍሬን ተሸካሚ ክፍሎች</strong>
                    </div>
                    <div class="min_video">
                        <video width="300" height="200" controls>
                           <source src="Video/car license in ethiopia 3.webm" type="video/webm">
                        </video>  
                        <strong>ቴክኒካዊ ፍተሻዎች </strong>             
                    </div>
                    <div class="min_video">
                        <video width="300" height="200" controls>
                           <source src="Video/ LDC driving lesson 1 - Getting Moving - key learning points.mp4" type="video/mp4">
                        </video>       
                        <strong> የተሽከርካሪ ክፍሎች</strong>          
                    </div>
                </div>
            </div>
        </div>







        				
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