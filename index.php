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

  		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  		<link rel="shortcut icon" href="/favicon.ico">
  		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
  		
  		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>

	<body>
    	<header>
      		<h1>index</h1>
   	 	</header>

 		<form method = "get" action = "index.php">
 	
			<input type="submit" value="Search Products" name="searchForm" />
		</form>

		<?=startDisplay() ?>

		<div style="float:left">
			<iframe src="includes/getGameInfo.php" name="getGameIframe" width="250" height="300" frameborder="0"/></iframe>
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
