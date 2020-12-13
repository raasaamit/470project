<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="productUpdate.css">
</head>

<body>
    
    <div class="email">
        <h1>Crazycafe.com</h1>
    </div>        
    
    <br>               
    <div class="Insert">
        <h5>Update Product</h5>                                
    </div>
    <div class="form">
        <form action="productUpdateConnection.php" method="post">
            Name: <input type="text" name="name" /><br><br>
            Price: <input type="text" name="price" /><br><br>                                
                <input type="submit" />
        </form>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>  