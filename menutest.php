<?php 
$servername = "localhost";
$username = "id10142725_crazycafe";
$password = "crazycafe1";
$dbname= "id10142725_restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	//mysqli__select_db($conn, "restaurant");
	//echo "Connection successful"; 
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Menu.</title>
<link rel="stylesheet" type="text/css" href="/View/homestyle.css">
</head>
<body>
	<div class="menu">
		<center><h1>Menu List Of CRAZY CAFE</h1></center><br><br>
	</div>
<center><button><a href="previousorder.php">Your previous orders</a></button><br><br>
		<table>

                    <tr>

                        <th> Product ID </th>
                        <th> Product Name </th>
                        <th> Price </th>
                        
                        
                        


                    </tr>
                   
                    <?php   
                                                  $total=0;                    

						$q3 = "select * from food";

						$show3 = mysqli_query($conn,$q3);


						while($res = mysqli_fetch_array($show3)){
					?>
                    		<tr>
                        		<td>
                            		<?php echo $res['F_ID'];  ?>
                        		</td>
                        		<td>
                            		<?php echo $res['F_name'];  ?>
                        		</td>
                        		<td>
                            		<?php echo $res['F_price'];  ?> Taka
                        		</td>
                        
                        		
                        		

   
       



       
  
                        		

                        

                        
                       
                    		</tr>


                    		<?php 
						}
?>


							

        </table>
<br><br>
<form method="post">
Username:<input type="text" name="cn">
Food id:<input type="number" name="fid">
Quantity:<input type="number" name="fq">

<input type="submit" name="add_to_cart" value="Order" >
<?php

   if(isset($_POST["add_to_cart"])) {
          
        $fp=$_POST['fid']; 
      $show4 = mysqli_query($conn,"select F_price from food where F_ID=$fp");
 $res = mysqli_fetch_array($show4);
     $qt=$_POST["fq"];
       $total=$res['F_price']*$qt;
        
?>

<br><br>
<?php 

$cn1=$_POST['cn']; 
$q5="select C_ID from customer where C_username='$cn1'";
$show5 = mysqli_query($conn,$q5);
$res1 = mysqli_fetch_array($show5);
$ni=$res1['C_ID'];
$sql="INSERT INTO ordering VALUES(null,$ni,$fp,$total,'$cn1')";

if ($conn->query($sql) === TRUE) {
    
          echo "Total price: ".$total." Taka";
?>
<br><br>
<?php
    echo "Want to Order a different item?Just enter the corresponding Food ID and Order again.";
?>
<br><br>
<?php 

 echo "Thank you for staying with us.";
} 
else {
    ?>
    <br><br>
    <?php
    echo "Please fill out the sections correctly again,specially the Food ID.";
    ?>
    <br><br>
    <?php
    echo "Thank you for staying with us..";
}  

}
include 'footer.php';
     
?>
</form>


</center>
	
</body>
</html>