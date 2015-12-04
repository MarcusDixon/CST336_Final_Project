
<?php

	include '../includes/database.inc.php';
 	$conn = getDatabaseConnection();
 
	function deleteGame()
	{
		global $conn;
    	$sql = "DELETE FROM fp_game 
    			WHERE gameId = :gameId";
    
    	$namedParameters = array();
    	$namedParameters[':gameId'] = $_GET['gameId'];
    	$statement = $conn->prepare($sql);    
    	$statement->execute($namedParameters);				
	}

	if(isset($_GET['goBack']))
	{
		header("Location: games.php");	
	}
?>

<html lang="en">
	<head>
		<title>Delete Game</title>
		<link href="../css/style.css" rel="stylesheet" />
	</head>
	<body>
		<header>
	    	<h1>Game Deleted!</h1>
	    </header>
		
		<form>
			<input type="submit" value="Return" name="goBack" />
		</form>
		<?=deleteGame()?>
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