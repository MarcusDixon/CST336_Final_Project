<?php

	//admin submitted form to add product
	if (isset($_GET['addForm']))
	{      
	  include '../../database.inc.php';
	
	  $sql = "INSERT INTO oe_product ( productName, productDescription, price, categoryId, healthyChoice) 
	          VALUES ( :productName, :productDescription, :price, :categoryId, :healthyChoice)";
	          
	  $namedParameters = array();
	  $namedParameters[':productName'] = $_GET['productName'];
	  $namedParameters[':productDescription'] = $_GET['productDescription'];
	  $namedParameters[':price'] = $_GET['price'];
	  $namedParameters[':categoryId'] = $_GET['categoryId'];
	  $namedParameters[':healthyChoice'] = 0;
	  
	  if(isset($_GET['healthyChoice']))
	  {
	  	$namedParameters[':healthyChoice'] = 1;
	  }
	
	  $conn = getDatabaseConnection();    
	  $statement = $conn->prepare($sql);
	  $statement->execute($namedParameters);    
	      
	  echo "Record has been added!";    
	}
	if(isset($_GET['goBack']))
	{
		header("Location: products.php");	
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
	    	Remove this if you use the .htaccess -->
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	 	<title>Add new Product</title>
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
	    	<h1>Adding New Product</h1>
	    </header>
	
	    <div>
	    	<form>
	        	Product Name:
	        	<input type="text" name="productName" />
	        	<br />
	          	Description:
	          	<textarea rows="4" cols="20" name="productDescription"></textarea>
	          	<br />
	          	Price:
	          	<input type="text" name="price" />
	          	<br />
	          	Category:
	          	<select name="categoryId">
	            	<option value="1">Soft Drinks</option>
	                <option value="2">Snacks </option>
	                <option value="3">Sandwiches </option>
	            </select>
	            <br />
	            Healthy Choice:
	            <input type="checkbox" name="healthyChoice" />
	            
	          	<br />          
	          	<input type="submit" value="Add Product" name="addForm" />
	          	<input type="submit" value="Return" name="goBack" />  
	    	</form>
		</div>
	</body>
    <footer style="clear:left">
		<hr>
		<p><a href="../../index.html">Home</a></p>  
		Disclaimer: The information included in the page might not be accurate. It was developed as part of the CST336 class.
		<br />
		&copy; Dixon, 2015
		<br />
		<img src="../../img/csumb-logo.png" alt="CSUMB Logo"  />
	</footer>
</html>