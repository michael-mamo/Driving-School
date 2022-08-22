<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
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
		background-color: inherit; ;
		z-index: 3;
		padding-top: 54px;
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
	.side-nav ul {
		list-style: none;
		padding: 0;
		margin: 20px;
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
	.main-content {
		padding-top: 100px;
		margin-left: 120px;

	}
	@media screen and (min-width: 600px){
		.side-nav {
			width: 120px;
		}
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
						<span>ምእራፍ 1</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 2</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 3</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 4</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 5</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 6</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 7</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 8</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 9</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 10</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 11</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 12</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 13</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ምእራፍ 14</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<a href="test.php"><span>Test</span></a>
					</a>
				</li>
			</ul>
		</nav>
	</div>

</div>
<div class="main-content" style="color: #fff;">

                <?php                   
                        $con = mysqli_connect("localhost","root","","projectdb");
                        if(!$con){
                            echo 'Connection Lost';
                            die();
                        }
                        
                        $q="select * from user";
                        $query = mysqli_query($con, $q);
                         ?>
                        <h4>Users</h4>
                       <?php
                        while ($rows = mysqli_fetch_array($query)) {
                        	?>

                <div style="font-weight: bold; font-size: 20px; display: ruby-base;"> <?php echo $rows['username']; ?></div>

                       <?php } ?>


</div>

<div class="left-nav">
	<ul>
		<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>Qick Reference</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>Yemenged melket</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span><i class="fa fa-user"></i></span>
						<span>ketatoch</span>
					</a>
				</li>
	</ul>
</div>

</body>

</body>
</html>