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
		width: 20%;
		color: white;
		background-color: yellow;
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
				 <li><a href="user-ad.php">ማስታወቂያ</a></li>		</ul>
		</nav>

     
        <div class="page-content-wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px;">
        				<h1> መንገድ ምልክቶች </h1>
        				<h4>የሚያስጠነቅቁ</h4>
                        <img src="img/img1.jpg" class="modal-open" data-modal="modal1" width="80" height="80;">
	                    <img src="img/img2.jpg" class="modal-open" data-modal="modal2" width="80" height="80;">
	                    <img src="img/img3.jpg" class="modal-open" data-modal="modal3" width="80" height="80;">
	                     <img src="img/img4.jpg" class="modal-open" data-modal="modal4" width="80" height="80;">
	                    <img src="img/img5.jpg" class="modal-open" data-modal="modal5" width="80" height="80;">
	                    <img src="img/img6.jpg" class="modal-open" data-modal="modal6" width="80" height="80;">
	                     <img src="img/img7.jpg" class="modal-open" data-modal="modal7" width="80" height="80;">
	                    <img src="img/img8.jpg" class="modal-open" data-modal="modal8" width="80" height="80;">
	                    <img src="img/img9.jpg" class="modal-open" data-modal="modal9" width="80" height="80;">
	                     <img src="img/img10.jpg" class="modal-open" data-modal="modal10" width="80" height="80;">
	                    <img src="img/img11.jpg" class="modal-open" data-modal="modal11" width="80" height="80;">
	                    <img src="img/img12.jpg" class="modal-open" data-modal="modal12" width="80" height="80;">
	                     <img src="img/img13.jpg" class="modal-open" data-modal="modal13" width="80" height="80;">
	                    <img src="img/img14.jpg" class="modal-open" data-modal="modal14" width="80" height="80;">
	                    <img src="img/img15.jpg" class="modal-open" data-modal="modal15" width="80" height="80;">
	                     <img src="img/img16.jpg" class="modal-open" data-modal="modal16" width="80" height="80;">
	                    <img src="img/img17.jpg" class="modal-open" data-modal="modal17" width="80" height="80;">
	                    <img src="img/img18.jpg" class="modal-open" data-modal="modal18" width="80" height="80;">
	                     <img src="img/img19.jpg" class="modal-open" data-modal="modal19" width="80" height="80;">
	                    <img src="img/img20.jpg" class="modal-open" data-modal="modal20" width="80" height="80;">
	                    <img src="img/img21.jpg" class="modal-open" data-modal="modal21" width="80" height="80;">
	                     <img src="img/img22.jpg" class="modal-open" data-modal="modal22" width="80" height="80;">
	                    <img src="img/img23.jpg" class="modal-open" data-modal="modal23" width="80" height="80;">
	                    <img src="img/img24.jpg" class="modal-open" data-modal="modal24" width="80" height="80;">
	                     <img src="img/img25.jpg" class="modal-open" data-modal="modal25" width="80" height="80;">
	                    <img src="img/img26.jpg" class="modal-open" data-modal="modal26" width="80" height="80;">
	                    <img src="img/img27.jpg" class="modal-open" data-modal="modal27" width="80" height="80;">
	                     <img src="img/img28.jpg" class="modal-open" data-modal="modal28" width="80" height="80;">
	                    <img src="img/img29.jpg" class="modal-open" data-modal="modal29" width="80" height="80;">
	                    <img src="img/img30.jpg" class="modal-open" data-modal="modal30" width="80" height="80;">
                        <img src="img/img31.jpg" class="modal-open" data-modal="modal31" width="80" height="80;">
	                    <img src="img/img32.jpg" class="modal-open" data-modal="modal32" width="80" height="80;">
	                    <img src="img/img33.jpg" class="modal-open" data-modal="modal33" width="80" height="80;">
	                     <img src="img/img34.jpg" class="modal-open" data-modal="modal34" width="80" height="80;">
	                    <img src="img/img35.jpg" class="modal-open" data-modal="modal35" width="80" height="80;">
	                    <img src="img/img36.jpg" class="modal-open" data-modal="modal36" width="80" height="80;">
	                     <img src="img/img37.jpg" class="modal-open" data-modal="modal37" width="80" height="80;">
	                    <img src="img/img38.jpg" class="modal-open" data-modal="modal38" width="80" height="80;">
	                    <img src="img/img39.jpg" class="modal-open" data-modal="modal39" width="80" height="80;">
	                     <img src="img/img40.jpg" class="modal-open" data-modal="modal40" width="80" height="80;">
	                    <img src="img/img41.jpg" class="modal-open" data-modal="modal41" width="80" height="80;">
	                    <img src="img/img42.jpg" class="modal-open" data-modal="modal42" width="80" height="80;">
	                     <img src="img/img43.jpg" class="modal-open" data-modal="modal43" width="80" height="80;">
	                    <img src="img/img44.jpg" class="modal-open" data-modal="modal44" width="80" height="80;">
	                    <img src="img/img45.jpg" class="modal-open" data-modal="modal45" width="80" height="80;">
	                    <img src="img/img46.jpg" class="modal-open" data-modal="modal46" width="80" height="80;">
	                    <img src="img/img47.jpg" class="modal-open" data-modal="modal47" width="80" height="80;">
	                    <img src="img/img48.jpg" class="modal-open" data-modal="modal48" width="80" height="80;">
	                     <img src="img/img49.jpg" class="modal-open" data-modal="modal49" width="80" height="80;">
	                    <img src="img/img50.jpg" class="modal-open" data-modal="modal50" width="80" height="80;">
	                    <img src="img/img51.jpg" class="modal-open" data-modal="modal51" width="80" height="80;">
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
	 		 መንገዱ ወደቀኝ ስለሚታጠፍ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal9">
	 	<div class="modal-content">
	 		 መንገዱ መጀመሪያ ወደቀኝ ቀጥሎ ወደግራ ስለሚታጠፍ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal10">
	 	<div class="modal-content">
	 		 መንገዱ መጀመሪያ ወደግራ ቀጥሎ ወደቀኝ ስለሚታጠፍ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal11">
	 	<div class="modal-content">
	 		 ወደቀኝ እና ወደግራ የሚጠማዘዝ ኩርባ መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal12">
	 	<div class="modal-content">
	 		 ወደግራ እና ወደቀኝ የሚጠማዘዝ ኩርባ መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal13">
	 	<div class="modal-content">
	 		 በስተግራ የሚጠማዘዝ ኩርባ መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal14">
	 	<div class="modal-content">
	 		 በስተቀኝ የሚጠማዘዝ ኩርባ መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal15">
	 	<div class="modal-content">
	 		 መንገዱ በስተግራ እና በስተቀኝ ለሁለት ስለሚከፈል ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal16">
	 	<div class="modal-content">
	 		 መንገዱ በስተግራ እና በስተቀኝ እንጂ ወደፊት ዝግ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal17">
	 	<div class="modal-content">
	 		 መንገዱ ወደፊት ወደግራ እና ወደቀኝ ስለሚያስኬድ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal18">
	 	<div class="modal-content">
	 		 መስቀለኛ መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>


	 <div class="modal" id="modal19">
	 	<div class="modal-content">
	 		 በሁለቱም መንገድ እየጠበበ ስለሚሄድ ተጠንቅቀው ያሽከርክሩ፡፡  
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal20">
	 	<div class="modal-content">
	 		 በስተግራ በኩል መጋቢ መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal21">
	 	<div class="modal-content">
	 		 በስተቀኝ በኩል መጋቢ መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal22">
	 	<div class="modal-content">
	 		 በሁለት ተከፍሎ የነበረው መንገድ ባለአንድ ስለሚሆን ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal23">
	 	<div class="modal-content">
	 		 ባለአንድ የነበረው መንገድ ባለሁለት ስለሚሆን ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal24">
	 	<div class="modal-content">
	 		 በሁለት አቅጣጫ የተፈቀደ መንገድ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal25">
	 	<div class="modal-content">
	 		 በሁለቱም አቅጣጫ መተላለፍ የተፈቀደ መንገድ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal26">
	 	<div class="modal-content">
	 		 ባለሁለት አቅጣጫ መንገድ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal27">
	 	<div class="modal-content">
	 		 የትራፊክ መተላለፊያ መብራት ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal28">
	 	<div class="modal-content">
	 		  መስለኪያ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	   <div class="modal" id="modal29">
	 	<div class="modal-content">
	 		  ጠመዝማዛ መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal30">
	 	<div class="modal-content">
	 		  አደገኛ ቁልቁለት መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal31">
	 	<div class="modal-content">
	 		  የሚያንሽራትት መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal32">
	 	<div class="modal-content">
	 		 አደገኛ ናዳ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal33">
	 	<div class="modal-content">
	 		  አደገኛ ቁልቁለት መንገድ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal34">
	 	<div class="modal-content">
	 		  ጠባብ ድልድይ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal35">
	 	<div class="modal-content">
	 		  ተከፋች ድልድይ ስለሚያጋጥም ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal36">
	 	<div class="modal-content">
	 		  እግረኛ ሚበዛበት መንገድ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal37">
	 	<div class="modal-content">
	 		  ተማሪ ሚበዛበት መንገድ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal38">
	 	<div class="modal-content">
	 		  መንገዱ እየተጠገነ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal39">
	 	<div class="modal-content">
	 		  ህጻናት የሚገኙ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal40">
	 	<div class="modal-content">
	 		  የግብርና ሰራተኞች የሚገኙ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal41">
	 	<div class="modal-content">
	 		  ከእንስሳት ተሳፋሪዎች የሚገኙ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal42">
	 	<div class="modal-content">
	 		  መንገዱን የሚያቆርጡ እንስሳት የሚገኙ ስለሆነ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal43">
	 	<div class="modal-content">
	 		  በመንገዱ ላይ የባቡር ማቆረ ስላለ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal44">
	 	<div class="modal-content">
	 		  የሁለት ባቡሮች ማቆረ ስላለ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal45">
	 	<div class="modal-content">
	 		  መዝጊያ ያለው ባቡሮች ማቆረ ስላለ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal46">
	 	<div class="modal-content">
	 		  መዝጊያ የሌለው ባቡሮች ማቆረ ስላለ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	   <div class="modal" id="modal47">
	 	<div class="modal-content">
	 		  መዝጊያ የሌለው ባቡሮች ማቆረ ስላለ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	   <div class="modal" id="modal48">
	 	<div class="modal-content">
	 		  መዝጊያ የሌለው ባቡሮች ማቆረ ስላለ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	  <div class="modal" id="modal49">
	 	<div class="modal-content">
	 		  መዝጊያ የሌለው ባቡሮች ማቆረ ስላለ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	   <div class="modal" id="modal50">
	 	<div class="modal-content">
	 		  መዝጊያ የሌለው ባቡሮች ማቆረ ስላለ ተጠንቅቀው ያሽከርክሩ፡፡
	 		<div class="modal-close">+</div>
	 	</div>
	 </div>

	 <div class="modal" id="modal51">
	 	<div class="modal-content">
	 		  ዝቅ ብለው ሚበሩ አውሮፕላኖች ስላሉ ተጠንቅቀው ያሽከርክሩ፡፡
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