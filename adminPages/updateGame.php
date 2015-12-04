<?php

	 include '../includes/database.inc.php';
	 $conn = getDatabaseConnection();
	 
	 function getGameById()
	 {
		global $conn;
	    $sql = "SELECT * 
	    		FROM fp_game 
	    		WHERE gameId = :gameId";
	    
	    $namedParameters = array();
	    $namedParameters[':gameId'] = $_GET['gameId'];
	    
	    $statement = $conn->prepare($sql);    
	    $statement->execute($namedParameters);
	    $record = $statement->fetch();
	    
	    return $record;
	 }
	
	//admin submitted the Update Form
	if (isset($_GET['updateForm'])) 
	{      
	    $sql = "UPDATE fp_game
	            SET gameName = :gameName,
	            developerId = :developerId,
	            gameDescription = :gameDescription,
				platform = :platform,
				releaseDate = :releaseDate,
				genreId = :genreId,
				trailerLink = :trailerLink,
				gameWiki = :gameWiki
	            WHERE gameId = :gameId";
	    
	    $namedParameters = array();
		$namedParameters[':gameName'] 			= $_GET['gameName'];
	  	$namedParameters[':gameDescription'] 	= $_GET['gameDescription'];
	  	$namedParameters[':developerId'] 		= $_GET['developerId'];
	  	$namedParameters[':platform'] 			= $_GET['platform'];
	  	$namedParameters[':releaseDate'] 		= $_GET['releaseDate'];
	  	$namedParameters[':genreId'] 			= $_GET['genreId'];
	  	$namedParameters[':trailerLink'] 		= $_GET['trailerLink'];
	  	$namedParameters[':gameWiki'] 			= $_GET['gameWiki'];
	  
	    $conn = getDatabaseConnection();    
	    $statement = $conn->prepare($sql);
	    $statement->execute($namedParameters);    
	    
	    echo "Record has been updated!";   
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

  		<title>updateProduct</title>
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
      		<h1>Update Product</h1>
    	</header>

		
			<?$game = getGameById()?>

			

    	<div>
      		<form>
          		Game Name:
          		<input type="text" name="gameName" value="<?=$game['gameName']?>" />
          		<br /><br />
          		Developer:
          		<select name="developerId">
                	<option 
                   	<?php
                	if($game['developerId'] == 1)
                	echo 'selected'; 
                	?>                	
                	value="1"> Soft Drinks</option>
                    <option 
                   	<?php
                	if($game['developerId'] == 2)
                	echo 'selected'; 
                	?>
                    value="2">Snacks </option>
                    <option 
                	<?php
                	if($game['developerId'] == 3)
                	echo 'selected'; 
                	?>                    
                    value="3">Sandwiches </option>
                </select>
               	<br /><br />
          		Description:
          		<textarea rows="4" cols="20" name="gameDescription" ><?=$game['gameDescription']?></textarea>
          		<br /><br />
          		Platform:
          		<input type="text" name="platform" value="<?=$game['platform']?>" />
          		<br /><br />
				Release Date:
				<input type="date" name="releaseDate" value="<?=$game['releaseDate']?>" />
				<br /><br />          		
          		Genre:
          		<select name="categoryId">
                	<option 
                   	<?php
                	if($game['genreId'] == 1)
                	echo 'selected'; 
                	?>                	
                	value="1"> Soft Drinks</option>
                    <option 
                   	<?php
                	if($game['genreId'] == 2)
                	echo 'selected'; 
                	?>
                    value="2">Snacks </option>
                    <option 
                	<?php
                	if($game['genreId'] == 3)
                	echo 'selected'; 
                	?>                    
                    value="3">Sandwiches </option>
                </select>
               	<br /><br />
		        Trailer Link:
	          	<input type="text" name="trailerLink" value="<?=$game['trailerLink']?>" />
	          	<br /><br />
	          	Wiki Page:
	          	<input type="text" name="gameWiki" value="<?=$game['gameWiki']?>" />
	          	<br /><br />	            
	          	<br />          
          		<input type="submit" value="Update Product" name="updateForm" />
          		<input type="submit" value="Return" name="goBack" />
          		
          		<input type="hidden" name="gameId" value="<?=$game['gameId']?>">
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