<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body>
	

    <div class="home">
        
            <div class="email">
                <h1>Crazycafe.com</h1>
            </div>
        <div class="form">
        	<form action="feedbackConnection.php" method="post">
 		    	Username: <input type="text" name="username" required/><br><br>
 				Rating: <input type="text" name="rating" /><br><br>
 				Message: <input type="text" name="message" required/><br><br>
			  <input type="submit" />
			</form>
		</div>
	</div>
	<?php
    include 'footer.php';
    ?>
</body>
</html>