<?php 



class manageUser {
public function addUser(){

     $con = mysqli_connect("localhost","root","","projectdb");
          if(!$con){
                echo 'Connection Lost';
                die();
            }

                    if(isset($_POST['register'])){
                        $con = mysqli_connect("localhost","root","","projectdb");
                        $username = $_POST["username"];
                        $uemail = $_POST["email"];
                        $upassword = $_POST["Password"];
                        $uconfirm = $_POST["Password_2"];

                        //$password = md5($upassword); 
                        // $date = (Y-m-d);

                        $password = md5($upassword); 

                       //$sql = "SELECT * FROM user WHERE email='$uemail'";
                       //$res =  mysqli_query($con,$sql);
                         //if($res){
                           //   echo "<script> alert('የተመዘገበ ኢሜይል አድራሻ ስለሆነ ይቀይሩት ! ');</script>";
                             // die();
                               //   }


                        // $re= mysqli_query("SELECT * FROM user WHERE username='$username'", $con);
                        // if(!$re){
                        //   echo "<script> alert('user Error Occured');</script>";
                        //          }
                        
                      $stmt = "insert into user (username , email, password, registration_date) values ('$username', '$uemail','$password' , NOW())";
                        if ($upassword == $uconfirm){
                            $result = mysqli_query($con, $stmt);
                            if ($result){
                               echo "<script> alert('  $username በመመዝገቦ እናመሰግናለን ');</script>";
                               mysqli_close($con);
                           }
                         }
                            else {
                               echo "<script> alert('Error Occured');</script>";
                            }     
                        
                    }
}

 function addContact()
 {
 $con = mysqli_connect("localhost","root","","projectdb");
          if(!$con){
                echo 'Connection Lost';
                die();
            }

                    if(isset($_POST['contact'])){
                        $uemail = $_POST["email"];
                        $username = $_POST["username"];
                        $message = $_POST["message"];
                        // $date = (Y-m-d);

                        // $uEpassword = md5($upassword); 

                        // $res= mysqli_query("SELECT * FROM user WHERE email='$uemail'", $con);
                        //  if(!$res){
                        //       echo "<script> alert('email Error Occured');</script>";
                        //           }
                        // $re= mysqli_query("SELECT * FROM user WHERE username='$username'", $con);
                        // if(!$re){
                        //   echo "<script> alert('user Error Occured');</script>";
                        //          }
                        
                      $stmt = "insert into contact (email , name , message) values ('$uemail', '$username','$message')";
                        
                            $result = mysqli_query($con, $stmt);
                            if ($result){
                               echo "<script> alert('  $username ለአስተያየቶ እናመሰግናለን ');</script>";
                               mysqli_close($con);
                           }
                            else {
                               echo "<script> alert('Error Occured');</script>";
                            }     
                        
                    }





 }



  }



 ?>