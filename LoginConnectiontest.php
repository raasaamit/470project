<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
        $myusername = mysqli_real_escape_string($conn,$_POST['Username']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['Password']); 
        $sql = $sql = "Select * from customer where C_username = '" . $myusername . "' and C_password = '" . $mypassword . "'";  
        $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: /Controller/userhome.php");
      }else {
         echo "Your Login Name or Password is invalid";
        
      }
   }
?>