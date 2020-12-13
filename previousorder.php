<?php 
include 'connection.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Menu.</title>
<link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>
	<div class="menu">
		<center><h1>Previous order section</h1></center><br><br>
	</div>
<form method="post">
<center>Username:<input type="text" name="cn"><br><br>


<input type="submit" name="por" value="See now" ><br><br>
<?php
if(isset($_POST["por"])) {
$cn1=$_POST['cn'];
echo "Previous orders for ".$cn1;
?>
<br><br>
		<table>

                    <tr>

                        <th> Product ID </th> &emsp;
                        <th> Paid amount</th>
                        
                        
                        
                        


                    </tr>
                   
                    <?php   
                                                                     

						$q9 = "select F_ID,Total_price from ordering where Username='$cn1'";

						$show9 = mysqli_query($conn,$q9);


						while($res = mysqli_fetch_array($show9)){
					?>
                    		<tr>
                        		<td>
                            		<?php echo $res['F_ID'];  ?>
                        		</td>
                        		<td>
                            		<?php echo $res['Total_price'];  ?>
                        		</td>
                        		
                        
                        		
                        		

   
       



       
  
                        		

                        

                        
                       
                    		</tr>


                    		<?php 
						}
?>


							

        </table>
</form>
<?php
}
?>



</center>
	
</body>
</html>