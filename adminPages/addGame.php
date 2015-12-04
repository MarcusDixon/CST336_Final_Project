<?php

	//admin submitted form to add product
	if (isset($_GET['addForm']))
	{      
	  include '../includes/database.inc.php';
	
	  $sql = "INSERT INTO fp_game ( gameName, gameDescription,  developerId, platform, releaseDate, genreId, trailerLink, gameWiki)
	          VALUES ( :gameName, :gameDescription,  :developerId, :platform, :releaseDate, genreId, :trailerLink, :gameWiki)";
	          
	  $namedParameters = array();
	  $namedParameters[':gameName'] 		= $_GET['gameName'];
	  $namedParameters[':gameDescription'] 	= $_GET['gameDescription'];
	  $namedParameters[':developerId'] 		= $_GET['developerId'];
	  $namedParameters[':platform'] 		= $_GET['platform'];
	  $namedParameters[':releaseDate'] 		= $_GET['releaseDate'];
	  $namedParameters[':genreId']		 	= $_GET['genreId'];
	  $namedParameters[':trailerLink'] 		= $_GET['trailerLink'];
	  $namedParameters[':gameWiki'] 		= $_GET['gameWiki'];

	
	  $conn = getDatabaseConnection();    
	  $statement = $conn->prepare($sql);
	  $statement->execute($namedParameters);    
	      
	  echo "Record has been added!";    
	}
	if(isset($_GET['goBack']))
	{
		header("Location: games.php");	
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
	  
	  	<link href="../css/style.css" rel="stylesheet" />
	
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
	        	Game Name:
	        	<input type="text" name="gameName" />
	        	<br /><br />
	          	Developer:
	          	<select name="developerId">
	          		<!--get from server-->
	            	<option value="1">Soft Drinks</option>
	                <option value="2">Snacks </option>
	                <option value="3">Sandwiches </option>
	            </select>
	            <br /><br />	        	
	          	Description:
	          	<textarea rows="4" cols="20" name="gameDescription"></textarea>
	          	<br /><br />
	          	Platform:
	          	<input type="text" name="platform" />
	          	<br /><br />
				Release Date:
				<input type="date" name="releaseDate" />
				<br /><br />
	          	Genre:
	          	<select name="genreId">
	          		<!--get from server-->
	            	<option value="1">Soft Drinks</option>
	                <option value="2">Snacks </option>
	                <option value="3">Sandwiches </option>
	            </select>
	            <br /><br />				
	          	Trailer Link:
	          	<input type="text" name="trailerLink" />
	          	<br /><br />
	          	Wiki Page:
	          	<input type="text" name="gameWiki" />
	          	<br /><br />	            
	          	<br />          
	          	<input type="submit" value="Add Game" name="addForm" />
	          	<input type="submit" value="Return" name="goBack" />  
	    	</form>
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