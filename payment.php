<?php 
include_once 'config.php';
 if(isset($_POST['confirm']))
          {
              $fname=$_POST["fname"];
              $lname=$_POST["lname"];
              $name=$_POST["name"];
			   $email=$_POST["email"];
              $pword1=$_POST["pword1"];
              $pword2=$_POST["pword2"];
              

              $sql = "INSERT INTO register (fname,lname,name,email,pword1,pword2)
              VALUES ('$fname','$lname', '$name','$email','$pword1','$pword2')";

              
                    if ($result = mysqli_query($con,$sql)) {
                      
                          echo " Successfully Registerd..";
                        } else{
                          echo "not insert";
                        }
}

?>