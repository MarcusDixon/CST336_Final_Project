<?php

include 'database.inc.php';

$conn = getDatabaseConnection();


function startDisplay()
{

				//Displays all products by default
				if (!isset($_GET['searchForm'])) 
				{
					$records = displayAllProducts();
				} 
				else 
				{
					$records = filterProducts();
				}

				echo "<table border = 1>";
				echo "<tr>";
				echo "<td id = 'colTitle'>";
				echo "Name";
				echo "</td>";
				echo "<td id = 'colTitle'>";
				echo "Release Date";
				echo "</td>";
				echo "</tr>";

				foreach ($records as $record) 
				{
					echo "<tr>";
					echo "<td>";
					echo "<a target = 'getGameIframe' href='includes/getGameInfo.php?gameId=" . $record['gameId'] . "'>";
					echo $record['gameName'];
					echo "</a>";
					echo "</td>";
					echo "<td>";
					echo $record['releaseDate'];
					echo "</td>";
					echo "</tr>";
				}
				echo "</table>";
}


function displayAllProducts() 
{
	$sql = "SELECT gameName, gameId, releaseDate 
	FROM fp_game ORDER BY gameId";

	$records = getDataBySQL($sql);
	
	return $records;
	/*
	 foreach ($records as $record) {
	 echo $record['productName'] . "-" . $record['price'] . "<br>";
	 }*/

}



?>
