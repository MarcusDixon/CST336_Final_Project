<?php
	
	include 'includes/functions.inc.php';
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

  		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       		Remove this if you use the .htaccess -->
  		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  		<title>index</title>
  		<meta name="description" content="">
  		<meta name="author" content="dixo4437">

  		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<link href="css/style.css" rel="stylesheet" />

	</head>

	<body>
    	<header>
      		<h1>index</h1>
   	 	</header>

 		<form method = "get" action = "index.php">
 	
			<input type="submit" value="Search Products" name="searchForm" />
		</form>
		
		<div style="float:left">
		<?=startDisplay() ?>
		
		
		
			<iframe src="includes/getGameInfo.php" name="getGameIframe" width="800" height="400" frameborder="0"/></iframe>
		</div>
		
		<p><a href="log/login.php">Admin Login</a></p> 
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
