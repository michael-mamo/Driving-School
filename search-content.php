
<?php 

 $connection = mysqli_connect("localhost","root","","projectdb");
          if(!$connection){
                echo 'Connection Lost';
                die();
            }

 $output = "";

if(isset($_POST['search'])){
	$searchq = $_POST['search'];

	$query = mysqli_query($connection, "SELECT * FROM content WHERE title LIKE '%$searchq%' OR content LIKE '%$searchq%'");

	$count = mysqli_num_rows($query);

	if ($count == 0) {
		$output = 'no result!';
	}else{
		while ($row = mysqli_fetch_array($query)) {
			$title = $row['title'];
			$content = $row['content'];
			$cid = $row['cid'];

			$output = $title;
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<h6>ውጤት</h6>
	<br><br>

	<?php

	echo $output ?>


</body>
</html>