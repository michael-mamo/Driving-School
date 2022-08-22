<?php                   
                        $con = mysqli_connect("localhost","root","","projectdb");
                        if(!$con){
                            echo 'Connection Lost';
                            die();
                        }
                        
                        $q="select * from user";
                        $query = mysqli_query($con, $q);

                        while ($rows = mysqli_fetch_array($query)) {
                        	?>

                <div> <?php echo $rows['username']; ?></div>

                       <?php } ?>
