<?php
	
	session_start();
	
	//checks whether user has logged in
	if (!isset($_SESSION['username'])) 
	{      
	    header("Location: login.php"); 
	}
	
	include '../includes/database.inc.php';
	
	$conn = getDatabaseConnection();
	
	function displayAllProducts()
	{
	    $sql = "SELECT productId, productName 
	    		FROM oe_product";
				
	    $records = getDataBySQL($sql);
	    
	    foreach ($records as $record) 
	    {
	        echo $record['productName']; 
	        echo " <a href='updateProduct.php?productId=".$record['productId']."'> Update </a>";
	        echo " <a href='deleteProduct.php?productId=".$record['productId']."'> Delete </a>";
	        echo "<br />";
	    }
	}
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	
	  	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
	    	Remove this if you use the .htaccess -->
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	  	<title>Products</title>
	  	<meta name="description" content="">
	  	<meta name="author" content="dixo4437">
	  
	  	<link href="css/styles.css" rel="stylesheet" />
	
	  	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	
	  	<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	  	<link rel="shortcut icon" href="/favicon.ico">
	  	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<header>
      		<h1>Product Administration</h1>
    	</header>

		<strong> Welcome <?=$_SESSION['adminName']?>! </strong>

    	<div>
     		<form action="../log/logout.php">
        		<input type="submit" value="Logout" />    
     		</form>
         
     		<form action="addGame.php">
        		<input type="submit" value="Add New Product" />    
     		</form>
      		<br /><br />
      		    
      		<?=displayAllProducts()?>
    	</div>
	</body>
    <footer style="clear:left">
		<hr>
		<p><a href="../../../index.html">Home</a></p>  
		Disclaimer: The information included in the page might not be accurate. It was developed as part of the CST336 class.
		<br />
		&copy; Dixon, 2015
		<br />
		<img src="../../../img/csumb-logo.png" alt="CSUMB Logo"  />
	</footer>
</html>