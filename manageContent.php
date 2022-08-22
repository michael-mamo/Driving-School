<?php 



class managecontent {

public function addContent(){

     $con = mysqli_connect("localhost","root","","projectdb");
          if(!$con){
                echo 'Connection Lost';
                die();
            }

                    if(isset($_POST['register'])){
                        $con = mysqli_connect("localhost","root","","projectdb");
                        $cid = $_POST["cid"];
                        $title = $_POST["title"];
                        $content = $_POST["content"];
                        
                      $stmt = "insert into content (cid , title, content) values ('$cid', '$title','$content')";
                            $result = mysqli_query($con, $stmt);
                            if ($result){
                               echo "<script> alert('Submitted successfuly. ');</script>";
                               mysqli_close($con);
                           }
                         
                            else {
                               echo "<script> alert('Error Occured');</script>";
                            }     
                        
                    }
}



  }



 ?>