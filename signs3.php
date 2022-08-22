<!DOCTYPE html>
<html>
<head>
	<title>መንገድ ምልክቶች </title>
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


.modal {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: rgba(0, 0, 0, 0.5);
	z-index: 2;
	display: none;
}

.modal-content {
	background: #fff;
	margin-top: 100px;
	width: 50%;
	margin-left: auto;
	margin-right: auto;
	padding: 8px 24px;
	border-radius: 4px;
	z-index: 4;
	font-weight: 100;
	padding: 10px 0;
	font-size: 20px;
}
.modal-close {
	float: right;
	font-size: 20px;
	border: 0;
	outline: 0;
	padding: 5px 8px;
	border-radius: 50%;
	transform: rotate(45deg);
	cursor: pointer;
}

img {
	padding: 10px 10px 10px 10px;

}

.btn{
		margin: 15px;
		text-align: center;
		padding: 10px;
		background-color: red;
		/*display: block;*/
		width: 20%;
		color: white;
		border-radius: 6px;
		font-weight: bold;
		text-transform: uppercase;
		box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);
		transition: ease-in all 0.2s;
}
.btn1 {
		margin: 15px;
		text-align: center;
		padding: 10px;
		background-color: yellow;
		width: 20%;
		color: white;
		border-radius: 6px;
		font-weight: bold;
		text-transform: uppercase;
		box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);
		transition: ease-in all 0.2s;

}
.btn2 {
		margin: 15px;
		text-align: center;
		padding: 10px;
		background-color: blue;
		width: 20%;
		color: white;
		border-radius: 6px;
		font-weight: bold;
		text-transform: uppercase;
		box-shadow: 0 2px 3px 0 rgba(10,10,10,0.1);
		transition: ease-in all 0.2s;

}
.btn a {
	text-decoration: none;
}
.btn1 a {
	text-decoration: none;
}
.btn2 a {
	text-decoration: none;
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
        				<h1> መንገድ ምልክቶች </h1>
        				<h4> የሚያስገድዱ</h4>
                        <img src="img/i1.jpg" class="modal-open" data-modal="modal1" width="80" height="80;">
	                    <img src="img/i2.jpg" class="modal-open" data-modal="modal2" width="80" height="80;">
	                    <img src="img/i3.jpg" class="modal-open" data-modal="modal3" width="80" height="80;">
	                     <img src="img/i4.jpg" class="modal-open" data-modal="modal4" width="80" height="80;">
	                    <img src="img/i5.jpg" class="modal-open" data-modal="modal5" width="80" height="80;">
	                    <img src="img/i6.jpg" class="modal-open" data-modal="modal6" width="80" height="80;">
	                     <img src="img/i7.jpg" class="modal-open" data-modal="modal7" width="80" height="80;">
	                     <img src="img/i8.jpg" class="modal-open" data-modal="modal6" width="80" height="80;">
	                     <img src="img/i9.jpg" class="modal-open" data-modal="modal7" width="80" height="80;">
	                    <br>
                     <br>
                      <br>
                      
       <button class="btn"><a href="signs.php">የሚያስጠነቅቁ</a></button> 
    <button class="btn"><a href="signs1.php"> የሚከለክሉ</a></button>
    <button class="btn1"><a href="signs2.php"> ቅድሚያ የሚያሰጡ</a></button>
    <button class="btn2"><a href="signs3.php"> የሚያስገድዱ</a></button>
    <button class="btn2"><a href="signs4.php"> መረጃ የሚሰጡ</a></button>

     <div class="modal" id="modal1">
	 	<div class="modal-content">
	 		መንገዱ ፊት ለፊትና ወደቀኝ የሚያስኬድ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal2">
	 	<div class="modal-content">
	 		 መንገዱ ፊት ለፊትና ወደግራ የሚያስኬድ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal3">
	 	<div class="modal-content">
	 		 መንገዱ ፊት ለፊትና ወደቀኝ የሚታጠፍ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal4">
	 	<div class="modal-content">
	 		 መንገዱ ፊት ለፊትና ወደግራ የሚታጠፍ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal5">
	 	<div class="modal-content">
	 		 ወደቀኝ የሚገነጠል መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal6">
	 	<div class="modal-content">
	 		 ወደግራ የሚገነጠል መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal7">
	 	<div class="modal-content">
	 		 መንገዱ ወደግራ ስለሚታጠፍ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>
	 <div class="modal" id="modal8">
	 	<div class="modal-content">
	 		 ወደግራ የሚገነጠል መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal9">
	 	<div class="modal-content">
	 		 መንገዱ ወደግራ ስለሚታጠፍ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

                         </div>
        			</div>
        			
        		</div>
        		
        	</div>
        	
        </div>



		</div>
	</div>

 <script type="text/javascript">
	 	var modalBtns = document.querySelectorAll('.modal-open');

	 	modalBtns.forEach(function(btn){
	 		btn.onclick = function() {
	 			var modal = btn.getAttribute("data-modal");

	 			document.getElementById(modal).style.display = "block";
	 		};
	 	});


	 	var closeBtns = document.querySelectorAll(".modal-close");
	 	closeBtns.forEach(function(btn){
	 		btn.onclick = function() {
	 			var modal = (btn.closest(".modal").style.display = "none");
	 		};
	 	});
	 </script>


	<script src="css/bootstrap.min.js"></script>
	<script src="script.js"></script>
	<script src="css/jquery.min.js"></script>

</body>
</html>