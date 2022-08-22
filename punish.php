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

.accordion {
	background: #003;
	color: #fff;
	cursor: pointer;
	border: 0px;
	padding: 10px;
	width: 100%;
	text-align: left;
	font-size: 14px;
	transition: .4s; 
}
button:focus {
	outline: none;
}
button.accordion.active, button.accordion:hover {
	background: 103453;
}

div.panel {
	padding: 0 18px;
	color: #000;
	max-height: 0;
	overflow: hidden;
	width: 70%;
	margin: 0 auto;
	transition: max-height .2s ease-out;
}

.panel p {
	font-size: 14px;
}
.head {
	color: red;
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
				 <li><a href="user-ad.php">ማስታወቂያ</a></li>
			</ul>
		</nav>

     
        <div class="page-content-wrapper">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8 col-lg-offst-2" style="padding-left: 50px;">
   
                        <h1>የቅጣት እርከኖች </h1>

        				<button class="accordion" type="button">አንደኛ ደረጃ</button>
        				<div class="panel">
        					<p><h5 class="head">አንደኛ ደረጃ የቅጣት እርከኖች--   <i> 80 ብር </i></h5> <br>
        						<br>
1.	ተሽከርካሪ ያላግባብ የጎተተ<br><br>
2.	የተሟላ የጭነት ማቀፊያ (ስፖናዳ) የሌለው ጭነት ጭኖ የነዳ<br><br>
3.	የጥሩምባ ድምጽ ያላግባብ ያሰማ<br><br>
4.	ተገቢ ባልሆነ የጥሩምባ ድምጽ የተጠቀመ<br><br>
5.	በትርፍ ጭነት ላይ ምልክት ያላደረገ<br><br>
6.	በመንገድ ላይ ተሽከርካሪ ያሳጠበ<br><br>
7.	የጭንቅላት መከላከያ /ሄልመት/ ያላደረገ<br><br>
8.	ከተፈቀደው ፍጥነት በታች ተሽከርካሪ ያሽከረከረ<br><br>
9.	የጭንቅላት መከለከያ ሄልሜት ሳያደርግ ብስክሌት ያሽከረከረ<br><br>

        					</p>
        				</div>
        				<button class="accordion" type="button">ሁለተኛ ደረጃ</button>
        				<div class="panel">
        					<p> <h5 class="head">ሁለተኛ ደረጃ የቅጣት እርከኖች--   <i> 100 ብር </i></h5> <br>
        						<br>
1.	በተሽከርካሪ መውጫ እና መግቢያ በር ላይ ያቆመ<br><br>
2.	ከመጠን በላይ ድምጽ እያሰማ ያሽከረከረ <br><br>
3.	የቀኙ ጠርዝ ሳይዝ በዝግታ ያሽከረከረ<br><br>
4.	በተከለከለ ቦታ ላይ ተሽከርካሪ ያቆመ<br><br>
5.	ከተፈቀደለት ጊዜ በላይተሽከርካሪ መንገድ ላይ ያቆመ<br><br>
6.	ላተሽከርካሪው እንቅስቃሴ አስፈላጊ ላልሆነ ሁለት እጁን መሪ ሳይዝ ያሽከረከረ<br><br>

        					</p>
        				</div>
        				<button class="accordion" type="button">ሶስተኛ ደረጃ</button>
        				<div class="panel">
        					<p><h5 class="head">ሶስተኛ ደረጃ  የቅጣት እርከኖች--   <i> 120 ብር </i></h5>
1.	በ 25 ሜትር ርቀት ምልክት ሳያሳይ አቅጣጫ የቀየረ<br><br>
2.	በጠባብ መንገድ ላይ ተሽከርካሪ ያቆመ<br><br>
3.	በቂ ርቀቱን ሳጠብቅ ያሽከረከረ<br><br>
4.	የመንገድ አከፋፋይ ደሴት/መስመር / ያቋረጠ<br><br>
5.	የመቀመጫ ቀበቶ ሳያስር ወይም ተሳፋሪወች የመቀመጫ ቀበቶአቸውን ማሰራቸውን ሳያረጋግጥ ተሽከርካሪ ያሽከረከረ<br><br>
6.	ከተፈቀደለት ጊዜ በላይ ተሽከርካሪ መንገድ ላይ የጠገነ<br><br>
7.	በተሽከርካሪው ላይ የጫነውን ጭነት በሚገባ ያላሰረ ወይም ያላለበሰ<br><br>
8.	አፈር አሸዋ ድንጋይና የመሳሰሉትን ባልተፈቀደ ቦታ ያራገፈ ወይም እንዲራገፍ ያደረገ<br><br>
9.	ሌሎች የትራፊክ ፍሰትን የሚያሰናክሉ ድርጊቶችን የፈጠመ<br><br>
10.	ያልተፈቀደ ጭነት ከህዝብ ጋር የጫነ<br><br>
11.	ከሚገባው በላይ ጭስ እንፋሎት ዘይት ወይም እያጨሰ እና እየተፋ የሚሄድ ተሽከርካሪ ያሽከረከረ<br><br>
12.	በትራፊክ ደሲት ላይ ያሽከረከረ<br><br>
13.	ተሳፋሪ ጭኖ ማድያ ገብቶ የቀዳ የህዝብ ትራንስፖርት ተሽከርካሪ<br><br>
14.	በማብሪያ ጊዜ መብራት እያለው ሳያበራ ያሽከረከረ<br><br>
15.	ወደ ማይሄድበት አቅጣጫ ምልክት ያሳየ<br><br>
16.	ተሽከርካሪ ደርቦ የቆመ<br><br>
17.	ከ 7 አመት በታች የሆኑ ህጻናትን ከአዋቂወች ጋር ሳያስቀምጥ ወይም ለድህነት ሲባል በተሰራ ማቀፊያ ውስጥ ሳያስቀምጥ ያሽከረከረ<br><br>
18.	የጉዞ ረድፍ ሳይጠብቅ ያሽከረከረ <br><br>
19.	በመታጠፊያ መንገድ ላይ ተሽከርካሪ ያቆመ<br><br>

        					</p>
        				</div>
        				<button class="accordion" type="button">አራተኛ ደረጃ</button>
        				<div class="panel">
        					<p><h5 class="head">አራተኛ ደረጃ  የቅጣት እርከኖች--   <i> 140 ብር </i></h5>
1.	በቅድሚያ መስጠት ሲገባው የከለከለ<br><br>
2.	ባልተሟላ መብራት ያሽከረከረ<br><br>
3.	የሚታጠፍበትን አቅጣጫ ሳይዝ ያሽከረከረ<br><br>
4.	ያለማንጸባረቂያ ምልክት የተበላሸን ተሽከርካሪ መንገድ ላይ ያቆመ<br><br>
5.	በሰንሰለት የሚሽከረከር በሰአት 8 ሰዐት ኪሎሜትር በታች የሚጓዝ ልዩ ተሽከርካሪ በመንገድ ላይ ያሽከረከረ <br><br>
6.	በአዉቶቡስ መሽከርከሪያ ስፍራ ተሽከርካሪ ያቆመ<br><br>
7.	የእሳት አደጋ ተሽከርከሪ ዉሃ መሙያ ቦታ ላይ ወይም በእሳት አደጋ መከላከያ እና ሆስፒታል በር ላይ ተሽከርካሪ ያቆመ<br><br>
8.	በተከለክለ ቦታ ላይ የጫነ ወይም ያወረደ<br><br>
9.	በባቡር ሃዲድ አጠገብ ተገቢውን ጥንቃቄ ያላደረገ<br><br>
10.	ለእላፊ ተሽከርካሪ ቅድሚያ የከለከለ <br><br>
11.	ከተፈቀደው የኝባር መብራት ሃይል ዉጪ የሆኑ መብራቶችን የተጠቀመ <br><br>
12.	ምልክት ሳያይ ተሽከርካሪ ከቆመበት ቦታ ያንቀሳቀሰ ወይም ያቆመ<br><br>
13.	በእግረኛ ማቋረጫ መንገድ ላይ ተሽከርካሪ ያቆመ<br><br>
14.	የሚከለከል ምልክት የጣለ<br><br>
15.	በትራፊክ ደሴት ላይ ተሽከርካሪ ያቆመ<br><br>
16.	በተሽከርካሪው የዉጨኛው አካል ላይ ሰው የጫነ<br><br>
17.	የቀስት አቅጣጫ የለቀቀ<br><br>
18.	ከተወሰነለት መቀመጫ ወይም የጭነት ልክ  የጫነ<br><br>
19.	የአሽከርካሪውን ዕይታ የሚከለክሉ መጋረጃ ተለጣፊ ላስፊክ ወይም ሌሎች ተመሳሳይ ነገሮችን ያስቀመጠ ወይም የለጠፈ<br><br>
20.	ከ 13 አመት በታች የሆነ ማነኛውንም ህጻን ፊት ለፊት ላይ አስቀምጦ ያሽከረከረ<br><br>
21.	ለአደጋ አገልግሎት ተሽከርካሪ ቅድሚያ ያልሰጠ<br><br>
22.	ተንቀሳቃሽ ስልክ ያነጋገረ ወይም መልክት እየላከ ወይም እየተቀበለ ወይም ማነኛውንም ነገር በጀሮ ማዳመጫ እያዳመጠ ተሽከርካሪ ያሽከረከረ<br><br>
23.	ተለቪዥን ወይም ሌሎች ተንቀሳቃሽ ምልክቶችን ተሽከርካሪ ውስጥ እየተመለከተ ያሽከረከረ<br><br>
24.	ተሽከርካሪ ላይ ከኋላ አንጸባራቂ ምልክት ሳይለጥፍ ያሽከረከረ<br><br>
25.	የትራፊክ ተቆጣጣሪ ትዕዛዝ ያላከበረ<br><br>
26.	ተሽከርካሪ ውስጥ ሬድዮ ቴፕ ሲዲ በከፍተኛ ድምጽ ያዳመጠ<br><br>

        					</p>
        				</div>
        				<button class="accordion" type="button">አምስተኛ ደረጃ</button>
        				<div class="panel">
        					<p><h5 class="head">አምስተኛ ደረጃ  የቅጣት እርከኖች--   <i> 160 ብር </i></h5>
1.	መስቀለኛ መንገድ ላይ ቅድሚያ ያልሰጠ<br><br>
2.	ተሽከርካሪ እንቅስቃሴ ላይ ተሳፋሪ የጫነ ወይም ያወረደ<br><br>
3.	አላግባብ ተሽከርካሪን ከፍቶ ያሽከረከረ<br><br>
4.	በህግ ከተወሰነው ከፍታ ርዝመት እና ስፋት ዉጪ ያሽከረከረ<br><br>
5.	ከተፈቀደለት ወንበር ዉጪ የጨመረ<br><br>
6.	ህጋዊ ፈቃድ ወይም ስልጣን ሳይኖረው የትራፊክ ፍሰትን ያወከ<br><br>
7.	በእግረኛ መንገድ ላይ ተሽከርካሪ ያቆመ<br><br>
8.	ህዝብ በሚበዛበት ሆስፒታሎችና ትምህርት ቤቶች በሚገኙበት አካባቢ መስቀለኛ እና እግረኛ እግረኛ ማቋረጫ ላይ እንዲሁም አሽከርካሪውን የሚከለክል እይታ ወይም እና ሌሎች በሚኖሩበት ጊዜ ፍጥነት ያሽከረከረ<br><br>
9.	በመንገድ ላይ የጣለውን ወይም የፈሰሰውን ፈሳሽ ወይም ጠጣር ነገር ያላጸዳ<br><br>
10.	በተሽከርካሪው ላይ ተገቢ ያልሆነ አካል የጨመረ<br><br>

        					</p>
        				</div>
        				<button class="accordion" type="button">ስድስተኛ ደረጃ</button>
        				<div class="panel">
        					<p><h5 class="head">አምስተኛ ደረጃ  የቅጣት እርከኖች--   <i> 180 ብር </i></h5>
1.	ለእግረኛ ቅድሚያ ያልሰጠ<br><br>
2.	ቀይ የትራፊክ መብራት የጣሰ<br><br>
3.	በህግ ከተወሰነው ፍጥነት በላይ ያሽከረከረ<br><br>
4.	በማብሪያ ጊዜ ምንም መብራት ሳይኖር ያሽከረከረ<br><br>
5.	በተከለከለ መንገድ ወይም አቅጣጫ ያሽከረከረ<br><br>
6.	በተከለከለ መንገድ ተሳፋሪ ወይም ጭነት የጫነ ወይም ያወረደ<br><br>
7.	የትራፊክ አደጋ ፈጽሞ በቦታው ያልቆመ<br><br>
8.	የአደጋ አገልግሎት አሽከርካሪ ከተፈቀደለት ድምጽ እና የአደጋ ምልክት ከሚፈጽመው ተግባር ዉጪ ያላግባብ የተጠቀመ<br><br>
9.	በጭነት ተሽከርካሪ በህግ ከተፈቀደለት ዉጪ ሰውኛሳፈረ ማነኛውንም ህጻን ፊት ላይ አስቀምጦ ያሽከረከረ<br><br>
10.	በድልድይ ላይ ተሽከርካሪ ያቆመ <br><br>
11.	የሚያስገድድ ምልክት የጣሰ ወይም ያላግባብ ወደኋላ ያሽከረከረ<br><br>
12.	ከተማ ውስጥ ከባድ መብራት/ፓውዛ/ የተጠቀመ <br><br>
13.	ሰክሮ አደንዛዥ ዕጽ ወይም ጫት ቅሞ ወይም እየቃመ ያሽከረከረ<br><br>
14.	የትራፊክ አደጋ አድርሶ የተጎዳውንና ህክምና የሚያስፈልገውን ሰው ህክምና ወደሚሰጥበት ተቋም ያላሳከመ <br><br>
15.	ተንቀሳቃሽ ስልክ እያነጋገረ ወይም መልክት እየላከ ወይም እየተቀበለ ወይም ማነኛውንም ነገር በጀሮ እያዳመጠ ያሽከረከረ<br><br>

        					</p>
        				</div>
        				<button class="accordion" type="button">ተጨማሪ ቅጣቶች</button>
        				<div class="panel">
        					<p>ሌሎች የጥፋት እና የቅጣት ምድብ<br><br>
1.	ቀላል ጥፋት<br><br><br>
1.1.	የአሽከረካሪ ብቃት ማረጋገጫ ኖሮት ሳይዝ ያሽከረከረ ብር <i>100</i><br><br>
1.2.	የዕድሳት ጊዜ አሳልፎ የአሽከርካሪ ፈቃዱን ለማሳደስ የቀረበ ብር <i>150</i><br><br>
1.3.	የአሽከርካሪ ብቃት ማረጋገጫ ፈቃዱን ሳይዝ ተሽከርካሪ ያሽከረክረ ብር <i>150</i><br><br>
2.	ከባድ ጥፋት<br><br><br>
2.1.	የአሽከርካሪ ብቃት ማረጋግጫ ፈቃድ ኖሮት ከምድቡ ዉጪ የሆነ ተሽከርካሪ ማሽከርከር ብር <i>1000</i><br><br>
2.2.	የአሽከርካሪ ብቃት ማረጋግጫ ፈቃድ ኖሮት የሚያሽከርካረክረውን ተሽከርካሪ ፈቃድ ለሌለው ሰው እንዲያሽከረከር መስጠት ብር <i>3000</i><br><br>
2.3.	የአሽከርካሪ ብቃት ማረጋግጫ ፈቃድ ሳይኖረ ያሽከረክረ ብር <i>5000</i><br><br>
የጥፋቱ ድግግሞሽ
ቀላል ጥፋት<br><br><br>
1.	ለሁለተኛ ጊዜ ብር <i>500</i><br><br>
2.	ለሶስተኛ ጊዜ ብር <i>1500</i><br><br>
3.	ለአራተኛ ጊዜ መንጃ ፈቃዱን ለአንድ አመት ማገድ<br><br>
4.	ለአምስተኛ ጊዜ መንጃ ፈቃዱን ማሰረዝ<br><br>
ከባድ ጥፋት<br><br><br>
1.	ለሁለተኛ ጊዜ ከባድ ጥፋት ተራ ቁጥር 2.1 ላይ የተጠቀሰውን ተላልፎ የተገኘ ብር <i>1500</i><br><br>
2.	ለሁለተኛ ጊዜ ተራ ቁጥር 2.3 ላይ የተጠቀሰውን ተላልፎ የተገኘ ብር <i>4500</i><br><br>
3.	ለሁለተኛ ጊዜ ተራ ቁጥር 2.4 ላይ የተጠቀሰውን ተላልፎ የተገኘ ብር <i>7500</i><br><br>
4.	ለሶስተኛ ጊዜ መንጃ ፈቃዱን ለአንድ አመት ማገድ <br><br>
5.	ለአራተኛ ጊዜ መንጃ ፈቃዱን ማሰረዝ<br><br>



        					</p>
        				</div>



        				
        			</div>
        			
        		</div>
        		
        	</div>
        	
        </div>



		</div>
	</div>
<script type="text/javascript">

	var acc = document.getElementsByClassName("accordion"); 
	var i;

	for ( i = 0; i < acc.length; i++) {
		acc[i].onclick = function() {
			this.classList.toggle("active");

			var panel = this.nextElementSibling;

			if (panel.style.maxHeight) {
				panel.style.maxHeight = null;
			}
			else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			}
		}
	}
	
</script>


	<script src="css/bootstrap.min.js"></script>
	<script src="script.js"></script>
	<script src="css/jquery.min.js"></script>

</body>
</html>