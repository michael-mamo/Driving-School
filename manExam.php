<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exam</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

<style type="text/css">
	body {
		margin: 0;
		padding: 0;
	}
	* {
		box-sizing: border-box;
	}
	.heade {
		position: absolute;
		height: 44px;
		width: 100%;
		background-color: inherit;
		z-index: 4;
	}
	.side-nav {
		position: absolute;
		width: 100%;
		background-color: inherit;
		z-index: 3;
		padding-top: 94px;
	}
	.side-nav ul {
		list-style: none;
		padding: 0;
		margin: 20px;
		background-size: 20px;
	}
	.side-nav ul li {
		padding: 20px 10px;
		border-bottom: 1px solid #fff;

	}
	.side-nav ul li a {
		color: #fff;
		text-decoration: none;
	}
	.side-nav ul li a i {
		color: #333;
	}
	.left-nav {
		position: absolute;
		width: 100%;
		background-color: inherit; ;
		z-index: 3;
		padding-top: 44px;
		margin-left: 0px;
		text-align: right;

    }
    .left-nav ul {
    	list-style: none;
    }
    .left-nav ul li {
    	padding: 10px 10px;

    }
    .left-nav ul li a {
    	text-decoration: underline;
		color: #fff;
		padding: 0px;
		margin: 70px;
    }
	.main-content {
		padding-top: 100px;
		margin-left: 120px;

	}
	@media screen and (min-width: 600px){
		.side-nav {
			width: 120px;
		}
	}
	.
</style>


</head>
<body>
	<div class="wrapper">
		<div class="nav">
			<div class="logo">
			 <a style="text-decoration: none;color: #fff; " href="index.php">መንጃ ፍቃድ መማርያ</a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">መነሽ</a></li>
				<li><a href="#">ዘና</a></li>
				<li><a href="#">ስለ</a></li>
				<li><a href="#">ያግ</a></li>
				<li class="log"><a href="Login.php">መግቢያ</a></li>
				<li><a href="Tutorial.php">መማርያ</a></li>
			</ul>
		</div>
	</div>	
	<div class="heade">
		<a href="#" class="nav-trigger"><span></span></a>
	</div>
	<div class="side-nav">
		<nav>
			<ul>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<a href="user.php"><span>Users</span></a>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>Content</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<a href="Exam.php"><span>Exam</span></a>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>Report</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>Others</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>

</div>
<div class="main-content" style="color: #fff; background-color: black;">
	<div class="header" style="">
		<div class="wht">
		<div class="form-area" style="">
			<form method="post" action="Exam.php" style="padding-top: -200px;" >
				<div class="form-field">
					<h3>Add Exam</h3>
				</div>
				<div class="form-field" style="text-align: left;">
					<label>Exam code</label>
					<input type="text" name="examCode" style="width: auto;" required onclick="greenBorder('uname')"; >
					
				</div>
				<div class="form-field">
					<label>Question ID</label>
					<input type="text" name="Qid" style="width: auto;" required onclick="greenBorder('uemail')";>
					
				</div>
				<div class="form-field">
					<label>Question</label>
					<textarea name="Question" cols="45" rows="5" required="onclick"> </textarea>
				</div>
				<div class="form-field">
					<label>Choice 1</label>
					<textarea name="Choice_1" cols="45" rows="5" required="onclick"> </textarea>
					
				</div>
				<div class="form-field">
					<label>Choice 2</label>
					<textarea name="Choice_2" cols="45" rows="5" required="onclick"> </textarea>
					
				</div>
				<div class="form-field">
					<label>Choice 3</label>
					<textarea name="Choice_3" cols="45" rows="5" required="onclick"> </textarea>
					
				</div>
				<div class="form-field">
					<label>Choice 4</label>
					<textarea name="Choice_4" cols="45" rows="5" required="onclick"> </textarea>
					
				</div>
				<div class="form-field">
					<label>Answer</label>
					<textarea name="Ans" cols="45" rows="5" required="onclick"> </textarea>
					
				</div>
				
				<input type="submit" value="መመዝገብ" class="btn" name="register">
				
			</form>
	</div>
</div>
</div>
</div>


</div>
 
</div>
<div class="left-nav">
	<ul>
		<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>Update</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>Delete</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>Add</span>
					</a>
				</li>
	</ul>
</div>
</body>
</html>