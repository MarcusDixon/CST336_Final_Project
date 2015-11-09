<?php 

	//start or resume an existing session
	session_start();  

	include '../../database.inc.php'; 

	$conn = getDatabaseConnection(); 

	//checks whether user submitted the form
	if (isset($_POST['loginForm']))
	{  
     
    	$username = $_POST['username']; 
    	$password = sha1($_POST['password']);

	    $sql = "SELECT *  
	            FROM oe_admin 
	            WHERE username = :username 
	            AND password = :password";
	             
	    $namedParameters = array(); 
	    $namedParameters[':username'] = $username;                 
	    $namedParameters[':password'] = $password;             
	     
	    $statement = $conn->prepare($sql);  
	    $statement->execute($namedParameters); 
	    $record = $statement->fetch(PDO::FETCH_ASSOC); 
	     
	    if (empty($record))
	    {
	         
	        echo "Wrong username or password!"; 
	         
	    } 
	    else
		{ 
	         
	        $_SESSION['username'] = $record['username']; 
	        $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName']; 
	         
	        header("Location: products.php");            
	    }    
	} 
?>